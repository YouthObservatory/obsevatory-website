<?php

namespace observatorio\Http\Controllers;

use Illuminate\Http\Request;
use observatorio\Conteudo;
use observatorio\Idioma;
use observatorio\Publicacao;
use observatorio\Evento;
use Validator;
use Image;

class PublicacaoController extends Controller
{
    public function index()
    {
        $all = Publicacao::where('publicada', '=', true)->get()->keyBy('id');

        $highlight = null;
        $highlights = [];
        if (!$all->isEmpty()) {
            $highlight = $all->random();
            $all->forget($highlight->id);

            if (!$all->isEmpty()) {
                $highlights = ($all->count() >= 2) ? $all->random(2) : collect([$all->random()]);

                foreach ($highlights as $h) {
                    $all->forget($h->id);
                }
            }
        }

        return view('publicacao.list', [
            'highlight' => $highlight,
            'highlights' => $highlights,
            'all' => $all,
            'today' => Evento::todayEvents()->get(),
            'webinars' => Evento::webinarEvents()->take(3)->get(),
            'futureEv' => Evento::futureEvents()->take(3)->get(),
        ]);
    }

    public function post(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->guest('login');
        } elseif ($user->hasRole(['admin', 'membro'])) {
            return view('publicacao.create');
        }

        return abort(401);
    }

    public function edit(Request $request, $slug)
    {
        $user = $request->user();
        $publicacao = Publicacao::findBySlug($slug);

        if (!$publicacao) {
            abort(404);
        }

        if (!$user) {
            return redirect()->guest('login');
        } elseif ($user->hasRole('membro')) {
            if ($user->id == $publicacao->autor_id) {
                return view('publicacao.edit', ['publicacao' => $publicacao]);
            }
        } elseif ($user->hasRole('admin')) {
            return view('publicacao.edit', ['publicacao' => $publicacao]);
        }

        abort(401);
    }

    public function save(Request $request, $slug)
    {
        $user = $request->user();
        $publicacao = Publicacao::findBySlug($slug);

        $data = $request->all();
        $data['autor_id'] = $publicacao->autor_id;
        $data['cover'] = Publicacao::coverImage($data['cover']);

        if (!$user) {
            return redirect()->guest('login');
        } elseif (!$user->hasRole(['admin', 'membro'])) {
            abort(401);
        }

        if (!$user->hasRole('admin') && ($user->id != $publicacao->autor_id)) {
            abort(401);
        }

        $validator = $this->updateValidator($data);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        if($data['cover']) {
            $publicacao->update([
                'cover' => $data['cover']->encode('jpeg'),
            ]);
        }

        for ($i = 0; $i < 3; ++$i) {
            $conteudo = $publicacao->conteudo($data['idioma'][$i]);

            if (strlen($data['titulo'][$i]) != 0 && strlen($data['texto'][$i]) != 0) {
                if (!$conteudo) {
                    Conteudo::create([
                        'publicacao_id' => $publicacao->id,
                        'idioma_id' => Idioma::bySigla($data['idioma'][$i])->id,
                        'titulo' => $data['titulo'][$i],
                        'texto' => $data['texto'][$i],
                        'olho' => $data['olho'][$i],
                    ]);
                } else {
                    $conteudo->titulo = $data['titulo'][$i];
                    $conteudo->texto = $data['texto'][$i];
                    $conteudo->olho = $data['olho'][$i];
                    $conteudo->save();
                }
            }
        }

        return redirect()
                    ->action('PublicacaoController@show', ['slug' => $slug])
                    ->with('status', 'News updated!');
    }

    public function delete(Request $request, $slug)
    {
        $user = $request->user();
        $publicacao = Publicacao::findBySlug($slug);

        if (!$publicacao) {
            abort(404);
        }

        if (!$user) {
            return redirect()->guest('login');
        } elseif ($user->hasRole('membro')) {
            if ($publicacao->autor_id == $user->id) {
                $publicacao->delete();

                return redirect('/activity/news');
            }
        } elseif ($user->hasRole('admin')) {
            $publicacao->delete();

            return redirect('/activity/news');
        }

        abort(401);
    }

    public function show(Request $request, $slug)
    {
        $user = $request->user();
        $publicacao = Publicacao::findBySlug($slug);

        if (!$user && (!$publicacao || !$publicacao->publicada)) {
            abort(404);
        } elseif (!$publicacao->publicada) {
            if (!$user->hasRole('admin') && $user->id != $publicacao->autor_id) {
                abort(404);
            }
        }

        $lastNews = Publicacao::where('publicada', '=', true)
                        ->orderBy('created_at', 'desc')
                        ->take(3)->get();

        return view('publicacao.show', ['publicacao' => $publicacao, 'news' => $lastNews]);
    }

    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'autor_id' => 'required|max:100',
            'cover' => 'required',
            'titulo.0' => 'required',
            'titulo.1' => 'required_with:texto.1',
            'titulo.2' => 'required_with:texto.2',
            'texto.0' => 'required',
            'texto.1' => 'required_with:titulo.1',
            'texto.2' => 'required_with:titulo.2',
            'olho.0' => 'required',
            'olho.1' => 'required_with:titulo.1',
            'olho.2' => 'required_with:titulo.2',
        ]);

        $cover = $data['cover'];
        $validator->after(function ($validator) use ($cover) {
            Publicacao::validateCover($validator, $cover);
        });

        return $validator;
    }

    protected function updateValidator(array $data)
    {
        $validator = Validator::make($data, [
            'autor_id' => 'required|max:100',
            'titulo.0' => 'required',
            'titulo.1' => 'required_with:texto.1',
            'titulo.2' => 'required_with:texto.2',
            'texto.0' => 'required',
            'texto.1' => 'required_with:titulo.1',
            'texto.2' => 'required_with:titulo.2',
            'olho.0' => 'required',
            'olho.1' => 'required_with:titulo.1',
            'olho.2' => 'required_with:titulo.2',
        ]);

        $cover = $data['cover'];
        if ($cover) {
            $validator->after(function ($validator) use ($cover) {
                Publicacao::validateCover($validator, $cover);
            });
        }

        return $validator;
    }

    protected function create(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->guest('login');
        } elseif (!$user->hasRole(['admin', 'membro'])) {
            abort(401);
        }

        $data = $request->all();

        $data['autor_id'] = $request->user()->id;
        $data['publicada'] = false;
        $data['cover'] = Publicacao::coverImage($data['cover']);

        if ($user->hasRole('admin')) {
            $data['publicada'] = true;
        }

        $validator = $this->validator($data);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $publicacao = new Publicacao([
            'autor_id' => $data['autor_id'],
            'publicada' => $data['publicada'],
            'cover' => $data['cover']->encode('jpeg'),
        ]);

        $publicacao->title = $data['titulo'][0];

        $publicacao->save();

        for ($i = 0; $i < 3; ++$i) {
            if (strlen($data['titulo'][$i]) != 0 && strlen($data['texto'][$i]) != 0) {
                Conteudo::create([
                    'publicacao_id' => $publicacao->id,
                    'idioma_id' => Idioma::bySigla($data['idioma'][$i])->id,
                    'titulo' => $data['titulo'][$i],
                    'texto' => $data['texto'][$i],
                    'olho' => $data['olho'][$i],
                ]);
            }
        }

        return redirect('/activity/news');
    }

    protected function getCover(Request $request, $slug, $size = 745)
    {
        if ($size > 745) {
            abort(401);
        }

        $publicacao = Publicacao::findBySlug($slug);

        if (!$publicacao) {
            abort(404);
        }

        $cover = Image::make($publicacao->cover)->widen($size);

        $response = response($cover->encode('jpeg'));
        $response->header('Content-Type', 'image/jpeg');

        return $response;
    }
}

<?php

namespace observatorio\Http\Controllers;

use Illuminate\Http\Request;
use observatorio\Evento as Evento;
use Response;
use Validator;
use Carbon\Carbon;

class EventosController extends Controller
{
    public function show()
    {
        $now = Carbon::today()->format('Y-m-d');

        $events = Evento::where('data_fim', '>=', $now)->orderBy('data_inicio')->paginate(9);

        return view('eventos.show', [
          'eventos' => $events,
          'coming' => true
        ]);
    }

    public function showPast()
    {
        $now = Carbon::today()->format('Y-m-d');

        return view('eventos.show', [
          'eventos' => Evento::where('data_fim', '<=', $now)->orderBy('data_inicio')->paginate(9),
          'coming' => false
        ]);
    }

    public function markers()
    {
        $events = array();
        $now = Carbon::today()->format('Y-m-d');
        foreach (Evento::where([['data_fim', '>=', $now], ['online', '=', false]])->get() as $evento) {
            array_push($events, $evento->doMaker());
        }

        return Response::json(array(
            'events' => $events,
        ));
    }

    public function markersPast()
    {
        $events = array();
        $now = Carbon::today()->format('Y-m-d');
        foreach (Evento::where([['data_fim', '<=', $now], ['online', '=', false]])->get() as $evento) {
            array_push($events, $evento->doMaker());
        }

        return Response::json(array(
            'events' => $events,
        ));
    }

    protected function validator(array $data)
    {
        if (isset($data['online']) && $data['online'] == 'on') {
            return Validator::make($data, [
                'autor_id' => 'required',
                'data_inicio' => 'required',
                'data_fim' => 'required',
                'titulo' => 'required',
                'url' => 'required',
            ]);
        } else {
            return Validator::make($data, [
                'autor_id' => 'required',
                'data_inicio' => 'required',
                'data_fim' => 'required',
                'titulo' => 'required',
                'pais_sigla' => 'required',
                'localizacao' => 'required',
                'url' => 'required',
            ]);
        }
    }

    public function create(Request $request)
    {
        $user = $request->user();
        if (!$user) {
            return redirect()->guest('login');
        } elseif ($user->hasRole(['admin', 'membro'])) {
            return view('eventos.create');
        }

        abort(401);
    }

    public function post(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            return redirect()->guest('login');
        } elseif (!$user->hasRole(['admin', 'membro'])) {
            abort(401);
        }

        $data = $request->all();
        $data['autor_id'] = $request->user()->id;

        $validator = $this->validator($data);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        if (isset($data['online']) && $data['online'] == 'off') {
            Evento::create([
                'autor_id' => $data['autor_id'],
                'data_inicio' => $data['data_inicio'],
                'data_fim' => $data['data_fim'],
                'titulo' => $data['titulo'],
                'pais_sigla' => $data['pais_sigla'],
                'localizacao' => $data['localizacao'],
                'online' => 0,
                'url' => $data['url'],
            ]);
        } else {
            Evento::create([
                'autor_id' => $data['autor_id'],
                'data_inicio' => $data['data_inicio'],
                'data_fim' => $data['data_fim'],
                'titulo' => $data['titulo'],
                'online' => 1,
                'url' => $data['url'],
            ]);
        }

        return redirect(_url('/activity/events'));
    }

    public function details(Request $request, $id)
    {
        $event = Evento::find($id);
        if (!$event) {
            abort(404);
        }

        return view('eventos.details', ['event' => $event]);
    }

    public function delete(Request $request, $id)
    {
        $evento = Evento::find($id);
        if (!$evento) {
            abort(404);
        }

        if (!$request->user()) {
            return redirect()->guest('login');
        }

        if (!own($evento->autor_id) && !is_admin()) {
            abort(403);
        }

        $evento->delete();

        return redirect('/activity/events');
    }

    public function edit(Request $request, $id)
    {
        $evento = Evento::find($id);
        if (!$evento) {
            abort(404);
        }

        if (!$request->user()) {
            return redirect()->guest('login');
        }

        if (!own($evento->autor_id) && !is_admin()) {
            abort(403);
        }

        return view('eventos.edit', ['evento' => $evento]);
    }

    public function post_edit(Request $request, $id)
    {
        $user = $request->user();
        $evento = Evento::find($id);

        if (!$evento) {
            abort(404);
        }

        if (!$user) {
            return redirect()->guest('login');
        } elseif (!$user->hasRole(['admin', 'membro'])) {
            abort(401);
        }

        if ($user->hasRole('membro') && ($user->id != $evento->autor_id)) {
            abort(401);
        }

        $data = $request->all();
        $data['autor_id'] = $evento->autor_id;

        $validator = $this->validator($data);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $evento->data_inicio = $data['data_inicio'];
        $evento->data_fim = $data['data_fim'];
        $evento->titulo = $data['titulo'];
        $evento->url = $data['url'];
        if (isset($data['online']) && $data['online'] == 'on') {
            $evento->online = 1;
        } else {
            $evento->online = 0;
            $evento->pais_sigla = $data['pais_sigla'];
            $evento->localizacao = $data['localizacao'];
        }

        $evento->save();

        return redirect(_url('/activity/events'));
    }
}

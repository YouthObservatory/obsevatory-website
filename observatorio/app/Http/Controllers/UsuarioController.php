<?php

namespace observatorio\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;
use observatorio\Usuario;
use observatorio\Comentario;
use observatorio\Publicacao;
use Image;

/**
 * Class ComentarioController.
 */
class UsuarioController extends Controller
{
    public function show(Request $request, $slug)
    {
        $user = $request->user();
        $own = false;

        if (!$user) {
            $user = Usuario::findBySlug($slug);
        } else {
            if ($user->username == $slug) {
                $own = true;
            } else {
                $user = Usuario::findBySlug($slug);
            }
        }

        if (!$user) {
            abort(404);
        }

        $comments = Comentario::where('usuario_id', '=', $user->id)->get();
        $news = Publicacao::where('autor_id', '=', $user->id)->get();

        return view('usuarios.show', ['user' => $user, 'own' => $own,
                'comments' => $comments, 'news' => $news, ]);
    }

    /**
     * @param Request $request (deve conter dois valores:
     *                         String field - o campo da tabela a ser alterado
     *                         String value - valor a ser modificado
     *
     * @return mixed (Redireciona para uma visão com a mensagem de sucesso)
     */
    protected function edit(Request $request, $slug)
    {
        $user = $request->user();

        if (!$user) {
            throw new AuthRequiredException();
        }

        $userToEdit = Usuario::findByUsername($slug);

        if (!$userToEdit) {
            abort(404);
        }

        return view('usuarios.edit', ['user' => $userToEdit]);
    }

    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'name' => 'max:100',
            'email' => 'email|max:255',
            'sexo' => 'in:male,female,other',
            'password' => 'confirmed|min:6',
        ]);

        return $validator;
    }

    protected function save(Request $request, $slug)
    {
        $user = $request->user();
        $userToEdit = Usuario::findByUsername($slug);

        if (!$user) {
            throw new AuthRequiredException();
        } elseif (!$userToEdit) {
            abort(404);
        } elseif ($user->id !== $userToEdit->id) {
            throw new PermissionLevelException();
        }

        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $updatedFields = $request->except('_token');

        foreach ($updatedFields as $k => $v) {
            if (trim($v) == '') {
                unset($updatedFields[$k]);
            }
        }

        $userToEdit->update($updatedFields);

        return redirect()
                    ->action('UsuarioController@show', ['slug' => $slug])
                    ->with('status', 'Profile updated!');
    }

    public static function avatarValidator($avatar)
    {
        $validator = Validator::make(['avatar' => $avatar], [
            'avatar' => 'required',
        ]);

        $validator->after(function ($validator) use ($avatar) {
            Usuario::validateAvatar($validator, $avatar);
        });

        return $validator;
    }

    protected function avatarUpdate(Request $request)
    {
        if (!$request->user()) {
            throw new AuthRequiredException();
        }

        $user = $request->user();

        $avatar = Usuario::avatarImage($request->input('avatar'));

        $validator = $this->avatarValidator($avatar);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $user->foto = $avatar->encode('png');

        if ($user->save()) {
            return response()->json(['message' => 'Avatar updated successfully']);
        }

        return response()->json(['error' => true, 'message' => 'Something went wrong']);
    }

    protected function getAvatar(Request $request, $slug, $size = 128)
    {
        if ($size > 128) {
            abort(401);
        }

        $user = Usuario::findBySlug($slug);

        if (!$user) {
            abort(404);
        }

        if ($user->foto) {
            $avatar = Image::make($user->foto);
        } else {
            $avatar = Image::make(__DIR__.'/../../../public/images/avatar/null.png');
        }

        $avatar->resize($size, $size);

        $response = response($avatar->encode('png'));
        $response->header('Content-Type', 'image/png');

        return $response;
    }

    /**
     * @param Request $request (Deve conter id do usuario a ser deletado)
     *
     * @return mixed (Redireciona para uma visão com a mensagem de sucesso ou falha da exclusão)
     */
    public function delete(Request $request, $slug)
    {
        $usuario = Usuario::findByUsername($slug);
        if (!$usuario) {
            abort(404);
        }

        if (!$request->user()) {
            return redirect()->guest('login');
        }

        if (!own($usuario->id) && !is_admin()) {
            abort(403);
        }

        $usuario->delete();

        return redirect('/profile/'.$request->user()->username);
    }
}

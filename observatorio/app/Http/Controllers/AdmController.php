<?php

namespace observatorio\Http\Controllers;

use Illuminate\Http\Request;
use observatorio\Publicacao;
use observatorio\Role;
use observatorio\Usuario;
use observatorio\Exceptions\AuthRequiredException;
use observatorio\Exceptions\PermissionLevelException;

class AdmController extends Controller
{
    /**
     * @param Request $request
     * @param $publicacao_id
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @throws AuthRequiredException
     * @throws PermissionLevelException
     */
    protected function publicacaoToggle(Request $request, $id)
    {
        $user = $request->user();

        if (!$user) {
            throw new AuthRequiredException();
        } elseif (!$user->hasRole('admin')) {
            throw new PermissionLevelException();
        }

        $publicacao = Publicacao::find($id);

        if (!$publicacao) {
            abort(404);
        }

        $publicacao->publicada = !$publicacao->publicada;
        $publicacao->save();

        return response()->json(['ok' => 'ok']);
    }

    /**
     * @param Request $request (Deve ter um campo 'new_role' com o nome do papel do usuario ('admin', 'membro', 'autenticado')
     * @param $user_id - id do usuário a ter a permissão alterada
     *
     * @return \Illuminate\Http\JsonResponse
     *
     * @throws AuthRequiredException
     * @throws PermissionLevelException
     */
    protected function userAlterRole(Request $request, $id)
    {
        $user = $request->user();

        if (!$user) {
            throw new AuthRequiredException();
        } elseif (!$user->hasRole('admin')) {
            throw new PermissionLevelException();
        }

        $usuario = Usuario::findByUsername($id);

        if (!$usuario) {
            abort(404);
        }

        $role = $request->input('role');

        $usuario->update([
            'role_id' => Role::byNome($role)->id,
        ]);

        return response()->json(['action' => 'sucess']);
    }
}

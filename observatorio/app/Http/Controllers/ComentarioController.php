<?php

namespace observatorio\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use observatorio\Comentario;
use observatorio\Publicacao;
use observatorio\Exceptions\AuthRequiredException;
use observatorio\Exceptions\PermissionLevelException;
use Validator;
use DB;

class ComentarioController extends Controller
{
    protected function getComentarios(Request $request, $id)
    {
        $user = $request->user();

        $comentarios = Publicacao::find($id)->comentarios;
        $comments = array();

        //Serialização
        foreach ($comentarios as $comentario) {
            array_push($comments, $this->commentArray($comentario, $user));
        }

        return response()->json($comments);
    }

    protected function commentArray($comment, $sessionUser)
    {
        $author = $comment->usuario;

        $arr = [
            'id' => $comment->id,
            'parent' => ($comment->parent ? $comment->parent->id : null),
            'created' => Carbon::parse($comment->created_at)->format('Y-m-d'),
            'updated_at' => Carbon::parse($comment->updated_at)->format('Y-m-d'),
            'content' => $comment->texto,
            'fullname' => $author->name,
            'profile_picture_url' => '/images/avatar/'.$author->username, // TODO: implementar fotos para usuarios
            'created_by_admin' => ($author->hasRole('admin')) ? true : false,
            'created_by_current_user' => ($sessionUser && ($sessionUser->id === $author->id)),
            'upvote_count' => count($comment->upvotes),
            'user_has_upvoted' => ($sessionUser && $comment->hasUserUpvote($sessionUser->id)),
        ];

        return $arr;
    }

    protected function create(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            throw new AuthRequiredException();
        } elseif (!$user->hasRole(['admin', 'membro'])) {
            throw new PermissionLevelException();
        }

        $data = $request->all();

        $validator = $this->validator($data);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $comentario = Comentario::create([
            'usuario_id' => $user->id,
            'publicacao_id' => $data['publicacao_id'],
            'texto' => $data['content'],
            'parent_id' => $data['parent'],
        ]);

        return response()->json($this->commentArray($comentario, $user));
    }

    protected function delete(Request $request, $id)
    {
        $user = $request->user();

        if (!$user) {
            throw new AuthRequiredException();
        } elseif (!$user->hasRole(['admin', 'membro'])) {
            throw new PermissionLevelException();
        }

        $comentario = Comentario::find($id);

        if ($comentario->usuario_id != $user->id) {
            throw new AuthRequiredException();
        }

        $comentario = $comentario->delete();

        return response()->json([]);
    }

    /**
     * @param Request $request
     * @param $id identificador do comentario
     *
     * @return string
     */
    protected function update(Request $request, $id)
    {
        $user = $request->user();

        if (!$user) {
            throw new AuthRequiredException();
        } elseif (!$user->hasRole(['admin', 'membro'])) {
            throw new PermissionLevelException();
        }

        $data = $request->all();

        $validator = $this->validator($data);

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $comentario = Comentario::find($id);

        if ($comentario->usuario_id != $user->id) {
            throw new PermissionLevelException();
        }

        $comentario->update([
            'texto' => $data['content'],
        ]);

        return response()->json($this->commentArray($comentario, $user));
    }

    protected function upvoteUp(Request $request, $id)
    {
        $user = $request->user();

        if (!$user) {
            throw new AuthRequiredException();
        } elseif (!$user->hasRole(['admin', 'membro'])) {
            throw new PermissionLevelException();
        }

        $upvote = DB::table('comentarios_upvotes')
            ->where('comentario_id', '=', $id)
            ->where('usuario_id', '=', $user->id)
            ->get();

        if (!$upvote) {
            DB::table('comentarios_upvotes')->insert([
                'comentario_id' => Comentario::find($id)->id,
                'usuario_id' => $user->id,
            ]);
        }

        return response()->json([]);
    }

    protected function upvoteDown(Request $request, $id)
    {
        $user = $request->user();

        if (!$user) {
            throw new AuthRequiredException();
        } elseif (!$user->hasRole(['admin', 'membro'])) {
            throw new PermissionLevelException();
        }

        DB::table('comentarios_upvotes')
            ->where('comentario_id', '=', Comentario::find($id)->id)
            ->where('usuario_id', '=', $user->id)->delete();

        return response()->json([]);
    }

    protected function validator($data)
    {
        return Validator::make($data, [
                'id' => 'required',
                'content' => 'required',
            ]
        );
    }
}

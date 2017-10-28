<?php

namespace observatorio\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Validator;

class ImageController extends Controller
{
    protected function show(Request $request)
    {
        return View::make('image');
    }

    protected function upload(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            throw new AuthRequiredException();
        } elseif (!$user->hasRole(['admin', 'membro'])) {
            throw new PermissionLevelException();
        }

        $validator = $this->validator(array('image' => Input::file('image')));

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        } else {
            if (Input::file('image')->isValid()) {
                $file = file_get_contents(Input::file('image'));

                $user->foto = base64_encode($file);
                $user->save();

                //Quando a imagem é upada com sucesso
                return view('message', ['message' => 'Image uploaded successfully']);
            } else {

                //Quando a imagem que o usuario tentou subir não é válida
                return view('message', ['message' => 'Something went wrong']);
            }
        }
    }

    protected function update(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            throw new AuthRequiredException();
        } elseif (!$user->hasRole(['admin', 'membro'])) {
            throw new PermissionLevelException();
        }

        $validator = $this->validator(array('image' => Input::file('image')));

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        } else {
            if (Input::file('image')->isValid()) {
                $file = file_get_contents(Input::file('image'));

                $user->foto = base64_encode($file);
                $user->save();

                //Quando a imagem for atualizada com sucesso
                return view('message', ['message' => 'Image updated successfully']);
            } else {
                //Quando a imagem não é válida
                return view('message', ['message' => 'Something went wrong']);
            }
        }
    }

    protected function delete(Request $request)
    {
        $user = $request->user();

        if (!$user) {
            throw new AuthRequiredException();
        } elseif (!$user->hasRole(['admin', 'membro'])) {
            throw new PermissionLevelException();
        }

        $user->foto = null;
        $user->save();

        //Quando a imagem é deletada com sucesso
        return view('message', ['message' => 'Image successfully deleted']);
    }

    protected function validator($data)
    {
        return Validator::make($data, [
                'image' => 'required|max:1000|mimes:jpeg,bmp,png',
            ]
        );
    }
}

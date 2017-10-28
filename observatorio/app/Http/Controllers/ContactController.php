<?php

namespace observatorio\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Validator;

class ContactController extends Controller
{
    private function receipt($email)
    {
        Mail::send('emails.receipt', [], function ($message) use ($email) {
            $message->from('noreply@obdjuv.org', 'noreply@obdjuv.org')
                    ->to($email)
                    ->subject('OBDJuv: seu contato foi recebido');
        });
    }

    public function index(Request $request)
    {
        $data = $request->all();

        $validator = $this->validator($data);

        if ($validator->fails()) {
            return response()->json(-1);
        }

        $result = Mail::send('emails.contact', $data, function ($message) use ($data) {
            $message->from($data['email'], $data['name'])
                    ->to('odjuventud@gmail.com')
                    ->replyTo($data['email'], $data['name'])
                    ->subject('['.$data['reason'].'] '.$data['subject']);
        });

        if ($result) {
            $this->receipt($data['email']);
        }

        return response()->json($result);
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required',
            'email' => 'required',
            'reason' => 'required',
            'subject' => 'required',
            'body' => 'required',
        ]);
    }
}

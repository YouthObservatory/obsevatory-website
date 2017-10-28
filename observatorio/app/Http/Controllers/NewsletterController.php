<?php

namespace observatorio\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        $email = $request->input('email');

        if ($email) {
            $success = Mail::raw('subscribe', function ($m) use ($email) {
                $m->from($email);
                $m->to('newsletter-join@lists.obdjuv.org')->subject('subscribe');
            });
        }

        return response()->json(['message' => trans('app.newsletter.subscribe')]);
    }
}

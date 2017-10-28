<?php

namespace observatorio\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class Language
{
    public function handle($request, Closure $next)
    {
        if (array_key_exists($request->segment(1), Config::get('languages'))) {
            Session::set('applocale', $request->segment(1));
            App::setLocale($request->segment(1));
        } elseif (Session::has('applocale') and array_key_exists(Session::get('applocale'), Config::get('languages'))) {
            App::setLocale(Session::get('applocale'));
        } else {
            $locales = explode(';', $request->server('HTTP_ACCEPT_LANGUAGE'))[0];
            $locales = explode(',', $locales);

            foreach ($locales as $locale) {
                if (strlen($locale) == 5) {
                    $locale = strtolower(substr($locale, 0, 2)).'-'.strtoupper(substr($locale, 3, 5));
                }

                if (array_key_exists($locale, Config::get('languages'))) {
                    Session::set('applocale', $locale);
                    App::setLocale($locale);
                }
            }
        }

        return $next($request);
    }
}

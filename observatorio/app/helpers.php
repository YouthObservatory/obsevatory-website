<?php

function own($ownerId)
{
    return Auth::user() && (Auth::user()->id == $ownerId);
}

function is_admin()
{
    return Auth::user() && Auth::user()->hasRole('admin');
}

function _url($resource, $parameters = [], $secure = null)
{
    $segment = \Request::segment(1);
    if (in_array($segment, ['en', 'es', 'pt-BR'])) {
        if ($resource[0] == '/') {
            $resource = $segment.$resource;
        } else {
            $resource = $segment.'/'.$resource;
        }
    }

    return url($resource, $parameters, $secure);
}

function langIf($locales, $value)
{
    $locales = explode('|', $locales);

    foreach ($locales as $locale) {
        if (\App::getLocale() == $locale) {
            return $value;
        }
    }

    return '';
}


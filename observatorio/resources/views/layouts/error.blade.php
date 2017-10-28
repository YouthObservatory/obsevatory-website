<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title') - {{ trans('app.title') }}</title>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link href="{{ asset('/css/error.css') }}" rel="stylesheet">
</head>
<body id="app-layout">
    <nav class="navbar navbar-default navbar-fixed-top">
        {{--<div class="alert alert-dark alert-small" role="alert">
            <div class="container">
                <strong>Warning!</strong> Better check yourself, you're not looking too good.
            </div>
        </div>--}}
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/">{{ trans('app.title') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="/#about" data="smooth-scroll">{{ trans('app.nav.about') }}</a></li>
            <li><a href="/#joinus" data="smooth-scroll">{{ trans('app.nav.joinus') }}</a></li>
            <li><a href="/#contact-form" data="smooth-scroll">{{ trans('app.nav.contact') }}</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('app.nav.activity') }} <span class="caret"></span></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ url('activity/news') }}">{{ trans('app.nav.activity.news') }}</a></li>
                  <li><a href="{{ url('activity/events') }}">{{ trans('app.nav.activity.events') }}</a></li>
                  <li><a href="/forum/">{{ trans('app.nav.activity.forum') }}</a></li>
                  <li><a href="/courses/">{{ trans('app.nav.activity.courses') }}</a></li>
              </ul>
            </li>
            @if (Auth::guest())
                <li><a href="/login">Login</a></li>
            @else
                <li class="dropdown auth">
                  <a class="profile-image" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                      {{ Auth::user()->name }} <img src="{{ url('/images/avatar/'.Auth::user()->username.'/32') }}" /></a>
                      <ul class="dropdown-menu">
                        <li><a href="{{ url('/profile', ['slug' => Auth::user()->username]) }}">Profile</a></li>
                        @if(Auth::user()->hasRole(['admin', 'membro']))
                            <li class="dropdown-header">{{ trans('app.nav.create') }}</li>
                            <li class="dropdown-header"><a href="{{ _url('/activity/news/new') }}">{{ trans('app.nav.create.news') }}</a></li>
                            <li class="dropdown-header"><a href="{{ _url('/activity/events/new') }}">{{ trans('app.nav.create.event') }}</a></li>
                        @endif
                        <li><a href="{{ url('logout') }}">Logout</a></li>
                      </ul>
                </li>
            @endif
            @include('langselector')
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>

    <div class="centered">
        <div class="content">
            @yield('content')
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <script src="{{ asset('vendor/js/bootstrap-hover-dropdown.min.js') }}"></script>
</body>
</html>

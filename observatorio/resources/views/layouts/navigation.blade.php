<nav id="menuPrincipal" class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand {{ langIf('pt-BR|es', 'row-two') }}" href="/">{{ trans('app.title') }}</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="{{ _url('/#about') }}" data="smooth-scroll">{{ trans('app.nav.about') }}</a></li>
        <li><a href="{{ _url('/#joinus') }}" data="smooth-scroll">{{ trans('app.nav.joinus') }}</a></li>
        <li><a href="{{ _url('/#contact') }}" data="smooth-scroll">{{ trans('app.nav.contact') }}</a></li>
        <li class="dropdown">
          <a href="#activity" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ trans('app.nav.activity') }} <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="{{ _url('activity/news') }}">{{ trans('app.nav.activity.news') }}</a></li>
              <li><a href="{{ _url('activity/events') }}">{{ trans('app.nav.activity.events') }}</a></li>
              <li><a href="/forum/">{{ trans('app.nav.activity.forum') }}</a></li>
              <li><a href="/courses/">{{ trans('app.nav.activity.courses') }}</a></li>
          </ul>
        </li>
        @if (Auth::guest())
            <li><a href="#" data-toggle="modal" data-target="#loginModal">Login</a></li>
        @else
            <li class="dropdown auth">
              <a class="profile-image" href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  {{ Auth::user()->shortName() }} <img src="{{ url('/images/avatar/'.Auth::user()->username.'/32') }}" /></a>
                  <ul class="dropdown-menu">
                    <li><a href="{{ _url('/profile', ['slug' => Auth::user()->username]) }}">Profile</a></li>
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

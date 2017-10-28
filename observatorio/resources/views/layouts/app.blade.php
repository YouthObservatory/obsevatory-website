<!DOCTYPE html>
<html lang="{{ \App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ trans('app.title') }}</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.css" rel="stylesheet">

    @yield('extra-css')
    {{--<link href="{{ elixir('css/app.css') }}" rel="stylesheet">--}}
    <link rel="stylesheet" href="/vendor/css/rrssb.css" />
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
</head>
<body id="app-layout"  data-spy="scroll" data-target="#menuPrincipal" data-offset="51">
    {{--<div class="alert alert-dark alert-small" role="alert" style="margin-top:-20px">
        <div class="container">
            {!! trans('app.notice') !!}
        </div>
    </div>--}}

    @include('layouts.navigation')

    @yield('content')

    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <img src="{{ asset('images/logo-branca.png') }}" class="logo">
          </div>
          <div class="col-sm-4 text-center">
              <div><img src="{{ asset('images/safernet.png') }}" class="hashtag" /></div>
          </div>
          <div class="col-sm-4 text-right top-30">
              <div><img src="{{ asset('images/hashtag.png') }}" class="hashtag"></div>
              <div><img src="{{ asset('images/isoc.png') }}" class="hashtag"></div>
          </div>
        </div>
        <div class="row">
          <p class="text-center">&copy; OBDJUV.ORG 2016
		<br> <a href="{{ _url('/terms') }}">{{ trans('app.terms') }}</a>
	  </p>
        </div>
      </div>
    </footer>

    <!-- JavaScripts -->
    <script>window.csrf_token = '{{ csrf_token() }}';</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.1/summernote.min.js"></script>
    <script src="{{ asset('vendor/js/bootstrap-hover-dropdown.min.js') }}"></script>
    <script src="{{ asset('vendor/js/rrssb.min.js') }}"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
    @yield('extra-js')
    <script src="{{ asset('/js/app.js') }}"></script>

    @if(Auth::guest())
        <!-- Modal -->
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        <h4 class="modal-title">Login</h4>
                    </div>
                    <div class="modal-body">
                      <div id="login-notification"></div>
                      <form id="login-form" class="form-horizontal" role="form">
                          {!! csrf_field() !!}

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">E-Mail Address</label>

                              <div class="col-md-6">
                                  <input type="email" class="form-control" name="email" value="{{ old('email') }}">

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label class="col-md-4 control-label">Password</label>

                              <div class="col-md-6">
                                  <input type="password" class="form-control" name="password">

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <div class="checkbox">
                                      <label>
                                          <input type="checkbox" name="remember"> Remember Me
                                      </label>
                                  </div>
                              </div>
                          </div>
                      </form>
                  </div>
                  <div class="modal-footer">
                      <div class="pull-left">
                          <button id="login-send" type="button" class="btn btn-primary"><i class="fa fa-btn fa-sign-in"></i> Login</button>
                          <a class="btn btn-default" href="{{ url('/register') }}">Register</a>
                          <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                      </div>
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  </div>
              </div>
          </div>
        </div>
        <script>
            $('#login-send').on('click', function(e) {
                $.ajax({
                    type: 'POST',
                    url: '/login',
                    data: $('#login-form').serialize(),
                    success: function (data) {
                        if(data.auth) {
                            window.location.reload();
                        } else if(data.error) {
                            $('#login-notification').html(alertDismissible('danger',
                                '<strong>Error!</strong> ' + data.error));
                        }
                    }
                });
            });
        </script>
        @endif

</body>
</html>

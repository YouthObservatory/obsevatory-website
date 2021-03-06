@extends('layouts.app')

@section('content')
<div id="content" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                <h1 class="text-orange">RESET PASSWORD</h1>
            </div>

            <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/reset') }}">
                {!! csrf_field() !!}

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">E-Mail Address</label>

                    <div class="col-md-7">
                        <input type="email" class="form-control" name="email" value="{{ $email or old('email') }}">

                        @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Password</label>

                    <div class="col-md-7">
                        <input type="password" class="form-control" name="password">

                        @if ($errors->has('password'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Confirm Password</label>
                    <div class="col-md-7">
                        <input type="password" class="form-control" name="password_confirmation">

                        @if ($errors->has('password_confirmation'))
                            <span class="help-block">
                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-md-7 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">
                            <i class="fa fa-btn fa-refresh"></i>Reset Password
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

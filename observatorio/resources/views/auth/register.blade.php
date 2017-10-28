@extends('layouts.app')

@section('content')
<div id="content" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                <h1 class="text-orange">REGISTER</h1>
            </div>

            <form id="register-user" class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('avatar') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Avatar</label>

                    <div class="col-md-7">
                        <input id="avatar" type="hidden" name="avatar" value="{{ old('avatar') }}">

                        <div class="avatar" data-toggle="modal" data-target="#avatarModal"
                            @if( old('avatar') ) style="background-image: url('{{ old('avatar') }}')" @endif>
                            <span>Change</span>
                        </div>

                        @if ($errors->has('avatar'))
                            <span class="help-block">
                                <strong>{{ $errors->first('avatar') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Name</label>

                    <div class="col-md-7">
                        <input type="text" class="form-control" name="name" value="{{ old('name') }}">

                        @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('nascimento') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Birthday</label>

                    <div class="col-md-7">
                        <div class="input-group date">
                            <input type="text" id="nascimento" name="nascimento" class="form-control" value="{{ old('nascimento') }}" />
                            <span class="input-group-addon">
                                <span class="glyphicon glyphicon-calendar"></span>
                            </span>
                        </div>

                        @if ($errors->has('nascimento'))
                            <span class="help-block">
                                <strong>{{ $errors->first('nascimento') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('bio') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Biography</label>

                    <div class="col-md-7">
                        <textarea class="form-control" name="bio">{{ old('bio') }}</textarea>

                        @if ($errors->has('bio'))
                            <span class="help-block">
                                <strong>{{ $errors->first('bio') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('sexo') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Gender</label>

                    <div class="col-md-7">
                        <div class="btn-group" data-toggle="buttons">
                            @if (old('sexo') == 'male')
                                <label class="btn btn-default active">
                                    <input type="radio" name="sexo" value="male" checked="checked"/> Male
                                </label>
                            @else
                                <label class="btn btn-default">
                                    <input type="radio" name="sexo" value="male"/> Male
                                </label>
                            @endif

                            @if (old('sexo') == 'female')
                                <label class="btn btn-default active">
                                    <input type="radio" name="sexo" value="female" checked="checked"/> Female
                                </label>
                            @else
                                <label class="btn btn-default">
                                    <input type="radio" name="sexo" value="female"/> Female
                                </label>
                            @endif

                            @if (old('sexo') == 'other')
                                <label class="btn btn-default active">
                                    <input type="radio" name="sexo" value="other" checked="checked"/> Other
                                </label>
                            @else
                                <label class="btn btn-default">
                                    <input type="radio" name="sexo" value="other"/> Other
                                </label>
                            @endif
                        </div>

                        @if ($errors->has('sexo'))
                            <span class="help-block">
                                <strong>{{ $errors->first('sexo') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">E-Mail Address</label>

                    <div class="col-md-7">
                        <input type="email" class="form-control" name="email" value="{{ old('email') }}">

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
                            <i class="fa fa-btn fa-user"></i>Register
                        </button>
                        <a class="btn btn-link" href="{{ url('/login') }}">Already registered?</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@include('modal.avatar')
@endsection

@section('extra-css')
<link href="{{ asset('vendor/css/croppie.css') }}" rel="stylesheet" />
<link href="/vendor/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
@endsection

@section('extra-js')
<script>window.avatarForm = true;</script>
<script src="{{ asset('vendor/js/croppie.min.js') }}"></script>
<script src="{{ asset('js/avatar.js') }}"></script>
<script src="/vendor/js/moment-with-locales.min.js"></script>
<script src="/vendor/js/bootstrap-datetimepicker.min.js"></script>
<script>
    $('#nascimento').datetimepicker({
        locale: '{{ App::getLocale() }}',
        format: 'MMM D YYYY',
        sideBySide: false,
        calendarWeeks: true
    });
    $('#register-user').submit(function(e) {
        $('#nascimento').data('DateTimePicker').format('YYYY-MM-DD');
    });
</script>
@endsection

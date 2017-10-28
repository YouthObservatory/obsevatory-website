@extends('layouts.app')

@section('content')
<div id="content" class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="page-header">
                <h1 class="text-orange">EDIT PROFILE</h1>
            </div>

            <form id="register-user" class="form-horizontal" role="form" method="POST">
                {!! csrf_field() !!}

                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                    <label class="col-md-3 control-label">Name</label>

                    <div class="col-md-7">
                        <input type="text" class="form-control" name="name" value="{{ old('name') ?: $user->name }}">

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
                            <input type="text" id="nascimento" name="nascimento" class="form-control" value="{{ old('nascimento') ?: $user->nascimento }}" />
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
                        <textarea class="form-control" name="bio">{{ old('bio') ?: $user->bio }}</textarea>

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
                            @if ((old('sexo') ?: $user->sexo) == 'male')
                                <label class="btn btn-default active">
                                    <input type="radio" name="sexo" value="male" checked="checked"/> Male
                                </label>
                            @else
                                <label class="btn btn-default">
                                    <input type="radio" name="sexo" value="male"/> Male
                                </label>
                            @endif

                            @if ((old('sexo') ?: $user->sexo) == 'female')
                                <label class="btn btn-default active">
                                    <input type="radio" name="sexo" value="female" checked="checked"/> Female
                                </label>
                            @else
                                <label class="btn btn-default">
                                    <input type="radio" name="sexo" value="female"/> Female
                                </label>
                            @endif

                            @if ((old('sexo') ?: $user->sexo) == 'other')
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
                        <input type="email" class="form-control" name="email" value="{{ old('email') ?: $user->email }}">

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
                            <span class="glyphicon glyphicon-floppy-disk"></span> Update
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('extra-css')
<link href="{{ asset('vendor/css/croppie.css') }}" rel="stylesheet" />
<link href="/vendor/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
@endsection

@section('extra-js')
<script src="/vendor/js/moment-with-locales.min.js"></script>
<script src="/vendor/js/bootstrap-datetimepicker.min.js"></script>
<script>
    $('#nascimento').datetimepicker({
        locale: '{{ App::getLocale() }}',
        format: 'YYYY-M-D',
        sideBySide: false,
        calendarWeeks: true
    });
    $('#nascimento').data('DateTimePicker').format('MMM DD YYYY');
    $('#register-user').submit(function(e) {
        $('#nascimento').data('DateTimePicker').format('YYYY-MM-DD');
    });
</script>
@endsection

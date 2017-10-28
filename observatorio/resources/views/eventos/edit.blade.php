@extends('layouts.app')

@section('content')
<div id="content" class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="page-header">
                <h1 class="text-orange">EDIT EVENT</h1>
            </div>

                        <form id="event-create" method="post">
                            {!! csrf_field() !!}

                            {{-- @if($errors->has())
                                <div class="alert alert-danger alert-dismissible" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    @if($errors->has('data_inicio'))
                                        Sem data de início
                                    @elseif ($errors->has('data_fim'))
                                        Sem data do fim
                                    @elseif ($errors->has('titulo'))
                                        Sem título
                                    @elseif ($errors->has('pais_sigla'))
                                        Sem sigla do país
                                    @elseif ($errors->has('localizacao'))
                                        Sem localização
                                    @endif
                                </div>
                            @endif --}}

                            <div class="form-group{{ $errors->has('data_inicio') ? ' has-error' : ''}}">
                                <label>Data de início</label>
				<div class="input-group date">
					<input type="text" id="data_inicio" name="data_inicio" class="form-control" value="{{ old('data_inicio') ?: $evento->data_inicio }}" />
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>

                                @if ($errors->has('data_inicio'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('data_inicio') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('data_fim') ? ' has-error' : ''}}">
                                <label>Data do término</label>
				<div class="input-group date">
					<input type="text" id="data_fim" name="data_fim" class="form-control" value="{{ old('data_fim') ?: $evento->data_fim }}" />
					<span class="input-group-addon">
						<span class="glyphicon glyphicon-calendar"></span>
					</span>
				</div>

                                @if ($errors->has('data_fim'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('data_fim') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('titulo') ? ' has-error' : ''}}">
                                <label>Título</label>
                                <input class="form-control" name="titulo" placeholder="II Evento 2016" type="text" value="{{ old('titulo') ?: $evento->titulo }}">

                                @if ($errors->has('titulo'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('titulo') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('online') ? ' has-error' : ''}}">
                                <label>Online</label>
                                <input class="checkbox-inline" name="online" type="checkbox" @if(old('online') || $evento->online) checked="checked" @endif>

                                @if ($errors->has('online'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('online') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('pais_sigla') ? ' has-error' : ''}}">
                                <label>Sigla do país</label>
                                <input class="form-control" name="pais_sigla" placeholder="BR" type="text" value="{{ old('pais_sigla') ?: $evento->pais_sigla }}">

                                @if ($errors->has('pais_sigla'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('pais_sigla') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('localizacao') ? ' has-error' : ''}}">
                                <label>Localização</label>
                                <textarea class="form-control" name="localizacao">{{ old('localizacao') ?: $evento->localizacao }}</textarea>

                                @if ($errors->has('localizacao'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('localizacao') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group{{ $errors->has('url') ? ' has-error' : ''}}">
                                <label>URL (mais informações)</label>
                                <input class="form-control" name="url" placeholder="http://" type="url" value="{{ old('url') ?: $evento->url }}">

                                @if ($errors->has('url'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('url') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2 text-center">
                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Atualizar</button>
                                    <a href="/eventos/" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Cancelar</a>
                                </div>
                            </div>
                        </form>
            </div>
        </div>
    </div>
@endsection

@section('extra-js')
    <script src="/vendor/js/moment-with-locales.min.js"></script>
    <script src="/vendor/js/bootstrap-datetimepicker.min.js"></script>
    <script>
        var format1 = 'YYYY-MM-DD H:mm:ss',
            format2 = 'llll';
        $('#data_inicio').datetimepicker({
            locale: '{{ App::getLocale() }}',
            format: format1,
            defaultDate: '{{ $evento->data_inicio }}',
            sideBySide: true,
            calendarWeeks: true
        });
        $('#data_fim').datetimepicker({
            locale: '{{ App::getLocale() }}',
            format: format1,
            defaultDate: '{{ $evento->data_fim }}',
            sideBySide: true,
            calendarWeeks: true
        });

        $('#data_inicio').data('DateTimePicker').format(format2);
        $('#data_fim').data('DateTimePicker').format(format2);

        $('#event-create').submit(function(e) {
            $('#data_inicio').data('DateTimePicker').format(format1);
            $('#data_fim').data('DateTimePicker').format(format1);
	    });
    </script>
@endsection

@section('extra-css')
    <link href="/vendor/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
@endsection

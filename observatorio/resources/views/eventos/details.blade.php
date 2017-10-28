@extends('layouts.app')

@section('content')
<div id="content" class="container">
  <div class="col-md-8 col-md-offset-2">
    <div class="page-header">
      <h1>{{ $event->titulo }}</h1>
    </div>
    <p><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span> {{ $event->localizacao ?: 'Online' }}</p>
    <p><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <a href="{{ $event->url }}" target="_blank">{{ $event->url }}</a></p>
    <p><b>Data de Início: </b> {{ $event->data_inicio->format('d-m-Y H:i') }}</p>
    <p><b>Data de Fim: </b> {{ $event->data_fim->format('d-m-Y H:i') }}</p>
  </div>
</div>
@endsection

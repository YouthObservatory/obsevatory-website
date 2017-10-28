@extends('layouts.app')

@section('content')
<div id="content" class="container text-justify">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="page-header">
                <h1 class="text-orange">{{ trans('joinus.title') }}</h1>
            </div>
            {!! trans('joinus.content') !!}
        </div>
    </div>
</div>
@endsection

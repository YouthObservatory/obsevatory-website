@extends('layouts.app')

@section('content')
<div id="content" class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="page-header">
                <h1 class="text-orange">CREATE PUBLICATION</h1>
            </div>

            <form class="form-horizontal" role="form" method="POST">
                {!! csrf_field() !!}

                @if($errors->has())
                    @if($errors->has('titulo.0') || $errors->has('texto.0'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert"aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            English translation is required
                        </div>
                    @elseif ($errors->has('texto.1') || $errors->has('texto.1'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert"aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Portuguese Brazilian translation is incomplete
                        </div>
                    @elseif ($errors->has('texto.2') || $errors->has('texto.2'))
                        <div class="alert alert-danger alert-dismissible" role="alert">
                            <button type="button" class="close" data-dismiss="alert"aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            Spanish translation is incomplete
                        </div>
                    @endif
                @endif

                <div class="form-group{{ $errors->has('cover') ? ' has-error' : ''}}">
                    <label class="col-md-3 control-label">Cover</label>

                    <div class="col-md-7">
                        <input id="cover" type="hidden" name="cover" value="{{ old('cover') }}"/>

                        <div class="cover center-block" data-toggle="modal" data-target="#coverModal">
                            <span>Change</span>
                        </div>

                        @if ($errors->has('cover'))
                            <span class="help-block">
                                <strong>{{ $errors->first('cover') }}</strong>
                            </span>
                        @endif
                    </div>
                </div>

                <div class="form-group">
                    <div id="conteudos" data-example-id="togglable-tabs">
                        <ul id="conteudoTabs" class="nav nav-tabs lang" role="tablist">
                            <li class="active" role="presentation"><a href="#en"><img width="32px" src="/images/en.png" /> <span>English</span></a></li>
                            <li role="presentation"><a href="#es"><img width="32px" src="/images/es.png" /> <span>Spanish</span></a></li>
                            <li role="presentation"><a href="#pt-br"><img width="32px" src="/images/pt-BR.png" /> <span>Brazilian Portuguese</span></a></li>
                        </ul>

                        <div id="conteudoTabContent" class="tab-content">
                            <div class="tab-pane fade active in" id="en" role="tabpanel">
                                <input name="idioma[]" value="en" type="hidden">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="page-header">
                                            <input name="titulo[]" type="hidden" value="{{ old('titulo')[0] }}">
                                            <h1 contenteditable="true" data="pubtitle">
                                                @if(old('titulo')[0])
                                                    {{ old('titulo')[0] }}
                                                @else
                                                    <span>Title</span>
                                                @endif
                                            </h1>
                                            <input name="olho[]" type="hidden" value="{{ old('olho')[0] }}">
                                            <h1><small contenteditable="true" data="pubolho">
                                                @if(old('olho')[0])
                                                    {{ old('olho')[0] }}
                                                @else
                                                    Abstract
                                                @endif
                                            </small></h1>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <textarea id="editor-en" class="editor" name="texto[]">{{ old('texto')[0] }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade in" id="es" role="tabpanel">
                                <input name="idioma[]" value="es" type="hidden">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="page-header">
                                            <input name="titulo[]" type="hidden" value="{{ old('titulo')[1] }}">
                                            <h1 contenteditable="true" data="pubtitle">
                                                @if(old('titulo')[1])
                                                    {{ old('titulo')[1] }}
                                                @else
                                                    <span>Title</span>
                                                @endif
                                            </h1>
                                            <input name="olho[]" type="hidden" value="{{ old('olho')[0] }}">
                                            <h1><small contenteditable="true" data="pubolho">
                                                @if(old('olho')[1])
                                                    {{ old('olho')[1] }}
                                                @else
                                                    Abstract
                                                @endif
                                            </small></h1>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <textarea id="editor-es" class="editor" name="texto[]">{{ old('texto')[1] }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="tab-pane fade in" id="pt-br" role="tabpanel">
                                <input name="idioma[]" value="pt-BR" type="hidden">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <div class="page-header">
                                            <input name="titulo[]" type="hidden" value="{{ old('titulo')[2] }}">
                                            <h1 contenteditable="true" data="pubtitle">
                                                @if(old('titulo')[2])
                                                    {{ old('titulo')[2] }}
                                                @else
                                                    <span>Title</span>
                                                @endif
                                            </h1>
                                            <input name="olho[]" type="hidden" value="{{ old('olho')[0] }}">
                                            <h1><small contenteditable="true" data="pubolho">
                                                @if(old('olho')[2])
                                                    {{ old('olho')[2] }}
                                                @else
                                                    Abstract
                                                @endif
                                            </small></h1>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <textarea id="editor-pt-br" class="editor" name="texto[]">{{ old('texto')[2] }}</textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2 text-center">
                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-ok"></span> Request Publish</button>
                                    <a href="#" class="btn btn-default"><span class="glyphicon glyphicon-remove"></span> Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@include('modal.cover')
@endsection

@section('extra-css')
<link href="{{ asset('vendor/css/croppie.css') }}" rel="stylesheet" />
@endsection

@section('extra-js')
    <script>window.coverForm = true;</script>
    <script src="{{ asset('vendor/js/croppie.min.js') }}"></script>
    <script src="{{ asset('js/publications.js') }}"></script>
@endsection

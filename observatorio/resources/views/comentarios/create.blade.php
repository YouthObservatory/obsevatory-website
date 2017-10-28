@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Create Comment</div>
                    <div class="panel-body dl-horizontal">
                        @forelse($comentarios as $comentario)
                            <li class="list-group-item">
                               <div>
                                   <div class="dropdown-header">{{ $comentario->usuario->name }}<br/></div>
                                   <div class="list-group-item-text">{{$comentario->texto}}</div>
                                   @if($usuario && $usuario->id ==$comentario->usuario_id)
                                        <div class="modal-body">
                                            <form class="form-horizontal navbar-form form-inline" role="form" method="POST" action="{{"/comments/edit"}}">
                                                {!! csrf_field() !!}
                                                <input type="hidden" name="comentario_id" value="{{ $comentario->id }}">
                                                <input type="hidden" name="publicacao_id" value="{{ $comentario->publicacao->id }}">
                                                <input name="texto" type="text" value="{{ $comentario->texto }}">
                                                <input  class="btn-group" type="submit" value="edit">
                                            </form>
                                            <form class="form-horizontal navbar-form form-inline" role="form" method="POST" action="{{"/comments/delete"}}">
                                                {!! csrf_field() !!}
                                                <input type="hidden" name="comentario_id" value="{{ $comentario->id }}">
                                                <input type="hidden" name="publicacao_id" value="{{ $comentario->publicacao->id }}">
                                                <input class="btn-group" type="submit" value="Delete">
                                            </form>
                                        </div>
                                   @endif
                               </div>
                            </li>
                        @empty
                            <li>No comments to show!</li>
                        @endforelse
                    </div>
                    <div class="panel-body">
                        @if($usuario)
                            <form class="form-horizontal navbar-form form-inline" role="form" method="POST" action="{{"/comments/".$publicacao}}">
                                {!! csrf_field() !!}
                                <input type="hidden" name="publicacao_id" value="{{ $publicacao }}">
                                <input class="form-control" name="new_comentario" type="text">
                                <input class="input-group" type="submit" value="comment">
                            </form>
                        @else
                            <div class="modal-dialog">
                                <span>Log in to comment</span>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
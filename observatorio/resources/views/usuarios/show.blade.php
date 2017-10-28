@extends('layouts.app')

@section('content')
<div id="content" class="container">
  <div class="row">
    <div class="col-md-10 col-md-offset-1 box">
      <div class="wrap">
          <div id="profile-notifications">
              @if(Session::get('status'))
                  <div class="alert alert-success alert-dismissible" role="alert">
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      {{Session::get('status')}}
                  </div>
              @endif
          </div>
          <div class="block">
              <div class="inner">
                  @if($own)
                      {!! csrf_field() !!}

                      <div class="avatar" data-toggle="modal" data-target="#avatarModal" style="background-image: url({{ url('/images/avatar/'.$user->username) }})">
                          <span>Change</span>
                      </div>
                  @else
                      <img src="{{ url('/images/avatar/'.$user->username) }}" class="avatar" />
                  @endif
              </div>
              <div class="inner">
                  <div class="info">
                      <h3>{{ $user->name }}</h3>
                      <p>{{ $user->email }}</p>
                      <p>{{ \Carbon\Carbon::parse($user->nascimento)->format('d/m/Y') }} | {{ ucfirst($user->sexo) }}</p>
                  </div>
              </div>
        </div>
        <div class="bio">{{ $user->bio }}</div>
        @if($own)
        <div class="text-right">
            <a class="btn btn-default" href="{{ _url('/profile/'.$user->username.'/edit') }}">Editar</a>
            @if(Auth::user() && Auth::user()->hasRole(['admin', 'membro']))
            <div class="dropdown" style="display:inline-block">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    Create <span class="caret"></span></button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="{{ _url('/activity/news/new') }}">{{ trans('app.nav.create.news') }}</a></li>
                    <li><a href="{{ _url('/activity/events/new') }}">{{ trans('app.nav.create.event') }}</a></li>
                </ul>
            </div>
            @endif
        </div>
        @endif
      </div>
    </div>

    {{--
    <div class="col-md-4 col-md-offset-1 box">
      <ul class="nav nav-pills nav-stacked">
        <li role="presentation"><a href="#">Editar Dados</a></li>
        <li role="presentation"><a href="#">Criar Mensagem</a></li>
        <li role="presentation"><a href="#">Criar Post</a></li>
        <li role="presentation"><a href="#">Sair</a></li>
      </ul>
    </div> --}}
  </div>

  <div class="row">
    <div class="col-md-10 col-md-offset-1">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#publish">Publicações</a></li>
        <li><a data-toggle="tab" href="#comments">Comentários</a></li>
        {{-- <li><a data-toggle="tab" href="#msg">Mensagens</a></li>
        <li><a data-toggle="tab" href="#courses">Cursos</a></li> --}}
        @if(Auth::user() && Auth::user()->hasRole('admin'))
          <li><a data-toggle="tab" href="#requests">Requests</a></li>
          <li><a data-toggle="tab" href="#permissions">Permissions</a></li>
        @endif
      </ul>

      <div class="tab-content border overflow">
        <div id="publish" class="tab-pane fade in padding10 active ">
            @forelse($news as $item)
                <div class="row">
                    <div class="col-md-2">
                        <div class="img">
                            <img src="{{ url('/images/news/'.$item->slug.'/150') }}" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <blockquote>
                            <h2><a href="{{ _url('/activity/news', ['slug'=>$item->slug]) }}">{{ $item->titulo() }}</a></h2>
                            <p>{{ $item->olho() }}</p>
                            <small>{{ $item->created_at->format('d \d\e F \d\e Y | H:i') }}</small>
                        </blockquote>
                    </div>
                </div>
                <hr class="hr-in-row" />
            @empty
                <p>{{ trans('app.publication.notfound') }}</p>
            @endforelse
        </div>
        <div id="comments" class="tab-pane fade padding10">
            @forelse($comments as $comment)
                <div class="row">
                    <div class="col-md-2">
                        <div class="img">
                            <img src="{{ url('/images/news/'.$comment->publicacao->slug.'/150') }}" class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <blockquote>
                            <p>{{ $comment->texto }}</p>
                            <footer><a href="{{ _url('/activity/news', ['slug' => $comment->publicacao->slug]) }}">{{ strtoupper($comment->publicacao->titulo()) }}</a><br />
                            <small>{{ $comment->created_at->format('d \d\e F \d\e Y | H:i') }}</small></footer>
                        </blockquote>
                    </div>
                </div>
                <hr class="hr-in-row" />
            @empty
                <p>{{ trans('app.comments.notfound') }}</p>
            @endforelse
        </div>
        {{-- <div id="msg" class="tab-pane fade padding10">
          <div class="row">
            <div class="col-md-2">
              <div class="img">
                <img src="{{ asset('images/fb.png') }}" width="150px" class="img-fluid" />
              </div>
            </div>
            <div class="col-md-8">
              <h2 class="news_title margin-top-10">Título da notícia</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p class="info">data | hora</p>
            </div>
          </div>
          <hr class="hr-in-row">
        </div>
        <div id="courses" class="tab-pane fade padding10">
          <div class="row">
            <div class="col-md-2">
              <div class="img">
                <img src="{{ asset('images/fb.png') }}" width="150px" class="img-fluid" />
              </div>
            </div>
            <div class="col-md-8">
              <h2 class="news_title margin-top-10">Título da notícia</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
              <p class="info">data | hora</p>
            </div>
          </div>
          <hr class="hr-in-row">
        </div> --}}

        @if(Auth::user() && Auth::user()->hasRole('admin'))
        <div id="requests" class="tab-pane fade in padding10">
            @forelse(\observatorio\Publicacao::orderBy('created_at')->get() as $publicacao)
            <div class="row">
                <div class="col-md-8 col-md-offset-1">
                    <h2><a href="{{ _url('/activity/news', ['slug'=>$publicacao->slug]) }}">{{ $publicacao->titulo() }}</a></h2>
                    <p>{{ $publicacao->olho() }}</p>
                </div>
                <div class="col-md-2">
                    <input name="toggle-news" type="checkbox" data-id="{{ $publicacao->id }}" {{ $publicacao->publicada ? 'checked' : '' }}>
                </div>
            </div>
            <hr class="hr-in-row" />
            @empty
                {{-- // TODO: Traduzir essa string --}}
                Nenhuma publicação aguardando moderação
            @endforelse
        </div>
        <div id="permissions" class="tab-pane fade in padding10">
          <!-- <div class="row">
            <input type="text">
            <button class="btn-group" type="submit">Search</button>
            </input>
          </div> -->
          @foreach(\observatorio\Usuario::orderBy('name')->get() as $usuario)
            <div class="row">
                <div class="col-md-1 col-md-offset-1">
                    <img class="img-fluid avatar" src="{{ url('/images/avatar',['slug'=>$usuario->username]) }}" />
                    @if(Auth::user()->id != $usuario->id)
                    <a class="btn btn-link" href="#" data-href="{{ _url('/profile/'.$usuario->username.'/delete') }}" data-toggle="modal" data-target="#confirm-delete" style="margin-left: -16px">Apagar</a>
                    @endif
                </div>
                <div class="col-md-6">
                    <h3><a href="{{ _url('/profile',['slug'=>$usuario->username]) }}">{{ $usuario->name  }}</a></h3>
                    <p> {{ $usuario->bio }} </p>
                </div>
                <div class="col-md-3">
                    <form class="permission-form" action="/api/admin/role/{{ $usuario->username }}">
                        <select class="form-control" name="role">
                            <option value="admin" @if($usuario->hasRole('admin')) selected="selected" @endif>Administrador</option>
                            <option value="membro" @if($usuario->hasRole('membro')) selected="selected" @endif>Membro</option>
                            <option value="autenticado" @if($usuario->hasRole('autenticado')) selected="selected" @endif>Autenticado</option>
                        </select>
                        <input class="btn btn-primary form-control" type="submit" value="Mudar permissão">
                    </form>
                </div>
            </div>
            <hr class="hr-in-row" />
          @endforeach
        </div>
        @endif
      </div>
    </div>
    <br>
  </div>
</div>
@include('modal.avatar')
<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Delete User</h1>
            </div>
            <div class="modal-body">
                Do you wish to delete the user?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-css')
<link href="{{ asset('vendor/css/croppie.css') }}" rel="stylesheet" />
<link href="{{ asset('vendor/css/bootstrap-switch.min.css') }}" rel="stylesheet" />
@endsection

@section('extra-js')
<script src="{{ asset('vendor/js/croppie.min.js') }}"></script>
<script src="{{ asset('vendor/js/bootstrap-switch.min.js') }}"></script>
<script src="{{ asset('js/avatar.js') }}"></script>
<script src="{{ asset('js/admin.js') }}"></script>
@endsection

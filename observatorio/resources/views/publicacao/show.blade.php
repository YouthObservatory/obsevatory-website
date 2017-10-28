@extends('layouts.app')

@section('content')
<div id="content" class="container">
  <div class="col-md-8">
      @if(Session::get('status'))
          <div class="alert alert-success alert-dismissible" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
              {{Session::get('status')}}
          </div>
      @endif
    <div class="page-header news-cover" style="background-image: url('/images/news/{{ $publicacao->slug }}')">
      <h1>{{ $publicacao->titulo() }}<br /><small>{{ $publicacao->olho() }}</small></h1>
    </div>
    @if(Auth::user() && (Auth::user()->id == $publicacao->autor_id  || Auth::user()->hasRole('admin')))
    <div class="text-right">
        <a class="btn btn-default" href="{{ _url('/activity/news/'.$publicacao->slug.'/edit') }}">Editar</a>
        <a class="btn btn-danger" href="#" data-href="{{ _url('/activity/news/'.$publicacao->slug.'/delete') }}" data-toggle="modal" data-target="#confirm-delete">Apagar</a>
    </div>
    @endif
    <div class="row">
        <div class="col-sm-6">
            <div class="tag"><!--Departamento <br>--> {{ $publicacao->autor->name }}, {{ $publicacao->created_at->format('d \d\e F \d\e Y, H:i') }}</div>
        </div>
        <div class="col-sm-6">
            @include('sharebar')
        </div>
    </div>
    <br>
    {!! $publicacao->texto() !!}

    <hr>

    {!! csrf_field() !!}
    <div id="comments">
        <div class="notifications"></div>
        <div class="area"></div>
    </div>
  </div>

  <div id='news' class="col-md-4">
     @foreach($news as $n)
         <a href="{{ _url('/activity/news/'.$n->slug) }}">
             <div class="notice featured">
                 <figure class="figure">
                     <img src="{{ url('/images/news/'.$n->slug) }}" class="img-fluid">
                 </figure>
                 <h2 class="title">{{ $n->titulo() }}</h2>
                 <h4 class="description">{{ $n->olho() }}</h4>
             </div>
         </a>
    @endforeach
  </div>
</div>

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Delete Post</h1>
            </div>
            <div class="modal-body">
                Do you wish to delete post <b>&ldquo;{{ $publicacao->titulo() }}&rdquo;</b>?
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
  <link href="{{ asset('jquery-comments/css/jquery-comments.css') }}" rel="stylesheet">
@endsection

@section('extra-js')
  <script src="{{ asset('jquery-comments/data/comments-data.js') }}"></script>
  <script src="{{ asset('jquery-comments/js/jquery-comments.js') }}"></script>
  <script>
    window._username = '{{ Auth::user() ? Auth::user()->username : 'null.png' }}';
    var _publicacaoId = {{ $publicacao->id }};

    $('.rrssb-buttons').rrssb({
      // required:
      title: '{{ $publicacao->titulo() }}',
      url: '{{ url('activity/news', ['slug' => $publicacao->slug]) }}',

      // optional:
      description: '{{ $publicacao->olho() }}',
      emailBody: '{{ $publicacao->olho() }} {{ url('activity/news', ['slug' => $publicacao->slug]) }}',
      image: '{{ url('/images/news/'.$publicacao->slug) }}',
    });
  </script>
  <script src="{{ asset('js/comments.js') }}"></script>
@endsection

@extends('layouts.app')

@section('content')
<div id="content" class="container">
    @if($highlight)
    <div class="row">
        <div class="col-sm-6">
            <a class="news-inner" href="{{ _url('/activity/news/'.$highlight->slug) }}">
                <figure>
                    <img src="{{ url('/images/news/'.$highlight->slug) }}">
                    {{-- <div class="pellicle"><span>Tag</span></div> --}}
                    <div class="pellicle"></div>
                    <figcaption>{{ $highlight->titulo() }}</figcaption>
                </figure>
            </a>
        </div>
        <div class="col-sm-6">
            @foreach($highlights as $h)
                <div class="row">
                    <div class="col-md-12">
                        <a class="news-inner split divider" href="{{ _url('/activity/news/'.$h->slug) }}">
                            <figure>
                                <img src="{{ url('/images/news/'.$h->slug) }}">
                                <div class="pellicle"></div>
                                {{-- <div class="pellicle"><span>Tag</span></div> --}}
                                <figcaption>{{ $h->titulo() }}</figcaption>
                            </figure>
                        </a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="row news-list">
        <div class="col-md-8 col-sm-12">
            @foreach($all->chunk(3) as $chunk)
                <div class="row">
                    @foreach($chunk as $news)
                        <div class="col-sm-4 spacer lv">
                            <a class="news" href="{{ _url('/activity/news/'.$news->slug) }}">
                                <img class="img-fluid" src="{{ url('/images/news/'.$news->slug.'/289') }}">
                                <h1 class="title">{{ $news->titulo() }}</h1>
                                <p class="text-justify">{{ $news->olho() }}</p>
                            </a>
                            <hr />
                        </div>
                    @endforeach
                </div>
            @endforeach
            {{-- <div class="row spacer">
                <div class="col-md-12 col-sm-12">
                    <a class="btn btn-loadmore" href="#">Load more...</a>
                </div>
            </div> --}}
        </div>
    @else
        <div class="col-md-8 col-sm-12">
            <h1 class="text-center">{{ trans('app.publication.notfound') }}</h1>
        </div>
    @endif
        <div class="col-md-4 col-sm-12">
            <div class="panel panel-default schedule">
                <div class="panel-heading">SCHEDULE</div>
                <div class="panel-body">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#today" aria-controls="today" role="tab" data-toggle="tab">Today</a></li>
                        <li role="presentation"><a href="#events" aria-controls="events" role="tab" data-toggle="tab">Events</a></li>
                        <li role="presentation"><a href="#webinars" aria-controls="webinars" role="tab" data-toggle="tab">Webinars</a></li>
                    </ul>
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="today">
                            @forelse($today as $item)
                                <div class="item">
                                    <div class="controls">
                                        @if($item->online)
                                            <div class="oranget">{{ $item->data_inicio->format('F d - H:i') }}</div>
                                        @endif
                                    </div>
                                    <a class="title" href="{{ _url('/activity/events', ['id' => $item->id]) }}">{{ $item->titulo }}</a>
                                </div>
                                @empty
                                <p>No event for today</p>
                            @endforelse
                            {{-- <div class="item">
                                <div class="controls">
                                    <div class="orange">Now</div><div class="oranget">Now</div>
                                    <a class="pull-right orange round" href="#" data-toggle="tooltip" data-placement="bottom" title="Play now"><i class="fa fa-play" aria-hidden="true"></i></a>
                                </div>
                                <a class="title" href="#">Title</a>
                            </div> --}}
                        </div>
                        <div role="tabpanel" class="tab-pane" id="events">
                            @forelse($futureEv as $item)
                                <div class="item">
                                    <div class="controls">
                                        @if($item->online)
                                            <div class="oranget">{{ $item->data_inicio->format('F d - H:i') }}</div>
                                        @else
                                           <div class="oranget">{{ $item->data_inicio->format('F d') }}</div>
                                        @endif
                                    </div>
                                    <a class="title" href="{{ _url('/activity/events', ['id' => $item->id]) }}">{{ $item->titulo }}</a>
                                </div>
                                @empty
                                <p>No event for future</p>
                            @endforelse
                        </div>
                        <div role="tabpanel" class="tab-pane" id="webinars">
                            @forelse($webinars as $item)
                                <div class="item">
                                    <div class="controls">
                                        <div class="oranget">{{ $item->data_inicio->format('F d - H:i') }}</div>
                                    </div>
                                    <a class="title" href="{{ _url('/activity/events', ['id' => $item->id]) }}">{{ $item->titulo }}</a>
                                </div>
                                @empty
                                <p>No webinars for future</p>
                            @endforelse
                        </div>
                        <a href="{{ _url('activity/events') }}" class="btn btn-loadmore">View all schedule</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="page-header"><h1>Blogs</h1></div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="blog">
                <figure>
                    <img src="{{ asset('images/avatar/null.png') }}" />
                    <figcaption><a href="#">Editor 1</a></figcaption>
                </figure>
                <div class="info">Lorem Ipsum é simplesmente uma simulação. Lorem Ipsum é simplesmente uma simulação.</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="blog">
                <figure>
                    <img src="{{ asset('images/avatar/null.png') }}" />
                    <figcaption><a href="#">Editor 2</a></figcaption>
                </figure>
                <div class="info">Lorem Ipsum é simplesmente uma simulação. Lorem Ipsum é simplesmente uma simulação.</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="blog">
                <figure>
                    <img src="{{ asset('images/avatar/null.png') }}" />
                    <figcaption><a href="#">Editor 3</a></figcaption>
                </figure>
                <div class="info">Lorem Ipsum é simplesmente uma simulação. Lorem Ipsum é simplesmente uma simulação.</div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6">
            <div class="blog">
                <figure>
                    <img src="{{ asset('images/avatar/null.png') }}" />
                    <figcaption><a href="#">Editor 4</a></figcaption>
                </figure>
                <div class="info">Lorem Ipsum é simplesmente uma simulação. Lorem Ipsum é simplesmente uma simulação.</div>
            </div>
        </div>
    </div> --}}
</div>
@endsection

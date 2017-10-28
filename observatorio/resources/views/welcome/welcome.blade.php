@extends('layouts.app')

@section('content')
<div class="white-wrapper">
<div id="carousel-example-generic" class="carousel slide carousel-full" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        <li data-target="#carousel-example-generic" data-slide-to="3"></li>
        <li data-target="#carousel-example-generic" data-slide-to="4"></li>
        <li data-target="#carousel-example-generic" data-slide-to="5"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="{{ asset('/images/carrossel/item1.jpg') }}" />
        </div>
        <div class="item">
            <img src="{{ asset('/images/carrossel/item2.jpg') }}" />
        </div>
        <div class="item">
            <img src="{{ asset('/images/carrossel/item3.jpg') }}" />
        </div>
        <div class="item">
            <img src="{{ asset('/images/carrossel/item4.jpg') }}" />
        </div>
        <div class="item">
            <img src="{{ asset('/images/carrossel/item5.jpg') }}" />
        </div>
        <div class="item">
            <img src="{{ asset('/images/carrossel/item6.jpg') }}" />
        </div>
    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>

<div id="about" class="white-wrapper">
    <div class="container">
        <div class="jumbosig text-justify">
            <h1>{{ trans('app.head.about') }}</h1>
            <div class="column-2">
                {!! trans('welcome.about') !!}
                <a class="btn btn-default btn-readmore" href="{{ url('/about') }}">{{ trans('app.btn.readmore') }}</a>
            </div>
        </div>
    </div>
</div>

@if(!$news->isEmpty())
<div class="jumbonews">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2">
                <div class="page-header text-center">
                    <h1><a href="{{ url('/activity/news') }}">{{ trans('app.head.news') }}</a></h1>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($news as $n)
                <div class="col-sm-4">
                    <a class="news" href="{{ _url('/activity/news', ['slug' => $n->slug]) }}">
                        <h1>{{ $n->titulo() }}</h1>
                    </a>
                    {{-- <div class="tag">Activities | News</div> --}}
                    <a class="news" href="{{ _url('/activity/news', ['slug' => $n->slug]) }}">
                        <img class="img-fluid" src="{{ url('/images/news/'.$n->slug.'/350') }}" />
                        <p class="text-justify">{{ $n->olho() }}</p>
                    </a>
                    <div class="text-right">
                        <a class="btn btn-default btn-readmore" href="{{ _url('/activity/news', ['slug' => $n->slug]) }}">{{ trans('app.btn.readmore') }}</a>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endif

<div class="white-wrapper padb">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                @include('welcome.testimonials')
            </div>
            <div class="col-sm-6">
                <div class="col-md-12">
                    <div id="joinus">
                        <div class="row">
                            <div class="col-sm-10 col-sm-offset-1">
                                <h3>{{ trans('app.head.joinus') }}</h3>
                                {!! trans('welcome.joinus') !!}
                                <a class="btn btn-default btn-readmore" href="{{ _url('/joinus') }}">{{ trans('app.btn.howtojoin') }}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('welcome.contact')

<div class="newsletter">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h1>{{ trans('welcome.welcometo') }}<br />{{ trans('app.title') }}!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <p><br />{{ trans('welcome.signupnews') }}</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <form id="newsletter-form" role="form">
                          <div class="form-group" id="newsletter-alert"></div>

                          <div class="input-group">
                              <input class="form-control input-lg" name="email" type="email" placeholder="{{ trans('app.form.email') }}">
                              <span class="input-group-addon btn"><button id="newsletter-send" class="btn btn-default btn-readmore-blue btn-lg">{{ trans('app.btn.subscribe') }}</button></span>
                          </div>
                      </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <hr />
                <a href="https://www.facebook.com/YouthObs/" target="_blank"><img src="{{ asset('images/fb.png') }}" class="social" data-toggle="tooltip" data-placement="bottom" title="Facebook"></a>
                <a href="https://twitter.com/YouthObs" target="_blank"><img src="{{ asset('images/twitter.png') }}" class="social" data-toggle="tooltip" data-placement="bottom" title="Twitter"></a>
                <a href="https://www.flickr.com/photos/146792716@N05/" target="_blank"><img src="{{ asset('images/flickr.png') }}" class="social" data-toggle="tooltip" data-placement="bottom" title="Flickr"></a>
                <a href="https://www.youtube.com/channel/UCoDxbs-OQZMAN39UKS3KjbQ" target="_blank"><img src="{{ asset('images/yt.png') }}" class="social" data-toggle="tooltip" data-placement="bottom" title="YouTube"></a>
            </div>
        </div>
    </div>
</div>

@endsection

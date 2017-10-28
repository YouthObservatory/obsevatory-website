@extends('layouts.app') @section('content')
<div class="jumbo-map"><div id="map" class="item scrolloff"></div></div>
    @if(!$eventos->isEmpty())
    <div class="white-wrapper">
        <div class="container">
            <div class="row">
              <div class="col-sm-12 text-right">
                <p>&nbsp;</p>
                <div class="btn-group">
                  @if($coming)
                    <a href="{{ _url('activity/events') }}" class="btn btn-readmore active">{{ trans('app.btn.coming') }}</a>
                    <a href="{{ _url('activity/events/past') }}" class="btn btn-default">{{ trans('app.btn.past') }}</a>
                  @else
                    <a href="{{ _url('activity/events') }}" class="btn btn-default">{{ trans('app.btn.coming') }}</a>
                    <a href="{{ _url('activity/events/past') }}" class="btn btn-readmore active">{{ trans('app.btn.past') }}</a>
                  @endif
                </div>
              </div>
            </div>
            <div class="row events-list">
                @foreach($eventos as $evento)
                <div class="col-sm-4 events-list-item">
                    <div class="panel panel-default evento" data-show-event="{{ $evento->id }}">
                        <div class="panel-body">
			      @if(own($evento->autor_id) || is_admin())
			      <div class="btn-group pull-right" role="group">
				  <button type="button" class="btn btn-default btn-borderless dropdown-toggle" data-toggle="dropdown" aria-haspopup="true">
				    <span class="glyphicon glyphicon-option-horizontal" aria-hidden="true"></span>
				  </button>
				  <ul class="dropdown-menu">
				    <li><a href="{{ _url('/activity/events/'.$evento->id.'/edit') }}"><span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit</a></li>
				    <li><a href="#" data-href="{{ _url('/activity/events/'.$evento->id.'/delete') }}" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete</a></li>
                                  </ul>
			      </div>
			      @endif
            @if($evento->online)
			         <div><small>{{ $evento->data_inicio->format('F d - H:i') }}</small></div>
            @else
               <div><small>{{ $evento->data_inicio->format('F d') }}</small></div>
            @endif

                            <h3>{{ $evento->titulo }}</h3>
                            <p>
                                <div><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
					<small> @if($evento->localizacao) {{ $evento->localizacao }} @else Online @endif</small></div>
                                <!--
                                // TODO: Colocar ligação que carregue o google maps em nova aba
                                -->
                                <div><span class="glyphicon glyphicon-globe" aria-hidden="true"></span> <small><a href="{{ $evento->url }}" target="_blank">{{ $evento->url }}</a></small></div>
                            </p>
                            @if($evento->online)
                              <p>Start: <small>{{ $evento->data_inicio->format('F d, Y g:i a') }}</small></p>
                              <p>End: <small>{{ $evento->data_fim->format('F d, Y g:i a') }}</small></p>
                            @else
                              <p>Start: <small>{{ $evento->data_inicio->format('F d, Y') }}</small></p>
                              <p>End: <small>{{ $evento->data_fim->format('F d, Y') }}</small></p>
                            @endif
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text-center">
                    {{ $eventos->links() }}
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                    <a class="btn btn-loadmore" href="#">Load more...</a>
                </div>
            </div> --}}
        </div>
    </div>
    @endif

<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1>Delete Event</h1>
            </div>
            <div class="modal-body">
                Do you wish to delete?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger btn-ok">Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('extra-js')
<script>
    var
        map,
        markers = [],
        events = [];

    function initMap() {
        var styledMap = new google.maps.StyledMapType([
            {
                featureType: 'transit',
                stylers: [{
                    visibility: 'off'
                }]
            }, {
                featureType: 'poi',
                stylers: [{
                    visibility: 'off'
                }]
            }], {
                name: 'Map'
            });

        map = new google.maps.Map(document.getElementById('map'), {
            center: {
                lat: 0,
                lng: 0
            },
            zoom: 3,
            mapTypeControlOptions: {
                mapTypeIds: ['map_style']
            }
        });

        map.mapTypes.set('map_style', styledMap);
        map.setMapTypeId('map_style');

        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
                map.setCenter({
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                });
            });
        }
    }

    function initMarkers() {
        if (map) {
            $.ajax({
                url: '/api/events/markers/@if(!$coming)past/@endif',
                dataType: 'json'
            }).done(function(data) {
                events = data.events;
                events.forEach(function(e, i) {
                    var m = new google.maps.Marker({
                        animation: google.maps.Animation.DROP,
                        position: e.position,
                        map: map,
                        icon: '/images/marcador.png',
                        title: e.title
                    });
                    if (e.infowindowcontent) {
                        var infowindow = new google.maps.InfoWindow({
                            content: e.infowindowcontent
                        });
                        google.maps.event.addListener(m, 'click', function() {
                            infowindow.open(map, m);
                        });

                    }
                    markers.push(m);
                });
                if (markers.length > 1) {
                    var optionsCluster = {
                        styles: [{
                            width:56,
                            height:55,
                            url:'/images/cluster.png',
                            textColor: '#fff'
                        }]
                    };
                    new MarkerClusterer(map, markers, optionsCluster);
                }
            });
        } else {
            setTimeout(initMarkers, 500);
        }
    }

    $(document).ready(function() {
        initMarkers();
        $('[data-show-event]').mouseenter(function() {
            var id = $(this).data('show-event');
            events.forEach(function(event) {
                if (event.id == id) {
                    map.setZoom(15);
                    map.setCenter(event.position);
                    return false;
                }
            });
        });

        $('.jumbo-map').on('click', function () {
            $('#map').removeClass('scrolloff');
        });

        $("#map").mouseleave(function () {
            $('#map').addClass('scrolloff');
        });
    });
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCi5RlmENQUcObP4j3zIrSwNDYEabD8tis&callback=initMap"></script>
<script src="{{ asset('vendor/js/markerclusterer.js') }}"></script>
<script src="{{ asset('vendor/js/masonry.min.js') }}"></script>
<script>
  $('.events-list').masonry({
    // options
    itemSelector: '.events-list-item',
    columnWidth: 10
  });
</script>
@endsection

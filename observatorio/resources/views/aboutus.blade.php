@extends('layouts.app')

@section('content')
<div id="content" class="container text-justify">
    <div class="row">
        <div class="col-sm-10 col-sm-offset-1">
            <div class="page-header">
                <h1 class="text-orange">{{ trans('aboutus.title') }}</h1>
            </div>
            {!! trans('aboutus.content') !!}
        </div>
    </div>
    <div class="row">
        <!-- <div class="col-sm-10 col-sm-offset-1">
            <div class="page-header">
                <h1 class="text-orange">{{ trans('aboutus.whereAreYouths') }}</h1>
            </div>
        </div> -->
        <img width="100%" src="/images/whereAreYouths/{{ App::getLocale() }}.jpg" />
        <div class="jumbo-map"><div id="map" class="item scrolloff"></div></div>
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
            zoom: 2,
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
                url: '/whereAreYouths.json',
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
<!--<script src="{{ asset('vendor/js/markerclusterer.js') }}"></script>-->
@endsection

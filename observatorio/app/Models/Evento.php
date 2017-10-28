<?php

namespace observatorio;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Evento extends Model
{
    protected $table = 'eventos';

    protected $fillable = array(
        'autor_id', 'data_inicio', 'data_fim', 'titulo', 'pais_sigla', 'localizacao', 'url', 'lat', 'long', 'online',
    );

    protected $dates = array('data_inicio', 'data_fim');

//    protected $dateFormat = 'Y-m-d H:i';

    public static function todayEvents()
    {
        $now = Carbon::today()->format('Y-m-d');

        return self::where([['data_inicio', '<=', $now],['data_fim', '>=', $now]])->orderBy('data_inicio');
    }

    public static function futureEvents()
    {
        $now = Carbon::today()->format('Y-m-d');

        return self::where('online', 0)->where('data_inicio', '>=', $now);
    }

    public static function webinarEvents()
    {
        $now = Carbon::today()->format('Y-m-d');

        return self::where('online', 1)->where('data_inicio', '>=', $now);
    }

    public function save(array $options = array())
    {
        if ($this->online == 0 && ($this->lat == null || $this->log == null)) {
            $google_maps_json_url = sprintf('http://maps.google.com/maps/api/geocode/json?address=%s&sensor=false', urlencode($this->localizacao));
            $json_response = file_get_contents($google_maps_json_url);
            $object_response = json_decode($json_response);
            if ($object_response->status == 'OK' && count($object_response->results) >= 1) {
                $this->lat = $object_response->results[0]->geometry->location->lat;
                $this->long = $object_response->results[0]->geometry->location->lng;
            }
        }

        parent::save($options);
    }

    public function doMaker()
    {
        return array(
            'position' => array(
                'lat' => floatval($this->lat),
                'lng' => floatval($this->long),
            ),
            'title' => $this->titulo,
            'id' => $this->id,
            'infowindowcontent' => sprintf('<h3>%s</h3><hr><p>%s até %s</p><p><strong>Local:</strong><br>%s</p><p><a href="%s">+ informações</a></p>', $this->titulo, $this->data_inicio, $this->data_fim, $this->localizacao, $this->url),
        );
    }
}

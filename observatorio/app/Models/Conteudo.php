<?php

namespace observatorio;

use Illuminate\Database\Eloquent\Model;

class Conteudo extends Model
{
    protected $fillable = array(
        'publicacao_id', 'titulo', 'olho', 'texto', 'idioma_id',
    );

    public function publicacao()
    {
        return $this->belongsTo('observatorio\Publicacao');
    }

    public function idioma()
    {
        return $this->belongsTo('observatorio\Idioma');
    }

    //public $timestamps = false;
}

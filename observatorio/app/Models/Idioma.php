<?php

namespace observatorio;

use Illuminate\Database\Eloquent\Model;

class Idioma extends Model
{
    protected $fillable = array(
        'nome', 'sigla',
    );

    public static function bySigla($idioma)
    {
        return self::where('sigla', '=', $idioma)->first();
    }

    public function conteudos()
    {
        return $this->hasMany('observatorio\Conteudo');
    }

    public $timestamps = false;
}

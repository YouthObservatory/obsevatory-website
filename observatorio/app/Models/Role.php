<?php

namespace observatorio;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = array('nome', 'descricao');

    protected function usuarios()
    {
        return $this->hasMany('observatorio\Usuario');
    }

    public static function byNome($nome)
    {
        return self::where('nome', '=', $nome)->first();
    }

    public $timestamps = false;
}

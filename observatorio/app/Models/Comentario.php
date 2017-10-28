<?php

namespace observatorio;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';

    protected $fillable = array(
        'usuario_id', 'publicacao_id', 'parent_id', 'texto', 'upvote',
    );

    public function publicacao()
    {
        return $this->belongsTo('observatorio\Publicacao');
    }

    public function usuario()
    {
        return $this->belongsTo('observatorio\Usuario');
    }

    public function upvotes()
    {
        return $this->belongsToMany('observatorio\Usuario', 'comentarios_upvotes');
    }

    public function hasUserUpvote($id)
    {
        foreach ($this->upvotes as $user) {
            if ($user->id === $id) {
                return true;
            }
        }

        return false;
    }

    public function parent()
    {
        return $this->belongsTo('observatorio\Comentario', 'parent_id');
    }

    //public $timestamps = false;
}

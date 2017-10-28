<?php

namespace observatorio;

use Config;
use DB;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;
use Image;

class Publicacao extends Model
{
    use Sluggable;
    use SluggableScopeHelpers;

    public $title;

    protected $table = 'publicacoes';

    protected $fillable = array(
        'autor_id', 'publicada', 'cover', 'slug',
    );

    public function autor()
    {
        return $this->belongsTo('observatorio\Usuario');
    }

    public function conteudos()
    {
        return $this->hasMany('observatorio\Conteudo');
    }

    public function comentarios()
    {
        return $this->hasMany('observatorio\Comentario');
    }

    public function conteudo($idioma)
    {
        foreach ($this->conteudos as $conteudo) {
            if ($conteudo->idioma->sigla == $idioma) {
                return $conteudo;
            }
        }

        return;
    }

    public function byIdioma($locale)
    {
        return DB::table('conteudos')
            ->join('publicacoes', 'conteudos.publicacao_id', '=', 'publicacoes.id')
            ->join('idiomas', 'conteudos.idioma_id', '=', 'idiomas.id')
            ->where('idiomas.sigla', '=', $locale)
            ->where('publicacoes.id', '=', $this->id)
            ->first();
    }

    public function getTitulo($idioma)
    {
        $conteudo = $this->byIdioma($idioma);

        if (!$conteudo) {
            return;
        }

        return $conteudo->titulo;
    }

    public function getOlho($idioma)
    {
        $conteudo = $this->byIdioma($idioma);

        if (!$conteudo) {
            return null;
        }

        return $conteudo->olho;
    }

    public function getTexto($idioma)
    {
        $conteudo = $this->byIdioma($idioma);

        if (!$conteudo) {
            return;
        }

        return $conteudo->texto;
    }

    public function titulo()
    {
        $conteudo = $this->byIdioma(Config::get('app.locale'));

        if (!$conteudo) {
            $conteudo = $this->byIdioma('en');
        }

        return $conteudo->titulo;
    }

    public function olho()
    {
        $conteudo = $this->byIdioma(Config::get('app.locale'));

        if (!$conteudo) {
            $conteudo = $this->byIdioma('en');
        }

        return $conteudo->olho;
    }

    public function texto()
    {
        $conteudo = $this->byIdioma(Config::get('app.locale'));

        if (!$conteudo) {
            $conteudo = $this->byIdioma('en');
        }

        return $conteudo->texto;
    }

    public static function coverImage($cover)
    {
        $image = null;
        if (preg_match('/data:([^;]*);base64,(.*)/', $cover, $matches)) {
            $image = Image::make(str_replace(' ', '+', $matches[2]));
        }

        if ($image) {
            $a = $image->widen(745);

            if ($a->height() >= 420) {
                return $a;
            }

            return $image->heighten(420);
        }
    }

    public static function validateCover($validator, $cover)
    {
        if (!$cover) {
            return;
        }

        // Verifica se a imagem tem a dimensão de 745 x 420 pixels
        if ($cover->width() < 745 || $cover->height() < 420) {
            $validator->errors()->add('cover', 'The image does not have the required dimension (745 x 420 pixels)');
        }

        // TODO: Checar se é possível empregar a validação de tamanho no cover
        // Intervention Image retorna false quando é executado filesize() de um
        // arquivo que não está em disco

        // Verifica se o arquivo é maior que 40960 bytes ou 40KB.
        // if ($cover->filesize() > 40960) {
        //     $validator->errors()->add('cover', 'The file size is larger than allowed (40 KBytes)');
        // }
    }

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'method' => null,
                'maxLength' => 45,
                'separator' => '-',
                'unique' => true,
            ],
        ];
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}

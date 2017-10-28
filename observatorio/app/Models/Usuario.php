<?php

namespace observatorio;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Carbon\Carbon;
use Image;
use Cviebrock\EloquentSluggable\Sluggable;
use Cviebrock\EloquentSluggable\SluggableScopeHelpers;

class Usuario extends Authenticatable
{
    use Sluggable;
    use SluggableScopeHelpers;

    protected $fillable = array('name', 'email', 'nascimento', 'bio', 'sexo', 'password', 'role_id', 'foto', 'username');

    protected $hidden = array('password', 'remember_token');

    public function shortName() {
        $names = explode(" ", $this->name);

        return $names[0]." ".$names[count($names)-1];
    }

    public function setNascimentoAttribute($value)
    {
        return $this->attributes['nascimento'] = Carbon::createFromFormat('Y-m-d', $value)->toDateString();
    }

    public function scopeFindByUsername($query, $username)
    {
        $rs = $query->where('username', '=', $username)->get();
        if (!$rs->isEmpty()) {
            return $rs[0];
        }

        return null;
    }

    public function role()
    {
        return $this->belongsTo('observatorio\Role');
    }

    public function comentarios()
    {
        return $this->hasMany('observatorio\Comentario');
    }

    public function hasRole($roles)
    {
        if (is_string($roles)) {
            return $this->role->nome === $roles;
        }

        return in_array($this->role->nome, $roles);
    }

    public static function avatarImage($avatar)
    {
        if (preg_match('/data:([^;]*);base64,(.*)/', $avatar, $matches)) {
            return Image::make(str_replace(' ', '+', $matches[2]));
        }
    }

    public static function validateAvatar($validator, $avatar)
    {
        if (!$avatar) {
            return;
        }

        // Verifica se a imagem tem a dimensão de 128 x 128 pixels
        if ($avatar->width() != 128 || $avatar->height() != 128) {
            $validator->errors()->add('avatar', 'The image does not have the required dimension (128 x 128 pixels)');
        }

        // TODO: Checar se é possível empregar a validação de tamanho no avatar
        // Intervention Image retorna false quando é executado filesize() de um
        // arquivo que não está em disco

        // Verifica se o arquivo é maior que 40960 bytes ou 40KB.
        // if ($avatar->filesize() > 40960) {
        //     $validator->errors()->add('avatar', 'The file size is larger than allowed (40 KBytes)');
        // }
    }

    public function sluggable()
    {
        return [
            'username' => [
                'source' => 'name',
                'method' => null,
                'maxLength' => 24,
                'separator' => '-',
                'unique' => true,
            ],
        ];
    }

    //public $timestamps = false;
}

<?php

namespace App;

use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    protected $primaryKey = 'id_users';

    protected $fillable = [
        'id_users', 'username', 'email', 'password', 'imagem_user', 'area_formacao', 'data_nascimento', 'localidade', 'nacionalidade', 'descricao', 'ref_id_users_tipo',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function user_tem_apps(){

        return $this->belongsToMany('App\Aplicacao', 'aplicacao_user', 'ref_id_users', 'ref_id_aplicacao')->withTimestamps('created_at', 'updated_at');
    }

//    new query
    public function user_tem_comentarios(){
        return $this->hasMany('App\Comentario', 'ref_id_users', 'id_users');
    }


}




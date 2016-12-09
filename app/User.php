<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    protected $table = 'users';
    protected $primaryKey = 'id_users';

    protected $fillable = [
        'username', 'email', 'password', 'ref_id_users_tipo',
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

        return $this->belongsToMany('App\Aplicacao', 'aplicacao_user', 'ref_id_users', 'ref_id_aplicacao');
    }



}




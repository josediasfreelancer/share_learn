<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users_Tipo extends Model
{
    //
    protected $table = "users_tipo";
    protected $primaryKey = "id_users_tipo";

    protected $fillable = [
        'designacao',

    ];

}

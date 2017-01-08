<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $table = 'comentarios';

    protected $primaryKey = 'id_comentarios';

    protected $fillable = [
        'id_comentarios', 'comentarios_texto', 'ativo', 'ref_id_aplicacao', 'ref_id_users',
    ];


    public function comentarios_do_user(){

        return $this->hasOne('App\User', 'id_users', 'ref_id_users');
    }



}

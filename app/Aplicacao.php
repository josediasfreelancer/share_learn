<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplicacao extends Model
{

    protected $table = 'aplicacaos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'nome', 'descricao', 'imagem', 'ficheiro_inicial', 'ativo_app',
    ];


    public function app_tem_users(){

        return $this->belongsToMany('App\User', 'aplicacao_user', 'ref_id_users', 'ref_id_aplicacao');
    }

    public function app_tem_comentarios(){

        return $this->hasMany('App\Comentario', 'ref_id_aplicacao', 'id');
    }

}

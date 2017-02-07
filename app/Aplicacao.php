<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aplicacao extends Model
{

    protected $table = 'aplicacaos';
    protected $primaryKey = 'id';

    protected $fillable = [
        'id', 'nome', 'descricao', 'imagem', 'ficheiro_inicial', 'ativo_app','idade' ,'created_at', 'updated_at', 'ref_id_episodios', 'ref_id_disciplinas', 'ref_id_tipos'
    ];


    public function app_tem_users(){

        return $this->belongsToMany('App\User', 'aplicacao_user', 'ref_id_aplicacao', 'ref_id_users')->withTimestamps('created_at', 'updated_at');
    }

    public function app_tem_comentarios(){

        return $this->hasMany('App\Comentario', 'ref_id_aplicacao', 'id');
    }

//    public function series(){
//        return $this->hasOne('App\Series', 'id_series', 'ref_id_series');
//    }

    public function series(){
        return $this->hasOne('App\Series', 'id_series', 'ref_id_episodios');
    }




}

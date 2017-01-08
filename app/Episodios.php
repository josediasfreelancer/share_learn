<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Episodios extends Model
{
    public function aplicacoes(){
        return $this->hasMany('App\Aplicacao', 'ref_id_episodios', 'id_episodios');
    }
}

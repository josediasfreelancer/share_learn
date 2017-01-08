<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Series extends Model
{
    //
    public function canal_tv(){

        return $this->hasOne('App\Canaltv', 'id_series', 'ref_id_canal');
    }

    public function episodios(){
        return $this->hasMany('App\Episodios', 'ref_id_series', 'id_series');
    }

    public function apps(){
        return $this->hasMany('App\Aplicacao', 'ref_id_episodios', 'id_series');
    }
}

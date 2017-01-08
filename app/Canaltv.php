<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Canaltv extends Model
{
    protected $table = 'canal_tv';

    public function series(){
        return $this->hasMany('App\Series', 'ref_id_canal', 'id_canal_tv');
    }

}

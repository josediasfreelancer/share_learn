<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAplicacoesTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplicacoes__tipos', function (Blueprint $table) {
            $table->increments('id_tipos');
            $table->string('nome_tipos');
            $table->timestamps();
        });

//        DB::insert('insert into aplicacoes__tipos(nome_tipos) values (?)', ['Quiz']);
//        DB::insert('insert into aplicacoes__tipos(nome_tipos) values (?)', ['Palavras-Cruzadas']);
//        DB::insert('insert into aplicacoes__tipos(nome_tipos) values (?)', ['Video']);
//        DB::insert('insert into aplicacoes__tipos(nome_tipos) values (?)', ['Jogo']);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aplicacoes__tipos');
    }
}

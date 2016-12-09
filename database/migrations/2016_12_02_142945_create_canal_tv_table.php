<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCanalTvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('canal_tv', function (Blueprint $table) {
            $table->increments('id_canal_tv');
            $table->string('nome_canal_tv');
            $table->string('imagem_canal_tv');
            $table->timestamps();
        });

        DB::insert('insert into canal_tv(nome_canal_tv, imagem_canal_tv) values (?,?)', ['Cartoon Network', 'http://www.top-ten.tv/wp-content/uploads/2013/08/Cartoon-Network-Original-LOGO.png']);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('canal_tv');
    }
}

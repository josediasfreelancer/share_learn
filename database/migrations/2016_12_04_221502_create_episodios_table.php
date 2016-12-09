<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEpisodiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodios', function (Blueprint $table) {
            $table->increments('id_episodios');
            $table->string('nome_episodios');
            $table->string('imagem_episodios');
            $table->timestamps();
        });

        Schema::table('episodios', function(Blueprint $table) {
            $table->integer('ref_id_episodios')->unsigned();
            $table->foreign('ref_id_episodios')->references('id_series')->on('series')->onDelete('cascade');
        });

        DB::insert('insert into episodios(nome_episodios, imagem_episodios, ref_id_episodios) values (?,?,?)', ['DeeDeemensional', 'http://tbsila.cdn.turner.com/toonla/images/cnemea/content/375/downloadable/dexter/uk/dexter01_600x400.jpg', 1]);



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('episodios');
    }
}

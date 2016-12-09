<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComentarioDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comentario__denuncias', function (Blueprint $table) {
            $table->integer('ref_id_users')->unsigned();
            $table->integer('ref_id_comentarios')->unsigned();
            $table->timestamps();

            $table->foreign('ref_id_users')->references('id_users')->on('users')->onDelete('cascade');
            $table->foreign('ref_id_comentarios')->references('id_comentarios')->on('comentarios')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentario__denuncias');
    }
}

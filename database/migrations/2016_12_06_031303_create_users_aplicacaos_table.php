<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersAplicacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplicacao_user', function (Blueprint $table) {
//            $table->increments('id');
            $table->integer('ref_id_users')->unsigned();
            $table->integer('ref_id_aplicacao')->unsigned();


            $table->foreign('ref_id_users')->references('id_users')->on('users')->onDelete('cascade');
            $table->foreign('ref_id_aplicacao')->references('id')->on('aplicacaos')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aplicacao_user');
    }
}

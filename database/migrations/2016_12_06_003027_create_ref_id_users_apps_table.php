<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRefIdUsersAppsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('comentarios', function (Blueprint $table) {
            $table->integer('ref_id_aplicacao')->unsigned();
            $table->integer('ref_id_users')->unsigned();

            $table->foreign('ref_id_aplicacao')->references('id')->on('aplicacaos')->onDelete('cascade');
            $table->foreign('ref_id_users')->references('id_users')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comentarios');
    }
}

<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTipoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_tipo', function (Blueprint $table) {
            $table->increments('id_users_tipo');
            $table->string('designacao', 50);
            $table->timestamps();
        });

//        DB::insert('insert into users_tipo(designacao) values (?)', ['user']);
//        DB::insert('insert into users_tipo(designacao) values (?)', ['admin']);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users_tipo');
    }
}

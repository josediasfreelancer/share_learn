<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_users');
            $table->string('username', 150);
            $table->string('email',75)->unique();
            $table->string('password', 100);
            $table->rememberToken();
            $table->timestamps();
            $table->string('imagem_user', 300)->default('images/profile/user1.png');
            $table->string('area_formacao', 75)->nullable();
            $table->dateTime('data_nascimento')->nullable();
            $table->string('localidade', 50)->nullable();
            $table->string('nacionalidade', 50)->nullable();
            $table->longText('descricao')->nullable();
//            $table->integer('ref_id_users_tipo')->unsigned();
//            $table->integer('ref_id_users_tipo')->default(1);

        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}

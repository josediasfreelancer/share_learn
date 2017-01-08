<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAplicacaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aplicacaos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('descricao');
            $table->string('imagem');
            $table->string('ficheiro_inicial');
            $table->boolean('ativo_app');
            $table->integer('idade');
            $table->timestamps();
        });

        Schema::table('aplicacaos', function(Blueprint $table) {
            $table->integer('ref_id_episodios')->unsigned();
            $table->integer('ref_id_disciplinas')->unsigned();
            $table->integer('ref_id_tipos')->unsigned();

            $table->foreign('ref_id_episodios')->references('id_episodios')->on('episodios')->onDelete('cascade');
            $table->foreign('ref_id_disciplinas')->references('id_disciplinas')->on('disciplinas')->onDelete('cascade');
            $table->foreign('ref_id_tipos')->references('id_tipos')->on('aplicacoes__tipos')->onDelete('cascade');
        });

//        DB::insert('insert into aplicacaos(nome, descricao, imagem, ficheiro_inicial, ativo_app, idade, ref_id_episodios, ref_id_disciplinas, ref_id_tipos) values (?,?,?,?,?,?,?,?,?)', ['Quiz Pata', 'A descrição', 'imagem.jpg', 'file.rar', 1, 11, 1, 1, 1]);
//        DB::insert('insert into aplicacaos(nome, descricao, imagem, ficheiro_inicial, ativo_app, idade, ref_id_episodios, ref_id_disciplinas, ref_id_tipos) values (?,?,?,?,?,?,?,?,?)', ['Dora a Exploradora', 'A descrição', 'imagem.jpg', 'file.rar', 1, 11, 1, 1, 1]);
//        DB::insert('insert into aplicacaos(nome, descricao, imagem, ficheiro_inicial, ativo_app, idade, ref_id_episodios, ref_id_disciplinas, ref_id_tipos) values (?,?,?,?,?,?,?,?,?)', ['O urso João', 'A descrição', 'imagem.jpg', 'file.rar', 1, 11, 1, 1, 1]);
//        DB::insert('insert into aplicacaos(nome, descricao, imagem, ficheiro_inicial, ativo_app, idade, ref_id_episodios, ref_id_disciplinas, ref_id_tipos) values (?,?,?,?,?,?,?,?,?)', ['Carrinha mágica', 'A descrição', 'imagem.jpg', 'file.rar', 1, 11, 1, 1, 1]);
//

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aplicacaos');
    }
}

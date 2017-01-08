<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('id_series');
            $table->string('nome_series');
            $table->string('imagem_series');
            $table->timestamps();
        });

        Schema::table('series', function(Blueprint $table) {
            $table->integer('ref_id_canal')->unsigned();
            $table->foreign('ref_id_canal')->references('id_canal_tv')->on('canal_tv')->onDelete('cascade');
        });

//        DB::insert('insert into series(nome_series, imagem_series, ref_id_canal) values (?,?,?)', ['Dexter', 'http://tbsila.cdn.turner.com/toonla/images/cnemea/content/375/downloadable/dexter/uk/dexter01_600x400.jpg', 1]);
//        DB::insert('insert into series(nome_series, imagem_series, ref_id_canal) values (?,?,?)', ['Cow and Chicken', 'http://assets2.pop-buzz.com/2015/39/cow-and-chicken-1443625206-responsive-large-0.jpg', 1]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('series');
    }
}

<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Series::create([
            'nome_series' => 'Dexter',
            'imagem_series' => 'http://tbsila.cdn.turner.com/toonla/images/cnemea/content/375/downloadable/dexter/uk/dexter01_600x400.jpg',
            'ref_id_canal' => 1
        ]);

        \App\Series::create([
            'nome_series' => 'Cow and Chicken',
            'imagem_series' => 'http://assets2.pop-buzz.com/2015/39/cow-and-chicken-1443625206-responsive-large-0.jpg',
            'ref_id_canal' => 1
        ]);


    }
}

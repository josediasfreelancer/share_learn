<?php

use Illuminate\Database\Seeder;

class EpisodiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Episodios::create([
            'nome_episodios' => 'DeeDeemensional',
            'imagem_episodios' => 'http://tbsila.cdn.turner.com/toonla/images/cnemea/content/375/downloadable/dexter/uk/dexter01_600x400.jpg',
            'ref_id_series' => 1
        ]);

        \App\Episodios::create([
            'nome_episodios' => 'Field Trip to Folsom Prison',
            'imagem_episodios' => 'http://assets2.pop-buzz.com/2015/39/cow-and-chicken-1443625206-responsive-large-0.jpg',
            'ref_id_series' => 2
        ]);

        \App\Episodios::create([
            'nome_episodios' => 'The Girl\'s Bathroom',
            'imagem_episodios' => 'http://assets2.pop-buzz.com/2015/39/cow-and-chicken-1443625206-responsive-large-0.jpg',
            'ref_id_series' => 2
        ]);



    }
}

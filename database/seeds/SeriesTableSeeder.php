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
            'imagem_series' => 'http://cfvod.kaltura.com/p/1745101/sp/174510100/thumbnail/entry_id/0_v5u374e8/version/100031/width/600/height/400',
            'ref_id_canal' => 1
        ]);

        \App\Series::create([
            'nome_series' => 'Powerpuff Girls',
            'imagem_series' => 'http://tbsila.cdn.turner.com/toonla/images/cnemea/content/312/downloadable/the-powerpuff-girls-%232/uk/powerpuff-girls-600x400-2.jpg',
            'ref_id_canal' => 1
        ]);

    }
}

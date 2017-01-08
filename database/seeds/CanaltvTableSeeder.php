<?php

use Illuminate\Database\Seeder;

class CanaltvTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Canaltv::create([
            'nome_canal_tv' => 'Cartoon Network',
            'imagem_canal_tv' => 'http://www.top-ten.tv/wp-content/uploads/2013/08/Cartoon-Network-Original-LOGO.png'
        ]);

        \App\Canaltv::create([
            'nome_canal_tv' => 'Biggs',
            'imagem_canal_tv' => 'http://c8.quickcachr.fotos.sapo.pt/i/P16046209/12982747_jokAA.jpeg'
        ]);

        \App\Canaltv::create([
            'nome_canal_tv' => 'Panda',
            'imagem_canal_tv' => 'https://yt3.ggpht.com/-ubWyeh3t5E0/AAAAAAAAAAI/AAAAAAAAAAA/gQO3Nla8KiM/s900-c-k-no-mo-rj-c0xffffff/photo.jpg'
        ]);

    }
}

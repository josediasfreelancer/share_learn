<?php

use Illuminate\Database\Seeder;

class Aplicacoes_TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Aplicacoes_Tipo::create([
            'nome_tipos' => 'Quiz'
        ]);

        \App\Aplicacoes_Tipo::create([
            'nome_tipos' => 'Palavras-Cruzadas'
        ]);

        \App\Aplicacoes_Tipo::create([
            'nome_tipos' => 'Jogos'
        ]);

        \App\Aplicacoes_Tipo::create([
            'nome_tipos' => 'Videos'
        ]);
    }
}

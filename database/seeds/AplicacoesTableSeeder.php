<?php

use Illuminate\Database\Seeder;

class AplicacoesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Aplicacao::create([
            'nome' => 'Quiz Pata',
            'descricao' => 'A descrição',
            'imagem'=>'imagem.jpg',
            'ficheiro_inicial'=>'file.rar',
            'ativo_app'=>1,
            'idade'=>11,
            'ref_id_episodios'=>1,
            'ref_id_disciplinas'=>1,
            'ref_id_tipos'=>1,
        ]);

        \App\Aplicacao::create([
            'nome' => 'Dora a Exploradora',
            'descricao' => 'A descrição',
            'imagem'=>'imagem.jpg',
            'ficheiro_inicial'=>'file.rar',
            'ativo_app'=>1,
            'idade'=>11,
            'ref_id_episodios'=>1,
            'ref_id_disciplinas'=>1,
            'ref_id_tipos'=>1,
        ]);

        \App\Aplicacao::create([
            'nome' => 'O urso João',
            'descricao' => 'A descrição',
            'imagem'=>'imagem.jpg',
            'ficheiro_inicial'=>'file.rar',
            'ativo_app'=>1,
            'idade'=>11,
            'ref_id_episodios'=>1,
            'ref_id_disciplinas'=>1,
            'ref_id_tipos'=>1,
        ]);

        \App\Aplicacao::create([
            'nome' => 'Carrinha mágica',
            'descricao' => 'A descrição',
            'imagem'=>'imagem.jpg',
            'ficheiro_inicial'=>'file.rar',
            'ativo_app'=>1,
            'idade'=>11,
            'ref_id_episodios'=>1,
            'ref_id_disciplinas'=>1,
            'ref_id_tipos'=>1,
        ]);
    }
}

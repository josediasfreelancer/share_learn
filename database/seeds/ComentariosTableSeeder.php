<?php

use Illuminate\Database\Seeder;

class ComentariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Comentario::create([
            'comentarios_texto' => 'teste comentario 1',
            'ativo' => 1,
            'ref_id_aplicacao' => 1,
            'ref_id_users' => 1,
        ]);

        \App\Comentario::create([
            'comentarios_texto' => 'teste comentario 2',
            'ativo' => 1,
            'ref_id_aplicacao' => 1,
            'ref_id_users' => 1,
        ]);

        \App\Comentario::create([
            'comentarios_texto' => 'teste comentario 1',
            'ativo' => 1,
            'ref_id_aplicacao' => 1,
            'ref_id_users' => 2,
        ]);

        \App\Comentario::create([
            'comentarios_texto' => 'teste comentario 1',
            'ativo' => 1,
            'ref_id_aplicacao' => 1,
            'ref_id_users' => 3,
        ]);
    }
}

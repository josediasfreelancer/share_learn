<?php

use Illuminate\Database\Seeder;

class DisciplinasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Disciplina::create([
            'nome_disciplinas' => 'Matematica'
        ]);

        \App\Disciplina::create([
            'nome_disciplinas' => 'Português'
        ]);

        \App\Disciplina::create([
            'nome_disciplinas' => 'Estudo do Meio'
        ]);
    }
}

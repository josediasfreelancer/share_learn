<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Query\Builder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CanaltvTableSeeder::class);
        $this->call(SeriesTableSeeder::class);
        $this->call(EpisodiosTableSeeder::class);
        $this->call(DisciplinasTableSeeder::class);
        $this->call(Aplicacoes_TipoTableSeeder::class);
        $this->call(AplicacoesTableSeeder::class);
        $this->call(Users_TipoTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(ComentariosTableSeeder::class);

    }
}

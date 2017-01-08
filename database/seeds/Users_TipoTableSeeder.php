<?php

use Illuminate\Database\Seeder;

class Users_TipoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Users_Tipo::create([
            'designacao' => 'user',
        ]);

        \App\Users_Tipo::create([
            'designacao' => 'admin',
        ]);

    }
}

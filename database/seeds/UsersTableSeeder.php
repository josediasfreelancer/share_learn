<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

        public function run() {
        $faker = Faker\Factory::create();

            static $password;

        for($i = 0; $i < 50; $i++) {
            App\User::create([
                'username' => $faker->userName,
                'email' => $faker->email,
                'password' => $password ?: $password = bcrypt('secret'),
                'remember_token' => str_random(60),
                'imagem_user' => 'images/profile/user1.png',
                'ref_id_users_tipo' => 1
            ]);
        }
    }

}

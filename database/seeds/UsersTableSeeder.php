<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'lancelot',
            'email' => 'lancelot@gmail.com',
            'password' => bcrypt('coding5'),
            // 'role_id' => 1,
            // 'profil_id'=> 1
        ]);
    }
}

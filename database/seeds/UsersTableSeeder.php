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
            'name' => 'Lancelot',
            'email' => 'lancelot@gmail.com',
            'password' => bcrypt('coding5'),
             'role_id' => 1,
             'image' => '/team/1.jpg',
             'created_at'=>now()->format('Y-m-d'),
             'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est,'
           
        ]);
        DB::table('users')->insert([
            'name' => 'Xavier',
            'email' => 'xavier@gmail.com',
            'password' => bcrypt('coding5'),
             'role_id' => 2,
             'image' => '/team/2.jpg',
             'created_at'=>now()->format('Y-m-d'),
             'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est,'
        ]);
        DB::table('users')->insert([
            'name' => 'Alessio',
            'email' => 'alessio@gmail.com',
            'password' => bcrypt('coding5'),
            'role_id' => 2,
            'image' => '/team/3.jpg',
            'created_at'=>now()->format('Y-m-d'),
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est,'
        ]);
        DB::table('users')->insert([
            'name' => 'Mimo',
            'email' => 'mimo@gmail.com',
            'password' => bcrypt('coding5'),
            'role_id' => 3,
            'image' => '/team/1.jpg',
            'created_at'=>now()->format('Y-m-d'),
            'description'=>'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est,'
        ]);
    }
}

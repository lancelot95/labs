<?php

use Illuminate\Database\Seeder;

class TeamsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'image' => 'img/team/1.jpg',
            'name' => 'Lancelot Goelen',
            'post' => 'Administrateur et éditeur d article',
        ]);
        DB::table('teams')->insert([
            'image' => 'img/team/2.jpg',
            'name' => 'Xavier Martinez',
            'post' => 'Editeur d article',
        ]);
        DB::table('teams')->insert([
            'image' => 'img/team/3.jpg',
            'name' => 'Alessio Italio',
            'post' => 'Editeur d article',
        ]);
     }

}

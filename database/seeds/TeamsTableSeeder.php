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
            'name' => 'Christinne Williams',
            'post' => 'Project Manager',
        ]);
        DB::table('teams')->insert([
            'image' => 'img/team/2.jpg',
            'name' => 'Marcus Willy',
            'post' => 'Junior developer',
        ]);
        DB::table('teams')->insert([
            'image' => 'img/team/3.jpg',
            'name' => 'Jean Williams',
            'post' => 'Digital designer',
        ]);
     }

}

<?php

use Illuminate\Database\Seeder;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('projects')->insert([
            'image' => 'img/card-1.jpg',
            'titre' => 'GET IN THE LAB',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        ]);
        DB::table('projects')->insert([
            'image' => 'img/card-2.jpg',
            'titre' => 'PROJECTS ONLINE',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        ]);
        DB::table('projects')->insert([
            'image' => 'img/card-3.jpg',
            'titre' => 'SMART MARKETING',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
        ]);
    }
}

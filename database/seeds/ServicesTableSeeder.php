<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('services')->insert([
            'titre' => 'GET IN THE LAB',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'logo' => 'flaticon-023-flask',
        ]);

        DB::table('services')->insert([
            'titre' => 'PROJECTS ONLINE',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'logo' => 'flaticon-011-compass',
        ]);

        DB::table('services')->insert([
            'titre' => 'SMART MARKETING',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'logo' => 'flaticon-037-idea',
        ]);
        DB::table('services')->insert([
            'titre' => 'SOCIAL MEDIA',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'logo' => 'flaticon-039-vector',
        ]);
        DB::table('services')->insert([
            'titre' => 'BRAINSTORMING',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'logo' => 'flaticon-036-brainstorming',
        ]);
        DB::table('services')->insert([
            'titre' => 'DOCUMENTED',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'logo' => 'flaticon-026-search',
        ]);
        DB::table('services')->insert([
            'titre' => 'RESPONSIVE',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'logo' => 'flaticon-018-laptop-1',
        ]);
        DB::table('services')->insert([
            'titre' => 'RETINA READY',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'logo' => 'flaticon-043-sketch',
        ]);
        DB::table('services')->insert([
            'titre' => 'ULTRA MODERN',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'logo' => 'flaticon-012-cube',
        ]);
    }
}

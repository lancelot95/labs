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
            'icon_id'=>1,
        ]);

        DB::table('services')->insert([
            'titre' => 'PROJECTS ONLINE',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icon_id'=>2,
        ]);

        DB::table('services')->insert([
            'titre' => 'SMART MARKETING',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icon_id'=>3,
        ]);
        DB::table('services')->insert([
            'titre' => 'SOCIAL MEDIA',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icon_id'=>4,
        ]);
        DB::table('services')->insert([
            'titre' => 'BRAINSTORMING',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icon_id'=>5,
        ]);
        DB::table('services')->insert([
            'titre' => 'DOCUMENTED',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icon_id'=>6,
        ]);
        DB::table('services')->insert([
            'titre' => 'RESPONSIVE',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icon_id'=>7,
        ]);
        DB::table('services')->insert([
            'titre' => 'RETINA READY',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icon_id'=>8,
        ]);
        DB::table('services')->insert([
            'titre' => 'ULTRA MODERN',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..',
            'icon_id'=>9,
        ]);
    }
}

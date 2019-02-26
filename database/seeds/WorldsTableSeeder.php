<?php

use Illuminate\Database\Seeder;

class WorldsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('worlds')->insert([
            'titre' => 'GET IN THE SALESFORCE',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'logo' => 'flaticon-002-caliper',
        ]);
        DB::table('worlds')->insert([
            'titre' => 'GET IN THE SMARTCITY',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'logo' => 'flaticon-019-coffee-cup',
        ]);
        DB::table('worlds')->insert([
            'titre' => 'GET IN THE CITYLONDON',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'logo' => 'flaticon-020-creativity',
        ]);
        DB::table('worlds')->insert([
            'titre' => 'GET IN THE INDIANTOURISM ',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'logo' => 'flaticon-020-creativity',
        ]);
        DB::table('worlds')->insert([
            'titre' => 'GET IN THE TRAVELTIBET',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'logo' => 'flaticon-020-creativity',
        ]);
        DB::table('worlds')->insert([
            'titre' => 'GET IN THE LAB',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'logo' => 'flaticon-020-creativity',
        ]);
    }
}

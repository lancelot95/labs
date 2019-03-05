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
            'icon_id'=>45,
        ]);
        DB::table('worlds')->insert([
            'titre' => 'GET IN THE SMARTCITY',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icon_id'=>46,
        ]);
        DB::table('worlds')->insert([
            'titre' => 'GET IN THE CITYLONDON',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icon_id'=>47,
        ]);
        DB::table('worlds')->insert([
            'titre' => 'GET IN THE INDIANTOURISM ',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icon_id'=>48,
        ]);
        DB::table('worlds')->insert([
            'titre' => 'GET IN THE TRAVELTIBET',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icon_id'=>49,
        ]);
        DB::table('worlds')->insert([
            'titre' => 'GET IN THE LAB',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'icon_id'=>50,
        ]);
    }
}

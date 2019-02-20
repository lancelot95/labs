<?php

use Illuminate\Database\Seeder;

class WorldrightsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('worldrights')->insert([
            'titre' => 'GET IN THE LAB',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'logo' => 'flaticon-037-idea',
        ]);
        DB::table('worldrights')->insert([
            'titre' => 'GET IN THE LAB',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'logo' => 'flaticon-025-imagination',
        ]);
        DB::table('worldrights')->insert([
            'titre' => 'GET IN THE LAB',
            'texte' => 'Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec',
            'logo' => 'flaticon-008-team',
        ]);
    }
}

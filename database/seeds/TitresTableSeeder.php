<?php

use Illuminate\Database\Seeder;

class TitresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('titres')->insert([
            'titre'=>'Catégories'
        ]);

        DB::table('titres')->insert([
            'titre'=>'Instagram'
        ]);

        DB::table('titres')->insert([
            'titre'=>'Tags'
        ]);

        DB::table('titres')->insert([
            'titre'=>'Quote'
        ]);


    }
}

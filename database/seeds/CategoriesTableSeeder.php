<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'theme'=>'Start-up'
        ]);
        DB::table('categories')->insert([
            'theme'=>'Technologies'
        ]);
        DB::table('categories')->insert([
            'theme'=>'International'
        ]);
        DB::table('categories')->insert([
            'theme'=>'Bourse'
        ]);
      
    }
}

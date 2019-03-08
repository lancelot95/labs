<?php

use Illuminate\Database\Seeder;

class ClientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clients')->insert([
           
            'photo' => '/avatar/03.jpg',
            'nom' => 'Michael Smith',
            'fonction' => 'CEO compay',
        ]);
        DB::table('clients')->insert([
           
            'photo' => '/avatar/02.jpg',
            'nom' => 'Julie Foulon',
            'fonction' => 'CEO compay',
        ]);
        DB::table('clients')->insert([
            
            'photo' => '/avatar/01.jpg',
            'nom' => 'Khalid Dadi',
            'fonction' => 'CEO compay',
        ]);
        DB::table('clients')->insert([
           
            'photo' => '/avatar/02.jpg',
            'nom' => 'Sami Smith',
            'fonction' => 'Coach',
        ]);
        DB::table('clients')->insert([
          
            'photo' => '/avatar/01.jpg',
            'nom' => 'Marie Boulanger',
            'fonction' => 'CEO compay',
        ]);
        DB::table('clients')->insert([
           
            'photo' => '/avatar/03.jpg',
            'nom' => 'Zack Smith',
            'fonction' => 'Coach',
        ]);
    }
}

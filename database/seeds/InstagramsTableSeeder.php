<?php

use Illuminate\Database\Seeder;

class InstagramsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        DB::table('instagrams')->insert([
            'image'=>'img/instagram/1.jpg'
        ]);
        DB::table('instagrams')->insert([
            'image'=>'img/instagram/2.jpg'
        ]);
        DB::table('instagrams')->insert([
            'image'=>'img/instagram/3.jpg'
        ]);
        DB::table('instagrams')->insert([
            'image'=>'img/instagram/4.jpg'
        ]);
        DB::table('instagrams')->insert([
            'image'=>'img/instagram/5.jpg'
        ]);
        DB::table('instagrams')->insert([
            'image'=>'img/instagram/6.jpg'
        ]);
    }
}

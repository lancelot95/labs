<?php

use Illuminate\Database\Seeder;

class CommentairesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([
            'name'=>'Michael Smith',
            'message'=>'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
        ]);
        DB::table('commentaires')->insert([
            'name'=>'Marie Boulangier',
            'message'=>'Vivamus in urna eu enim porttitor consequat. Proin vitae pulvinar libero. Proin ut hendrerit metus. Aliquam erat volutpat. Donec fermen tum convallis ante eget tristique.',
        ]);
        

    }
}

<?php

use Illuminate\Database\Seeder;

class AlessiosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alessios')->insert([
            'article_id'=> 1,
            'tag_id'=>2
        ]);
        DB::table('alessios')->insert([
            'article_id'=> 2,
            'tag_id'=>1
        ]);
        DB::table('alessios')->insert([
            'article_id'=> 3,
            'tag_id'=>5
        ]);
    }
}

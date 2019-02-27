<?php

use Illuminate\Database\Seeder;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            'hashtags'=>'Technologies',
        ]);
        DB::table('tags')->insert([
            'hashtags'=>'Freelance',
        ]);
        DB::table('tags')->insert([
            'hashtags'=>'Design',
        ]);DB::table('tags')->insert([
            'hashtags'=>'Vr',
        ]);
        DB::table('tags')->insert([
            'hashtags'=>'code',
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use App\Carousel;
class CarouselsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        Carousel::create([
            'image_url' => 'img/01.jpg',
            
        ]);
        Carousel::create([
            'image_url' => 'img/02.jpg',
            
        ]);

    }
}

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
             'image_url' => '/card-1.jpg',
            
            
            
        ]);
        Carousel::create([
            'image_url' => '/card-2.jpg',
            
        ]);
        Carousel::create([
            'image_url' => '/card-3.jpg',
            
        ]);

    }
}

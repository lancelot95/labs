<?php

use Illuminate\Database\Seeder;

class TestimonialsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => 'img/avatar/01.jpg',
            'nom' => 'Michael Smith',
            'fonction' => 'CEO compay',
            
            
        ]);
        DB::table('testimonials')->insert([
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => 'img/avatar/02.jpg',
            'nom' => 'Julie Foulon',
            'fonction' => 'CO-FONDATRICE',
            
            
        ]);
        DB::table('testimonials')->insert([
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => 'img/avatar/03.jpg',
            'nom' => 'Steve Jobs',
            'fonction' => 'CEO Apple',
            
            
        ]);
        DB::table('testimonials')->insert([
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => 'img/avatar/01.jpg',
            'nom' => 'Mark Zuckerberg',
            'fonction' => 'CEO Facebook',
            
            
        ]);
        DB::table('testimonials')->insert([
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => 'img/avatar/02.jpg',
            'nom' => 'Alexiane Wyns',
            'fonction' => 'CEO cabinet Alexiane Wyns',
            
            
        ]);
        DB::table('testimonials')->insert([
            'texte' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.',
            'photo' => 'img/avatar/03.jpg',
            'nom' => 'Michael Smith',
            'fonction' => 'CEO compay',
            
            
        ]);
    }
}

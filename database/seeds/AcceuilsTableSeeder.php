<?php

use Illuminate\Database\Seeder;

class AcceuilsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('acceuils')->insert([
            'logonavbar' =>'img/logo.png',
            'biglogo' =>'img/big-logo.png',
            'imagetestimonial'=>'../img/test-man.png',
            'titrecarousel' => 'Get your freebie template now!',
            'titrelabsworld'=> 'GET IN  ',
            'titrevertworld'=>'THE LAB',
            'titreword' => 'AND DISCOVER THE WORLD',
            'textelabsworld'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor ',
            'titreclient' => 'WHAT OUR CLIENTS SAY',
            'titreservice'=> 'AND SEE THE SERVICES',
            'titreteam' => 'AND MEET THE TEAM',
            'titrestandout' =>'Are you ready to stand out?',
            'textestandout'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.' ,
            'newsletter'=>'Newsletter',
                       
            
        ]);
      
    }
}

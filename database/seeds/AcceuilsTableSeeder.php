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
            'logonavbar' =>'logo1',
            'logocarousel'=>'logo2',
            'titrecarousel' => 'Get your freebie template now!',
            'titrelabsworld'=> 'GET IN THE LAB AND DISCOVER THE WORLD',
            'textelabsworld'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequat ante ac congue. Quisque porttitor ',
            'titreclient' => 'WHAT OUR CLIENTS SAY',
            'titreservice'=> 'GET IN THE LAB AND SEE THE SERVICES',
            'titreteam' => 'GET IN THE LAB AND MEET THE TEAM',
            'titrestandout' =>'Are you ready to stand out?',
            'textestandout'=> 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est.' ,
            'contactus'=> 'CONTACT US',
            'texte'=> 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.' ,
            'mainoffice'=> 'Main Office',
            'addresse'=> ' C/ Libertad, 34 
            05200 Arévalo',
            'phone'=> '0034 37483 2445 322',
            'email'=> 'ello@company.com',
           
            
            
            
          
            
            
        ]);
      
    }
}

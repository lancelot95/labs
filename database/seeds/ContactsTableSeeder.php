<?php

use Illuminate\Database\Seeder;

class ContactsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contacts')->insert([
            'contactus'=> 'CONTACT US'    
        ]);

        DB::table('contacts')->insert([
            'texte'=> 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.' 
        ]);

        DB::table('contacts')->insert([
             'mainoffice'=> 'Main Office'
        ]);

        DB::table('contacts')->insert([
            'addresse'=> ' C/ Libertad, 34 05200 Arévalo'
        ]);

        DB::table('contacts')->insert([
            'phone'=> '0034 37483 2445 322',
        ]);   
        
        DB::table('contacts')->insert([
            'email'=> 'ello@company.com',
        ]);   
    }
}

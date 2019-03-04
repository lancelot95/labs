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
            'contactus'=> 'CONTACT US' ,
            'texte'=> 'Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.' ,
            'mainoffice'=> 'Main Office',
            'addresse'=> ' C/ Libertad, 34 05200 Arévalo',
            'phone'=> '0034 37483 2445 322',
            'email'=> 'ello@company.com',

        ]);

      
        
       
    }
}

<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UsersTableSeeder::class);
         $this->call(CarouselsTableSeeder::class);
         $this->call(ServicesTableSeeder::class);
         $this->call(AcceuilsTableSeeder::class);
         
    }
}

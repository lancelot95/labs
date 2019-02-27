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
         $this->call(TestimonialsTableSeeder::class);
         $this->call(TeamsTableSeeder::class);
         $this->call(ProjectsTableSeeder::class);
         $this->call(WorldsTableSeeder::class);
         $this->call(CarouselsTableSeeder::class);
         $this->call(ContactsTableSeeder::class);
         $this->call(InstagramsTableSeeder::class);
         $this->call(TitresTableSeeder::class);
         $this->call(ArticlesTableSeeder::class);
         $this->call(CategoriesTableSeeder::class);
         $this->call(TagsTableSeeder::class);
         $this->call(AlessiosTableSeeder::class);
    }
}

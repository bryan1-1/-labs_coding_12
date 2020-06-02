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
         $this->call(NavigatorSeeder::class);
         $this->call(PresentationSeeder::class);
         $this->call(TestimonialTitleSeeder::class);
         $this->call(IconSeeder::class);
         $this->call(TeamTitleSeeder::class);
         $this->call(ReadySeeder::class);
         $this->call(ContactSeeder::class);
         $this->call(PrimeSeeder::class);
         $this->call(TagSeeder::class);
         $this->call(MapSeeder::class);
         $this->call(RoleSeeder::class);
    }
}

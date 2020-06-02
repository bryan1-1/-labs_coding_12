<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PrimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('primes')->insert([
            "title"=>"Get in (the Lab) and discover the world",
            "button"=>"Browse",
            ]);
    }
    }


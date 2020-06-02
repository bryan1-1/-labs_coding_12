<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReadySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('readies')->insert([
            "title"=>"Are you ready to stand out",
            "subtitle"=>"Lorem ipsum for the good will",
            "button"=>"Browse",
            ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamTitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('team_titles')->insert([
            "title"=>"get in (the lab) and meet the team",
            
            ]);
    }
}

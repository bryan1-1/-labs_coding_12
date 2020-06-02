<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NavigatorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('navigators')->insert([
            "link"=>"/",
            "name"=>"home"
            
        ]);
        DB::table('navigators')->insert([
            "link"=>"/services",
            "name"=>"service"
            
        ]);
        DB::table('navigators')->insert([
            "link"=>"/blogs",
            "name"=>"blog"
            
        ]);
        DB::table('navigators')->insert([
            "link"=>"/contacts",
            "name"=>"contact"
            
            ]);
    }
}

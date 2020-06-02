<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IconSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('icons')->insert([
            "name"=>"flaticon-023-flask"
        ]);
        DB::table('icons')->insert([
            "name"=>"flaticon-011-compass"
        ]);
        DB::table('icons')->insert([
            "name"=>"flaticon-037-idea"
        ]);
        DB::table('icons')->insert([
            "name"=>"flaticon-039-vector"
        ]);
        DB::table('icons')->insert([
            "name"=>"flaticon-036-brainstorming"
        ]);
        DB::table('icons')->insert([
            "name"=>"flaticon-026-search"
        ]);
        DB::table('icons')->insert([
            "name"=>"flaticon-018-laptop-1"
        ]);
        DB::table('icons')->insert([
            "name"=>"flaticon-043-sketch"
        ]);
        DB::table('icons')->insert([
            "name"=>"flaticon-012-cube"
        ]);
    }
}

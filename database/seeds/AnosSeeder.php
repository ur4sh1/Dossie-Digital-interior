<?php

use Illuminate\Database\Seeder;

class AnosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('anos')->insert([
            ["ano"=>2001],
            ["ano"=>2002],
            ["ano"=>2003],
            ["ano"=>2004],
            ["ano"=>2005],
            ["ano"=>2006],
            ["ano"=>2007],
            ["ano"=>2008],
            ["ano"=>2009],
            ["ano"=>2010],
            ["ano"=>2011],
            ["ano"=>2012],
            ["ano"=>2013],
            ["ano"=>2014],
            ["ano"=>2015],
            ["ano"=>2016],
            ["ano"=>2017],
            ["ano"=>2018],
            ["ano"=>2019],
            ["ano"=>2020],
            ["ano"=>2021],
            ["ano"=>2022],
            ["ano"=>2023],
            ["ano"=>2024],
            ["ano"=>2025],
            ["ano"=>2026],
            ["ano"=>2027],
            ["ano"=>2028],
            ["ano"=>2029],
            ["ano"=>2030]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class DoencasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doencas')->insert([
            ['nome'=>'Malária'],
            ['nome'=>'Dengue'],
            ['nome'=>'Tuberculose'],
            ['nome'=>'Hanseníase'],
            ['nome'=>'AIDS'],
            ['nome'=>'Câncer de Colo'],
            ['nome'=>'Câncer de Mama'],
            ['nome'=>'Óbito Materno'],
            ['nome'=>'Óbito Infantil'],
            ['nome'=>'Sarampo']
        ]);
    }
}

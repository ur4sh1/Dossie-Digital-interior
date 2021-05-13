<?php

use Illuminate\Database\Seeder;

class ImunobiologicaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('imunobiologicas')->insert([
            ['nome'=>'BCG'],
            ['nome'=>'FEBRE AMARELA'],
            ['nome'=>'PENTAVALENTE'],
            ['nome'=>'PNEUMOCÓCICA'],
            ['nome'=>'POLIOMIELITE'],
            ['nome'=>'TRÍPLICE VIRAL D1'],
            ['nome'=>'TRÍPLICE VIRAL D2']
        ]);
    }
}

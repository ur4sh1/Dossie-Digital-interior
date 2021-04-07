<?php

use Illuminate\Database\Seeder;

class InternacaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('internacaos')->insert([
            ['hospital_id'=>1,'media_dia'=>7,'media_mes'=>110],
            ['hospital_id'=>2,'media_dia'=>3,'media_mes'=>30]
        ]);
    }
}

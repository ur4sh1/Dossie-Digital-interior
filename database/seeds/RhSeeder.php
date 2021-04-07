<?php

use Illuminate\Database\Seeder;

class RhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rhs')->insert([
            ['hospital_id'=>1,'rh_categoria_id'=>1,'susam_estatutario'=>11,'susam_contrato'=>2,'prefeitura'=>5],
            ['hospital_id'=>1,'rh_categoria_id'=>2,'susam_estatutario'=>5,'susam_contrato'=>0,'prefeitura'=>0],
            ['hospital_id'=>1,'rh_categoria_id'=>3,'susam_estatutario'=>0,'susam_contrato'=>0,'prefeitura'=>0],
            ['hospital_id'=>1,'rh_categoria_id'=>4,'susam_estatutario'=>55,'susam_contrato'=>0,'prefeitura'=>21],
            ['hospital_id'=>1,'rh_categoria_id'=>5,'susam_estatutario'=>29,'susam_contrato'=>0,'prefeitura'=>96],
        ]);
    }
}

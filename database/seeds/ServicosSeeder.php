<?php

use Illuminate\Database\Seeder;

class ServicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicos')->insert([
            ['hospital_id'=>1,'tipo_servicos_id'=>1,'ativo'=>true],
            ['hospital_id'=>1,'tipo_servicos_id'=>2,'ativo'=>false],
            ['hospital_id'=>1,'tipo_servicos_id'=>3,'ativo'=>false],
            ['hospital_id'=>1,'tipo_servicos_id'=>4,'ativo'=>false],
            ['hospital_id'=>1,'tipo_servicos_id'=>5,'ativo'=>true],
            ['hospital_id'=>1,'tipo_servicos_id'=>6,'ativo'=>false],
            ['hospital_id'=>1,'tipo_servicos_id'=>7,'ativo'=>true],
            ['hospital_id'=>1,'tipo_servicos_id'=>8,'ativo'=>true],
            ['hospital_id'=>1,'tipo_servicos_id'=>9,'ativo'=>true],
            ['hospital_id'=>1,'tipo_servicos_id'=>10,'ativo'=>true],
            ['hospital_id'=>1,'tipo_servicos_id'=>11,'ativo'=>true],
            ['hospital_id'=>1,'tipo_servicos_id'=>12,'ativo'=>false],
            ['hospital_id'=>1,'tipo_servicos_id'=>13,'ativo'=>true],
            ['hospital_id'=>1,'tipo_servicos_id'=>14,'ativo'=>false],
            ['hospital_id'=>1,'tipo_servicos_id'=>15,'ativo'=>false],
            ['hospital_id'=>1,'tipo_servicos_id'=>16,'ativo'=>false]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class EquipamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipamentos')->insert([
            ['hospital_id'=>1,'tipo_equipamentos_id'=>1,'existente'=>1,'funcional'=>1],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>2,'existente'=>1,'funcional'=>1],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>3,'existente'=>1,'funcional'=>0],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>4,'existente'=>2,'funcional'=>2],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>5,'existente'=>1,'funcional'=>1],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>6,'existente'=>3,'funcional'=>2],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>7,'existente'=>1,'funcional'=>1],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>8,'existente'=>1,'funcional'=>1],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>9,'existente'=>0,'funcional'=>0],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>10,'existente'=>1,'funcional'=>1],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>11,'existente'=>2,'funcional'=>1],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>12,'existente'=>1,'funcional'=>1],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>13,'existente'=>1,'funcional'=>0],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>14,'existente'=>2,'funcional'=>1],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>15,'existente'=>2,'funcional'=>2],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>16,'existente'=>0,'funcional'=>0],
            ['hospital_id'=>1,'tipo_equipamentos_id'=>17,'existente'=>2,'funcional'=>2]
        ]);
    }
}

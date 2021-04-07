<?php

use Illuminate\Database\Seeder;

class VeiculosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('veiculos')->insert([
            ['hospital_id'=>1,'administrativo_existente'=>1,'administrativo_funcional'=>1,'ambulancia_terrestre_existente'=>3,'ambulancia_terrestre_funcional'=>2,'ambulancia_fluvial_existente'=>0,'ambulancia_fluvial_funcional'=>0],
            ['hospital_id'=>2,'administrativo_existente'=>1,'administrativo_funcional'=>1,'ambulancia_terrestre_existente'=>1,'ambulancia_terrestre_funcional'=>1,'ambulancia_fluvial_existente'=>1,'ambulancia_fluvial_funcional'=>0]
        ]);
    }
}

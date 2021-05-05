<?php

use Illuminate\Database\Seeder;

class HospitalsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hospitals')->insert([
            ['nome'=>'HOSPITAL EDUARDO BRAGA','municipio_id'=>5],
            ['nome'=>'UNIDADE HOPITALAR SÃO SEBASTIÃO','municipio_id'=>6],
            ['nome'=>'HOSPITAL DR. DEODATO DE MIRANDA LEÃO','municipio_id'=>7]
        ]);
    }
}

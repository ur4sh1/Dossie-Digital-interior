<?php

use Illuminate\Database\Seeder;

class CoberturaVacinalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cobertura_vacinals')->insert([
           ['municipio_id'=>5,'ano_id'=>18,'imunobiologica_id'=>1,'porcentagem'=>'123','fonte'=>''],
           ['municipio_id'=>5,'ano_id'=>18,'imunobiologica_id'=>2,'porcentagem'=>'98','fonte'=>''],
           ['municipio_id'=>5,'ano_id'=>18,'imunobiologica_id'=>3,'porcentagem'=>'118','fonte'=>''],
           ['municipio_id'=>5,'ano_id'=>18,'imunobiologica_id'=>4,'porcentagem'=>'121','fonte'=>''],
           ['municipio_id'=>5,'ano_id'=>18,'imunobiologica_id'=>5,'porcentagem'=>'119','fonte'=>''],
           ['municipio_id'=>5,'ano_id'=>18,'imunobiologica_id'=>6,'porcentagem'=>'109','fonte'=>''],
           ['municipio_id'=>5,'ano_id'=>18,'imunobiologica_id'=>7,'porcentagem'=>'107','fonte'=>''],

            ['municipio_id'=>5,'ano_id'=>19,'imunobiologica_id'=>1,'porcentagem'=>'94.9','fonte'=>''],
            ['municipio_id'=>5,'ano_id'=>19,'imunobiologica_id'=>2,'porcentagem'=>'91.9','fonte'=>''],
            ['municipio_id'=>5,'ano_id'=>19,'imunobiologica_id'=>3,'porcentagem'=>'102.6','fonte'=>''],
            ['municipio_id'=>5,'ano_id'=>19,'imunobiologica_id'=>4,'porcentagem'=>'97','fonte'=>''],
            ['municipio_id'=>5,'ano_id'=>19,'imunobiologica_id'=>5,'porcentagem'=>'106','fonte'=>''],
            ['municipio_id'=>5,'ano_id'=>19,'imunobiologica_id'=>6,'porcentagem'=>'107.7','fonte'=>''],
            ['municipio_id'=>5,'ano_id'=>19,'imunobiologica_id'=>7,'porcentagem'=>'151.1','fonte'=>''],

            ['municipio_id'=>5,'ano_id'=>20,'imunobiologica_id'=>1,'porcentagem'=>'38.3','fonte'=>'DATA SUS SET/2020'],
            ['municipio_id'=>5,'ano_id'=>20,'imunobiologica_id'=>2,'porcentagem'=>'62.9','fonte'=>'DATA SUS SET/2020'],
            ['municipio_id'=>5,'ano_id'=>20,'imunobiologica_id'=>3,'porcentagem'=>'81.7','fonte'=>'DATA SUS SET/2020'],
            ['municipio_id'=>5,'ano_id'=>20,'imunobiologica_id'=>4,'porcentagem'=>'84','fonte'=>'DATA SUS SET/2020'],
            ['municipio_id'=>5,'ano_id'=>20,'imunobiologica_id'=>5,'porcentagem'=>'72.6','fonte'=>'DATA SUS SET/2020'],
            ['municipio_id'=>5,'ano_id'=>20,'imunobiologica_id'=>6,'porcentagem'=>'68.6','fonte'=>'DATA SUS SET/2020'],
            ['municipio_id'=>5,'ano_id'=>20,'imunobiologica_id'=>7,'porcentagem'=>'63.4','fonte'=>'DATA SUS SET/2020'],
        ]);
    }
}

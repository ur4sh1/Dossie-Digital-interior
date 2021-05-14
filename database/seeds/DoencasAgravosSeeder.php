<?php

use Illuminate\Database\Seeder;

class DoencasAgravosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doencas_agravos')->insert([
            ['municipio_id'=>5,'doenca_id'=>1,'ano_id'=>18,'casos'=>59,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>2,'ano_id'=>18,'casos'=>1,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>3,'ano_id'=>18,'casos'=>1,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>4,'ano_id'=>18,'casos'=>12,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>5,'ano_id'=>18,'casos'=>1,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>6,'ano_id'=>18,'casos'=>590,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>7,'ano_id'=>18,'casos'=>10,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>8,'ano_id'=>18,'casos'=>0,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>9,'ano_id'=>18,'casos'=>2,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>10,'ano_id'=>18,'casos'=>0,'fonte'=>''],

            ['municipio_id'=>5,'doenca_id'=>1,'ano_id'=>19,'casos'=>217,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>2,'ano_id'=>19,'casos'=>1,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>3,'ano_id'=>19,'casos'=>1,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>4,'ano_id'=>19,'casos'=>1,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>5,'ano_id'=>19,'casos'=>0,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>6,'ano_id'=>19,'casos'=>0,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>7,'ano_id'=>19,'casos'=>0,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>8,'ano_id'=>19,'casos'=>0,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>9,'ano_id'=>19,'casos'=>5,'fonte'=>''],
            ['municipio_id'=>5,'doenca_id'=>10,'ano_id'=>19,'casos'=>0,'fonte'=>''],

            ['municipio_id'=>5,'doenca_id'=>1,'ano_id'=>20,'casos'=>118,'fonte'=>'E-SIG/FVS/2020'],
            ['municipio_id'=>5,'doenca_id'=>2,'ano_id'=>20,'casos'=>0,'fonte'=>'E-SIG/FVS/2020'],
            ['municipio_id'=>5,'doenca_id'=>3,'ano_id'=>20,'casos'=>0,'fonte'=>'E-SIG/FVS/2020'],
            ['municipio_id'=>5,'doenca_id'=>4,'ano_id'=>20,'casos'=>1,'fonte'=>'E-SIG/FVS/2020'],
            ['municipio_id'=>5,'doenca_id'=>5,'ano_id'=>20,'casos'=>3,'fonte'=>'E-SIG/FVS/2020'],
            ['municipio_id'=>5,'doenca_id'=>6,'ano_id'=>20,'casos'=>244,'fonte'=>'E-SIG/FVS/2020'],
            ['municipio_id'=>5,'doenca_id'=>7,'ano_id'=>20,'casos'=>0,'fonte'=>'E-SIG/FVS/2020'],
            ['municipio_id'=>5,'doenca_id'=>8,'ano_id'=>20,'casos'=>8,'fonte'=>'E-SIG/FVS/2020'],
            ['municipio_id'=>5,'doenca_id'=>9,'ano_id'=>20,'casos'=>1,'fonte'=>'E-SIG/FVS/2020'],
            ['municipio_id'=>5,'doenca_id'=>10,'ano_id'=>20,'casos'=>3,'fonte'=>'E-SIG/FVS/2020']
        ]);

    }
}

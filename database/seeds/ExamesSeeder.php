<?php

use Illuminate\Database\Seeder;

class ExamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exames')->insert([
            ['ano_id'=>18,'hospital_id'=>1,'mamografia'=>407,'ultrassonografia'=>940,'raio_x'=>3.151,'eletrocardiograma'=>391],
            ['ano_id'=>19,'hospital_id'=>1,'mamografia'=>116,'ultrassonografia'=>391,'raio_x'=>2.654,'eletrocardiograma'=>175],
            ['ano_id'=>20,'hospital_id'=>1,'mamografia'=>30,'ultrassonografia'=>17,'raio_x'=>175,'eletrocardiograma'=>19],
            ['ano_id'=>5,'hospital_id'=>2,'mamografia'=>60,'ultrassonografia'=>176,'raio_x'=>582,'eletrocardiograma'=>135],
        ]);
    }
}

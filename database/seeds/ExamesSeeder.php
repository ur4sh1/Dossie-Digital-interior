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
            ['ano_id'=>5,'hospital_id'=>1,'mamografia'=>30,'ultrassonografia'=>17,'raio_x'=>175,'eletrocardiograma'=>19],
            ['ano_id'=>5,'hospital_id'=>2,'mamografia'=>60,'ultrassonografia'=>176,'raio_x'=>582,'eletrocardiograma'=>135]
        ]);
    }
}

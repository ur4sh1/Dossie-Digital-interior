<?php

use Illuminate\Database\Seeder;

class RecursoEstadualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recurso_estaduals')->insert([
            ['municipio_id'=>5,'item_id'=>1,'valor'=>46212.64,'ano_id'=>18],
            ['municipio_id'=>5,'item_id'=>3,'valor'=>2070697.21,'ano_id'=>18],
            ['municipio_id'=>5,'item_id'=>6,'valor'=>149184.00,'ano_id'=>18],

            ['municipio_id'=>5,'item_id'=>1,'valor'=>189078.22,'ano_id'=>19],
            ['municipio_id'=>5,'item_id'=>2,'valor'=>194229.98,'ano_id'=>19],
            ['municipio_id'=>5,'item_id'=>3,'valor'=>3241014.17,'ano_id'=>19],
            ['municipio_id'=>5,'item_id'=>6,'valor'=>75192.00,'ano_id'=>19],

            ['municipio_id'=>5,'item_id'=>1,'valor'=>168459.92,'ano_id'=>20],
            ['municipio_id'=>5,'item_id'=>2,'valor'=>293390.10,'ano_id'=>20],
            ['municipio_id'=>5,'item_id'=>3,'valor'=>2309522.31,'ano_id'=>20],
            ['municipio_id'=>5,'item_id'=>4,'valor'=>662148.87,'ano_id'=>20],
            ['municipio_id'=>5,'item_id'=>5,'valor'=>6949.22,'ano_id'=>20],
            ['municipio_id'=>5,'item_id'=>6,'valor'=>18787.00,'ano_id'=>20],
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecursoFundoEstadualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recurso_fundo_estaduals')->insert([
            ['municipio_id'=>5,'item_id'=>1,'valor'=>1156387.75,'ano_id'=>19],
            ['municipio_id'=>5,'item_id'=>1,'valor'=>927729.60,'ano_id'=>20]
            ]);
    }
}

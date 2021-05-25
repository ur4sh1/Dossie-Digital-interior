<?php

use Illuminate\Database\Seeder;

class ItemRecursoFundoEstadualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_recurso_fundo_estaduals')->insert([
            ['descricao'=>'FTI (enfrentamento a CONVID-19)']
        ]);
    }
}

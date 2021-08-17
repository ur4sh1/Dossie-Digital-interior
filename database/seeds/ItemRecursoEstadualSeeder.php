<?php

use Illuminate\Database\Seeder;

class ItemRecursoEstadualSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_recurso_estaduals')->insert([
            ['descricao'=>'CONTAS PÚBLICAS - ENERGIA '],
            ['descricao'=>'EQUIPAMENTOS (DIGITALIZADOR + DIVERSOS)'],
            ['descricao'=>'FOLHA DE PAGAMENTO  '],
            ['descricao'=>'MEDICAMENTOS E PPS (CEMA)'],
            ['descricao'=>'OXIGÊNIO (DELOG)'],
            ['descricao'=>'UTI AÉREA - REMOÇOES']
        ]);
    }
}

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
            ['descricao'=>'CONTAS PÚBLICAS - ENERGIA  (JANEIRO A AGOSTO)'],
            ['descricao'=>'EQUIPAMENTOS (DIGITALIZADOR + DIVERSOS)'],
            ['descricao'=>'FOLHA DE PAGAMENTO  (JAN/OUT)'],
            ['descricao'=>'MEDICAMENTOS E PPS (CEMA JAN/SET)'],
            ['descricao'=>'OXIGÊNIO (DELOG) (JAN/SET)'],
            ['descricao'=>'UTI AÉREA - REMOÇOES (JAN/JUN)']
        ]);
    }
}

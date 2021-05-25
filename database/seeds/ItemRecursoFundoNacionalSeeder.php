<?php

use Illuminate\Database\Seeder;

class ItemRecursoFundoNacionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('item_recurso_fundo_nacionals')->insert([
            ['descricao'=>'Assistência Farmacêutica'],
            ['descricao'=>'Atenção Básica'],
            ['descricao'=>'Atenção a Média e Alta Complexidade - MAC(HOPS+CAPS)'],
            ['descricao'=>'Vigilância em Saúde'],
            ['descricao'=>'Atenção Especializada'],
        ]);
    }
}

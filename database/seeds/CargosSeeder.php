<?php

use Illuminate\Database\Seeder;

class CargosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cargos')->insert([
           ["nome"=>'Prefeito(a)'],
           ["nome"=>'Vice Prefeito(a)'],
           ["nome"=>'Vereador(a)'],
           ["nome"=>'Secretário(a) de Saúde'],
           ["nome"=>'Coordernador(a)  de Atenção Básica'],
           ["nome"=>'Presidente do Conselho Municipal de Saúde'],
           ["nome"=>'Coordernador(a) de Vigilância em Saúde'],
           ["nome"=>'Coordernador(a)  de Vigilância Sanitária'],
           ["nome"=>'Coordernador(a)  de Vigilância Ambiental'],
           ["nome"=>'Coordernador(a)  de Zoonoses'],
           ["nome"=>'Gerente de Endemias'],
           ["nome"=>'Diretor(a) Geral (Hospital Regional)'],
           ["nome"=>'Gerente Administrativo e Financeiro (Hospital Regional)'],
           ["nome"=>'Gerente de Enfermagem (Hospital Regional)'],
           ["nome"=>'Diretor(a) Clínico (Hospital Regional)']
        ]);
    }
}

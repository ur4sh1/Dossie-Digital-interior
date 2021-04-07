<?php

use Illuminate\Database\Seeder;

class RhCategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rh_categorias')->insert([
            ['nome'=>'Administrativo'],
            ['nome'=>'Cliníco Geral'],
            ['nome'=>'Médico Especialista'],
            ['nome'=>'Profissionais de Saúde'],
            ['nome'=>'Demais Profissionais']
        ]);
    }
}

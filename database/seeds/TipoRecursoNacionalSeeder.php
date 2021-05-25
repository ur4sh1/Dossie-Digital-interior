<?php

use Illuminate\Database\Seeder;

class TipoRecursoNacionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_recurso_nacionals')->insert([
            ['nome'=>'CUSTEIO'],
            ['nome'=>'INVESTIMENTO']
        ]);
    }
}

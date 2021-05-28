<?php

use Illuminate\Database\Seeder;

class RecursoFundoNacionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recurso_fundo_nacionals')->insert([
            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>1,'tipo_recurso_nacional_id'=>1,'valor'=>117353.01,'ano_id'=>18],
            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>2,'tipo_recurso_nacional_id'=>1,'valor'=>4419817.98,'ano_id'=>18],
            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>3,'tipo_recurso_nacional_id'=>1,'valor'=>1067916.05,'ano_id'=>18],
            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>4,'tipo_recurso_nacional_id'=>1,'valor'=>453848.91,'ano_id'=>18],

            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>2,'tipo_recurso_nacional_id'=>2,'valor'=>660520.00,'ano_id'=>18],
            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>5,'tipo_recurso_nacional_id'=>2,'valor'=>438500.00,'ano_id'=>18],

            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>1,'tipo_recurso_nacional_id'=>1,'valor'=>118468.57,'ano_id'=>19],
            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>2,'tipo_recurso_nacional_id'=>1,'valor'=>5305069.60,'ano_id'=>19],
            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>3,'tipo_recurso_nacional_id'=>1,'valor'=>1636136.42,'ano_id'=>19],
            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>4,'tipo_recurso_nacional_id'=>1,'valor'=>432251.06,'ano_id'=>19],

            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>2,'tipo_recurso_nacional_id'=>2,'valor'=>135600.00,'ano_id'=>19],
            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>5,'tipo_recurso_nacional_id'=>2,'valor'=>228500.00,'ano_id'=>19],

            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>1,'tipo_recurso_nacional_id'=>1,'valor'=>108949.50,'ano_id'=>20],
            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>2,'tipo_recurso_nacional_id'=>1,'valor'=>4030634.63,'ano_id'=>20],
            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>3,'tipo_recurso_nacional_id'=>1,'valor'=>1363210.70,'ano_id'=>20],
            ['municipio_id'=>5,'item_recurso_fundo_nacional_id'=>4,'tipo_recurso_nacional_id'=>1,'valor'=>342564.61,'ano_id'=>20],

        ]);
    }
}

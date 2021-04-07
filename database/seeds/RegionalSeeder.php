<?php

use Illuminate\Database\Seeder;

class RegionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('regionals')->insert([
            ["nome"=>"Alto Solimões","sigla"=>"AS","estado_id"=>4],
            ["nome"=>"Médio Amazonas","sigla"=>"MA","estado_id"=>4],
            ["nome"=>"Rio Negro e Solimões","sigla"=>"RNS","estado_id"=>4],
            ["nome"=>"Manaus, Entorno e Alto Rio Negro","sigla"=>"EntARN","estado_id"=>4],
            ["nome"=>"Baixo Amazonas","sigla"=>"BA","estado_id"=>4],
            ["nome"=>"Purus","sigla"=>"P","estado_id"=>4],
            ["nome"=>"Triângulo","sigla"=>"T","estado_id"=>4],
            ["nome"=>"Rio Madeira","sigla"=>"RM","estado_id"=>4],
            ["nome"=>"Juruá","sigla"=>"J","estado_id"=>4]
        ]);
    }
}

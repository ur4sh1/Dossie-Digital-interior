<?php

use Illuminate\Database\Seeder;

class ProgramaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('programas')->insert([
           ["municipio_id"=>5,"descricao"=>"Equipes de Saúde da Família","sigla"=>"ESF","teto"=>"11","cred"=>9,"implant"=>"9","repasse"=>"78453.00",'ano_id'=>19],
           ["municipio_id"=>5,"descricao"=>"Equipes de Saúde da Família Ribeirinha","sigla"=>"ESFR","teto"=>"0","cred"=>"0","implant"=>"0","repasse"=>"0",'ano_id'=>19],
           ["municipio_id"=>5,"descricao"=>"Agentes Comunitários de Saúde","sigla"=>"ACS","teto"=>"62","cred"=>"65","implant"=>"60","repasse"=>"75000.00",'ano_id'=>19],
           ["municipio_id"=>5,"descricao"=>"Núcleo de Apoio a Saúde da Fámilia Tipo 1","sigla"=>"NASF1","teto"=>"0","cred"=>"1","implant"=>"1","repasse"=>"20000.00",'ano_id'=>19],
           ["municipio_id"=>5,"descricao"=>"Núcleo de Apoio a Saúde da Fámilia Tipo 2","sigla"=>"NASF2","teto"=>"0","cred"=>"0","implant"=>"3","repasse"=>"0",'ano_id'=>19],
           ["municipio_id"=>5,"descricao"=>"Núcleo de Apoio a Saúde da Fámilia Tipo 3","sigla"=>"NASF3","teto"=>"0","cred"=>"0","implant"=>"0","repasse"=>"0",'ano_id'=>19],
           ["municipio_id"=>5,"descricao"=>"Equipes de Saúde Bucal Tipo 1","sigla"=>"ESB1","teto"=>"11","cred"=>"9","implant"=>"9","repasse"=>"30105.00",'ano_id'=>19],
           ["municipio_id"=>5,"descricao"=>"Equipes de Saúde Bucal Tipo 2","sigla"=>"ESB2","teto"=>"11","cred"=>"0","implant"=>"0","repasse"=>"0",'ano_id'=>19],
           ["municipio_id"=>5,"descricao"=>"Centros de Especilidades Odontologia Tipo 1","sigla"=>"CEO1","teto"=>"0","cred"=>"0","implant"=>"0","repasse"=>"0",'ano_id'=>19],
           ["municipio_id"=>5,"descricao"=>"Centros de Especilidades Odontologia Tipo 2","sigla"=>"CEO2","teto"=>"0","cred"=>"0","implant"=>"0","repasse"=>"0",'ano_id'=>19],
           ["municipio_id"=>5,"descricao"=>"Centros de Especilidades Odontologia Tipo 3","sigla"=>"CEO3","teto"=>"0","cred"=>"0","implant"=>"0","repasse"=>"0",'ano_id'=>19]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class EstadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('estados')->insert([
            ["nome"=>"Acre","gentilico"=>"acriano","sigla"=>"AC"],
            ["nome"=>"Alagoas","gentilico"=>"alagoano","sigla"=>"AL"],
            ["nome"=>"Amapá","gentilico"=>"amapaense","sigla"=>"AP"],
            ["nome"=>"Amazonas","gentilico"=>"amazonense","sigla"=>" AM"],
            ["nome"=>"Bahia","gentilico"=>"baiano","sigla"=>"BA"],
            ["nome"=>"Ceará","gentilico"=>"cearense","sigla"=>"CE"],
            ["nome"=>"Distrito Federal","gentilico"=>"brasiliense","sigla"=>"DF"],
            ["nome"=>"Espírito Santo","gentilico"=>"capixaba ou espírito-santense","sigla"=>"ES"],
            ["nome"=>"Goiás","gentilico"=>"goiano","sigla"=>"GO"],
            ["nome"=>"Maranhão","gentilico"=>"maranhense","sigla"=>"MA"],
            ["nome"=>"Mato Grosso","gentilico"=>"mato-grossense","sigla"=>"MT"],
            ["nome"=>"Mato Grosso do Sul","gentilico"=>"sul-mato-grossense ou mato-grossense-do-sul","sigla"=>"MS"],
            ["nome"=>"Minas Gerais","gentilico"=>"mineiro","sigla"=>"MG"],
            ["nome"=>"Pará","gentilico"=>"paraense","sigla"=>"PA"],
            ["nome"=>"Paraíba","gentilico"=>"paraibano","sigla"=>"PB"],
            ["nome"=>"Paraná","gentilico"=>"paranaense","sigla"=>"PR"],
            ["nome"=>"Pernambuco","gentilico"=>"pernambucano","sigla"=>"PE"],
            ["nome"=>"Piauí","gentilico"=>"piauiense","sigla"=>"PI"],
            ["nome"=>"Rio de Janeiro","gentilico"=>"fluminense","sigla"=>"RJ"],
            ["nome"=>"Rio Grande do Norte","gentilico"=>"potiguar ou norte-rio-grandense ou rio-grandense-do-norte","sigla"=>"RN"],
            ["nome"=>"Rio Grande do Sul","gentilico"=>"gaúcho ou sul-rio-grandense","sigla"=>"RS"],
            ["nome"=>"Rondônia","gentilico"=>"rondoniense ou rondoniano","sigla"=>"RO"],
            ["nome"=>"Roraima","gentilico"=>"roraimense","sigla"=>"RR"],
            ["nome"=>"Santa Catarina","gentilico"=>"catarinense ou barriga-verde","sigla"=>"SC"],
            ["nome"=>"São Paulo","gentilico"=>"paulista","sigla"=>"SP"],
            ["nome"=>"Sergipe","gentilico"=>"sergipano ou sergipense","sigla"=>"SE"],
            ["nome"=>"Tocantins","gentilico"=>"tocantinense","sigla"=>"TO"],
        ]);
    }
}

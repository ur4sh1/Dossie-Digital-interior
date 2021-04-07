<?php

use Illuminate\Database\Seeder;

class PartidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partidos')->insert([
            ["sigla"=>'PROS',"descricao"=>'PARTIDO REPUBLICANO DA ORDEM SOCIAL'],
            ["sigla"=>'PTN',"descricao"=>''],
            ["sigla"=>'SD',"descricao"=>''],
            ["sigla"=>'PV',"descricao"=>'PARTIDO VERDE'],
            ["sigla"=>'PSB',"descricao"=>'PARTIDO SOCIALISTA BRASILEIRO'],
            ["sigla"=>'PSD',"descricao"=>'PARTIDO SOCIAL DEMOCRÁTICO'],
            ["sigla"=>'PC DO B',"descricao"=>'PARTIDO COMUNISTA DO BRASIL'],
            ["sigla"=>'DEM',"descricao"=>'DEMOCRATAS'],
            ["sigla"=>'PRP',"descricao"=>'PARTIDO REPUBLICANO PROGRASSISTA'],
            ["sigla"=>'Sem Partido',"descricao"=>'SEM PARTIDO'],
            ["sigla"=>"MDB","descricao"=>"MOVIMENTO DEMOCRÁTICO BRASILEIRO"],
            ["sigla"=>"PTB","descricao"=>"PARTIDO TRABALHISTA BRASILEIRO"],
            ["sigla"=>"PDT","descricao"=>"PARTIDO DEMOCRÁTICO TRABALHISTA"],
            ["sigla"=>"PT","descricao"=>"PARTIDO DOS TRABALHADORES"],
            ["sigla"=>"PSDB","descricao"=>"PARTIDO DA SOCIAL DEMOCRACIA BRASILEIRA"],
            ["sigla"=>"PTC","descricao"=>"PARTIDO TRABALHISTA CRISTÃO"],
            ["sigla"=>"PSC","descricao"=>"PARTIDO SOCIAL CRISTÃO"],
            ["sigla"=>"PMN","descricao"=>"PARTIDO DA MOBILIZAÇÃO NACIONAL"],
            ["sigla"=>"CIDADANIA","descricao"=>"CIDADANIA"],
            ["sigla"=>"AVANTE","descricao"=>"AVANTE"],
            ["sigla"=>"PP","descricao"=>"PROGRESSISTAS"],
            ["sigla"=>"PSTU","descricao"=>"PARTIDO SOCIALISTA DOS TRABALHADORES UNIFICADO"],
            ["sigla"=>"PCB","descricao"=>"PARTIDO COMUNISTA BRASILEIRO"],
            ["sigla"=>"PRTB","descricao"=>"PARTIDO RENOVADOR TRABALHISTA BRASILEIRO"],
            ["sigla"=>"DC","descricao"=>"DEMOCRACIA CRISTÃ"],
            ["sigla"=>"PCO","descricao"=>"PARTIDO DA CAUSA OPERÁRIA"],
            ["sigla"=>"PODE","descricao"=>"PODEMOS"],
            ["sigla"=>"PSL","descricao"=>"PARTIDO SOCIAL LIBERAL"],
            ["sigla"=>"REPUBLICANOS ","descricao"=>"REPUBLICANOS"],
            ["sigla"=>"PSOL","descricao"=>"PARTIDO SOCIALISMO E LIBERDADE"],
            ["sigla"=>"PL","descricao"=>"PARTIDO LIBERAL"],
            ["sigla"=>"PATRIOTA","descricao"=>"PATRIOTA"],
            ["sigla"=>"SOLIDARIEDADE","descricao"=>"SOLIDARIEDADE"],
            ["sigla"=>"NOVO","descricao"=>"PARTIDO NOVO"],
            ["sigla"=>"REDE","descricao"=>"REDE SUSTENTABILIDADE"],
            ["sigla"=>"PMB","descricao"=>"PARTIDO DA MULHER BRASILEIRA"],
            ["sigla"=>"UP","descricao"=>"UNIDADE POPULAR"]
        ]);
    }
}

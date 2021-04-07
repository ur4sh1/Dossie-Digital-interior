<?php

use Illuminate\Database\Seeder;

class MunicipiosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('municipios')->insert([
            ["nome"=>'Alvarães',"regional_id"=>7,"dados_id"=>1,"detalhes_id"=>1],
            ["nome"=>'Amaturá',"regional_id"=>1,"dados_id"=>2,"detalhes_id"=>2],
            ["nome"=>'Anamã',"regional_id"=>3,"dados_id"=>3,"detalhes_id"=>3],
            ["nome"=>'Anori',"regional_id"=>3,"dados_id"=>4,"detalhes_id"=>4],
            ["nome"=>'Apuí',"regional_id"=>8,"dados_id"=>5,"detalhes_id"=>5],
            ["nome"=>'Atalaia do Norte',"regional_id"=>1,"dados_id"=>6,"detalhes_id"=>6],
            ["nome"=>'Autazes',"regional_id"=>4,"dados_id"=>7,"detalhes_id"=>7],
            ["nome"=>'Barcelos',"regional_id"=>4,"dados_id"=>8,"detalhes_id"=>8],
            ["nome"=>'Barreirinha',"regional_id"=>5,"dados_id"=>9,"detalhes_id"=>9],
            ["nome"=>'Benjamin Constant',"regional_id"=>1,"dados_id"=>10,"detalhes_id"=>10],
            ["nome"=>'Beruri',"regional_id"=>3,"dados_id"=>11,"detalhes_id"=>11],
            ["nome"=>'Boa Vista do Ramos',"regional_id"=>5,"dados_id"=>12,"detalhes_id"=>12],
            ["nome"=>'Boca do Acre',"regional_id"=>6,"dados_id"=>13,"detalhes_id"=>13],
            ["nome"=>'Borba',"regional_id"=>8,"dados_id"=>14,"detalhes_id"=>14],
            ["nome"=>'Caapiranga',"regional_id"=>3,"dados_id"=>15,"detalhes_id"=>15],
            ["nome"=>'Canutama',"regional_id"=>6,"dados_id"=>16,"detalhes_id"=>16],
            ["nome"=>'Carauari',"regional_id"=>9,"dados_id"=>17,"detalhes_id"=>17],
            ["nome"=>'Careiro Castanho',"regional_id"=>4,"dados_id"=>18,"detalhes_id"=>18],
            ["nome"=>'Careiro da Várzea',"regional_id"=>4,"dados_id"=>19,"detalhes_id"=>19],
            ["nome"=>'Coari',"regional_id"=>3,"dados_id"=>20,"detalhes_id"=>20],
            ["nome"=>'Codajás',"regional_id"=>3,"dados_id"=>21,"detalhes_id"=>21],
            ["nome"=>'Eirunepé',"regional_id"=>9,"dados_id"=>22,"detalhes_id"=>22],
            ["nome"=>'Envira',"regional_id"=>9,"dados_id"=>23,"detalhes_id"=>23],
            ["nome"=>'Fonte Boa',"regional_id"=>1,"dados_id"=>24,"detalhes_id"=>24],
            ["nome"=>'Guajará',"regional_id"=>9,"dados_id"=>25,"detalhes_id"=>25],
            ["nome"=>'Humaitá',"regional_id"=>8,"dados_id"=>26,"detalhes_id"=>26],
            ["nome"=>'Ipixuna',"regional_id"=>9,"dados_id"=>27,"detalhes_id"=>27],
            ["nome"=>'Iranduba',"regional_id"=>4,"dados_id"=>28,"detalhes_id"=>28],
            ["nome"=>'Itacoatiara',"regional_id"=>2,"dados_id"=>29,"detalhes_id"=>29],
            ["nome"=>'Itamarati',"regional_id"=>9,"dados_id"=>30,"detalhes_id"=>30],
            ["nome"=>'Itapiranga',"regional_id"=>2,"dados_id"=>31,"detalhes_id"=>31],
            ["nome"=>'Japurá',"regional_id"=>7,"dados_id"=>32,"detalhes_id"=>32],
            ["nome"=>'Juruá',"regional_id"=>7,"dados_id"=>33,"detalhes_id"=>33],
            ["nome"=>'Jutaí',"regional_id"=>1,"dados_id"=>34,"detalhes_id"=>34],
            ["nome"=>'Lábrea',"regional_id"=>6,"dados_id"=>35,"detalhes_id"=>35],
            ["nome"=>'Manacapuru',"regional_id"=>3,"dados_id"=>36,"detalhes_id"=>36],
            ["nome"=>'Manaquiri',"regional_id"=>4,"dados_id"=>37,"detalhes_id"=>37],
            ["nome"=>'Manaus',"regional_id"=>4,"dados_id"=>38,"detalhes_id"=>38],
            ["nome"=>'Manicoré',"regional_id"=>8,"dados_id"=>39,"detalhes_id"=>39],
            ["nome"=>'Maraã',"regional_id"=>7,"dados_id"=>40,"detalhes_id"=>40],
            ["nome"=>'Maués',"regional_id"=>5,"dados_id"=>41,"detalhes_id"=>41],
            ["nome"=>'Nhamundá',"regional_id"=>5,"dados_id"=>42,"detalhes_id"=>42],
            ["nome"=>'Nova Olinda do Norte',"regional_id"=>4,"dados_id"=>43,"detalhes_id"=>43],
            ["nome"=>'Novo Airão',"regional_id"=>3,"dados_id"=>44,"detalhes_id"=>44],
            ["nome"=>'Novo Aripuanã',"regional_id"=>8,"dados_id"=>45,"detalhes_id"=>45],
            ["nome"=>'Parintins',"regional_id"=>5,"dados_id"=>46,"detalhes_id"=>46],
            ["nome"=>'Pauini',"regional_id"=>6,"dados_id"=>47,"detalhes_id"=>47],
            ["nome"=>'Presidente Figueiredo',"regional_id"=>4,"dados_id"=>48,"detalhes_id"=>48],
            ["nome"=>'Rio Preto da Eva',"regional_id"=>4,"dados_id"=>49,"detalhes_id"=>49],
            ["nome"=>'Santa Isabel do Rio Negro',"regional_id"=>4,"dados_id"=>50,"detalhes_id"=>50],
            ["nome"=>'Santo Antônio do Içá',"regional_id"=>1,"dados_id"=>51,"detalhes_id"=>51],
            ["nome"=>'Silves',"regional_id"=>2,"dados_id"=>52,"detalhes_id"=>52],
            ["nome"=>'São Gabriel da Cachoeira',"regional_id"=>4,"dados_id"=>53,"detalhes_id"=>53],
            ["nome"=>'São Paulo de Olivença',"regional_id"=>1,"dados_id"=>54,"detalhes_id"=>54],
            ["nome"=>'São Sebastião do Uatumã',"regional_id"=>2,"dados_id"=>55,"detalhes_id"=>55],
            ["nome"=>'Tabatinga',"regional_id"=>1,"dados_id"=>56,"detalhes_id"=>56],
            ["nome"=>'Tapauá',"regional_id"=>6,"dados_id"=>57,"detalhes_id"=>57],
            ["nome"=>'Tefé',"regional_id"=>7,"dados_id"=>58,"detalhes_id"=>58],
            ["nome"=>'Tonantins',"regional_id"=>1,"dados_id"=>59,"detalhes_id"=>59],
            ["nome"=>'Uarini',"regional_id"=>7,"dados_id"=>60,"detalhes_id"=>60],
            ["nome"=>'Urucará',"regional_id"=>2,"dados_id"=>61,"detalhes_id"=>61],
            ["nome"=>'Urucurituba',"regional_id"=>2,"dados_id"=>62,"detalhes_id"=>62]
        ]);
    }
}

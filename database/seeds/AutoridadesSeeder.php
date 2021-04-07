<?php

use Illuminate\Database\Seeder;

class AutoridadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autoridades')->insert([
            ["nome"=>'Antonio Rock Longo',"cargo_id"=>1,"partido_id"=>8,"municipio_id"=>5,"liderCamara"=>false,"email"=>"prefeituradeapui@hotmail.com","tel"=>'',"cel"=>'(97) 99155-3968'],
            ["nome"=>'Marcos Antonio Lise',"cargo_id"=>2,"partido_id"=>9,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>''],
            ["nome"=>'Bruno Jose de Morais',"cargo_id"=>3,"partido_id"=>1,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>''],
            ["nome"=>'Flaviano Carvalho de Souza',"cargo_id"=>3,"partido_id"=>2,"municipio_id"=>5,"liderCamara"=>true,"email"=>'',"tel"=>'',"cel"=>''],
            ["nome"=>'Gilberto Vizolli',"cargo_id"=>3,"partido_id"=>3,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>''],
            ["nome"=>'Roberto Willian Braga Gomes',"cargo_id"=>3,"partido_id"=>4,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>''],
            ["nome"=>'Jose Ribamar Araujo',"cargo_id"=>3,"partido_id"=>4,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>''],
            ["nome"=>'Antonio Carlos Moises Franco',"cargo_id"=>3,"partido_id"=>5,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>''],
            ["nome"=>'Carlos ALves da Silva',"cargo_id"=>3,"partido_id"=>6,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>''],
            ["nome"=>'Gevan Pires Barbosa',"cargo_id"=>3,"partido_id"=>7,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>''],
            ["nome"=>'Lexisandra Mara Pascoal',"cargo_id"=>4,"partido_id"=>10,"municipio_id"=>5,"liderCamara"=>false,"email"=>'lexisandrapui@hotmail.com ',"tel"=>'',"cel"=>'(97) 99158-6011'],
            ["nome"=>'Isleia Gomes de Farias',"cargo_id"=>5,"partido_id"=>10,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>'(97) 98808-2331'],
            ["nome"=>'Kênia Macedo',"cargo_id"=>6,"partido_id"=>10,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>''],
            ["nome"=>'Isileia Gomes',"cargo_id"=>7,"partido_id"=>10,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>'(97) 98808 - 2331'],
            ["nome"=>'Emerson Curtareli',"cargo_id"=>8,"partido_id"=>10,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>''],
            ["nome"=>'Maria Magnolia Rodrigues da Silva',"cargo_id"=>10,"partido_id"=>10,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>''],
            ["nome"=>'Pedro Paulo Navarine',"cargo_id"=>11,"partido_id"=>10,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>''],
            ["nome"=>'Rosangela Motter Detoni',"cargo_id"=>12,"partido_id"=>10,"municipio_id"=>5,"liderCamara"=>false,"email"=>'rmdetoni@hotmail.com',"tel"=>'',"cel"=>'(97) 99153-7586'],
            ["nome"=>'Ivani Tironi Saatkamp',"cargo_id"=>13,"partido_id"=>10,"municipio_id"=>5,"liderCamara"=>false,"email"=>'ivatironi.saatkamp@gmail.com',"tel"=>'',"cel"=>'(97) 99153-7586'],
            ["nome"=>'Gleice Kelly de Lima',"cargo_id"=>14,"partido_id"=>10,"municipio_id"=>5,"liderCamara"=>false,"email"=>'gleicekellydelima@gmail.com',"tel"=>'',"cel"=>'(97) 99153-1553'],
            ["nome"=>'André Feliciano Mattes',"cargo_id"=>15,"partido_id"=>10,"municipio_id"=>5,"liderCamara"=>false,"email"=>'',"tel"=>'',"cel"=>'(93) 99355-2835 / (93) 99101-9740']
        ]);
    }
}

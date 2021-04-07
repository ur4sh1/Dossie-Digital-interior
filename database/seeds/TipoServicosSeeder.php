<?php

use Illuminate\Database\Seeder;

class TipoServicosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_servicos')->insert([
        ['nome'=>'Urgência e Emergêrcia'],
        ['nome'=>'Odontologia'],
        ['nome'=>'Serviço Social'],
        ['nome'=>'Psicologia'],
        ['nome'=>'Fisioterapia'],
        ['nome'=>'Cons. Médica Básica'],
        ['nome'=>'Cons. Médica Especial'],
        ['nome'=>'Laboratório'],
        ['nome'=>'Raio X'],
        ['nome'=>'Ultrassonografia'],
        ['nome'=>'Mamografia'],
        ['nome'=>'Eletrocardiografia'],
        ['nome'=>'Eletroencefalografia'],
        ['nome'=>'Cirúrgias Eletivas'],
        ['nome'=>'Cirúrgias de Emergência'],
        ['nome'=>'SISREG']
        ]);
    }
}

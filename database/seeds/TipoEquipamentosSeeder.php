<?php

use Illuminate\Database\Seeder;

class TipoEquipamentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tipo_equipamentos')->insert([
            ['nome'=>'BERÇO AQUECIDO'],
            ['nome'=>'BISTURI ELÉTRICO'],
            ['nome'=>'CARRO DE ANESTESIA'],
            ['nome'=>'CARRO DE EMERGÊNCIA'],
            ['nome'=>'CARDIOVERSOR'],
            ['nome'=>'DESFIBRILADOR'],
            ['nome'=>'DIGITALIZADOR DE IMAGENS'],
            ['nome'=>'ELETROCARDIÓGRAFO'],
            ['nome'=>'EQUIPO ODONTOLÓGICO'],
            ['nome'=>'GRUPO GERADOR'],
            ['nome'=>'INCUBADORA'],
            ['nome'=>'MAMÓGRAFO'],
            ['nome'=>'PROCESS. DE RAIOS-X'],
            ['nome'=>'RAIOS-X'],
            ['nome'=>'RESPIRADOR / VENT. MECÂNICO'],
            ['nome'=>'TOMÓGRAFO'],
            ['nome'=>'ULTRASSOM']
        ]);
    }
}

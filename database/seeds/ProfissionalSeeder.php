<?php

use Illuminate\Database\Seeder;

class ProfissionalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('profissionals')->insert([
            ['nome'=>"ENFERMEIRO"],
            ['nome'=>"FARMACEUTICO"],
            ['nome'=>"FARMACEUTICO BIOQUIMICO"],
            ['nome'=>"FISIOTERAPEUTA"],
            ['nome'=>"FONOAUDIOLOGO"],
            ['nome'=>"MÉDICO"],
            ['nome'=>"MÉDICO DOUTOR"],
            ['nome'=>"MÉDICO ESPECIALISTA"],
            ['nome'=>"MÉDICO GRADUADO"],
            ['nome'=>"MÉDICO MESTRE"],
            ['nome'=>"DIRETOR UNIDADE"],
            ['nome'=>"GER ADMINISTRATIVO"],
            ['nome'=>"GER ENFERMAGEM"],
            ['nome'=>"TÉCNICO"],
            ['nome'=>"TÉCNICO DE ENFERMAGEM"],
            ['nome'=>"TÉCNICO DE HEMOTERAPIA"],
            ['nome'=>"TÉCNICO DE PATOLOGIA CLINICA"],
            ['nome'=>"TÉCNICO DE RADIOLOGIA MEDICA"],
            ['nome'=>"TÉCNICO DE SAUDE BUCAL"],
            ['nome'=>"ASSISTENTE TECNICO"],
            ['nome'=>"AUXILIAR DE ENFERMAGEM"],
            ['nome'=>"AUXILIAR DE NUTRICAO E DIETETICA"],
            ['nome'=>"AUXILIAR DE PATOLOGIA CLINICA"],
            ['nome'=>"AUXILIAR DE RADIOLOGIA MEDICA"],
            ['nome'=>"AUXILIAR DE SAUDE BUCAL"],
            ['nome'=>"AUXILIAR OPERACIONAL DE SAUDE"],
            ['nome'=>"AGENTE ADMINISTRATIVO"],
            ['nome'=>"ARTIFICE"],
            ['nome'=>"AUXILIAR DE SERVICOS GERAIS"],
            ['nome'=>"COPEIRO"],
            ['nome'=>"COZINHEIRO"],
            ['nome'=>"MOTORISTA"],
            ['nome'=>"VIGIA"],
            ['nome'=>"MICROSCOPISTA"],
            ['nome'=>"AGENTE DE SAÚDE RURAL"],
            ['nome'=>"AUXILIAR DE SAÚDE"],
            ['nome'=>"AUXILIAR DE SERVIÇOS"]
        ]);
    }
}

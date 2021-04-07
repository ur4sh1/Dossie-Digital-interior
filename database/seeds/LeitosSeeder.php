<?php

use Illuminate\Database\Seeder;

class LeitosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leitos')->insert([
            ['hospital_id'=>1,'leito_clinico'=>14,'leito_cirurgico'=>8,'leito_obstetrico'=>10,'leito_pediatrico'=>4,'leito_outro'=>9,'suporte_ventilatorio'=>0,'uci_adulto'=>3,'uci_pediatrico'=>0],
            ['hospital_id'=>2,'leito_clinico'=>23,'leito_cirurgico'=>0,'leito_obstetrico'=>4,'leito_pediatrico'=>5,'leito_outro'=>8,'suporte_ventilatorio'=>0,'uci_adulto'=>3,'uci_pediatrico'=>0]
        ]);
    }
}

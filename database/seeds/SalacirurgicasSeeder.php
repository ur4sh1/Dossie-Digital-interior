<?php

use Illuminate\Database\Seeder;

class SalacirurgicasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salacirurgicas')->insert([
            ['hospital_id'=>1,'sala_cirurgicas_existentes'=>2,'sala_cirurgicas_funcionais'=>2],
            ['hospital_id'=>2,'sala_cirurgicas_existentes'=>2,'sala_cirurgicas_funcionais'=>2]
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            ["name"=>'Lucas',
            "email"=>'lucas.edgerly@gmail.com',
            "password"=>'$2y$10$n3NBaPLnuGBfyBTCQEGEGeHucp8IPOcUPjEKdpumtsmtXejjyuNVm'],
            ["name"=>'NAILA MARIA CAÑISO FERREIRA',
            "email"=>'naila.ferreira@saude.am.gov.br',
            "password"=>'$2y$10$wJxk51MLa1gC9AylA1LZK.lFCa1ckX7/aT6qNMhxajVJOj1r60OwK']
        ]);
    }
}

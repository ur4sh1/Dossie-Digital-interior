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
            "name"=>'Lucas',
            "email"=>'lucas.edgerly@gmail.com',
            "password"=>'$2y$10$n3NBaPLnuGBfyBTCQEGEGeHucp8IPOcUPjEKdpumtsmtXejjyuNVm'
        ]);
    }
}

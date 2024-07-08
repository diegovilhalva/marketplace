<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert(
            [
                'name' => 'Diego Vilhalva',
                'username' => 'diegovilhalva',
                'email' => 'diego@teste.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Loja da gi',
                'username' => 'gioliveira',
                'email' => 'lojadagi@teste.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('12345678')
            ],
            [
                'name' => 'Leticia Ballista',
                'username' => 'leticiaballista',
                'email' => 'leticia@teste.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('12345678')
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'Inspektur',
            'username' => 'inspektur',
            'email' => 'inspektur@gmail.com',
            'password' => Hash::make('password'),
            'nip' => '1234567890123456',
            'role_id' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Verifikator',
            'username' => 'verifikator',
            'email' => 'verifikator@gmail.com',
            'password' => Hash::make('password'),
            'nip' => '1234567890123457',
            'role_id' => 2,
        ]);
        DB::table('users')->insert([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
            'nip' => '1234567890123458',
            'role_id' => 3,
        ]);
        DB::table('users')->insert([
            'name' => 'Pengadu',
            'username' => 'pengadu',
            'email' => 'pengadu@gmail.com',
            'password' => Hash::make('password'),
            'nip' => '1234567890123459',
            'role_id' => 4,
        ]);
    }
}

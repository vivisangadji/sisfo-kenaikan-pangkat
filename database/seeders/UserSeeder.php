<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

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
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password'),
        ]);

        DB::table('personils')->insert([
            'nama' => 'Adit',
            'nrp' => '12345',
            'no_hp' => '082193324832',
            'foto' => 'storage/foto1.png',
            'pangkat_sekarang' => 'Jendral',
            'ttl' => 'Makassar, 01 Januari 1978',
            'jenis_kelamin' => 'Laki-laki',
            'password' => Hash::make('password'),
        ]);
    }
}

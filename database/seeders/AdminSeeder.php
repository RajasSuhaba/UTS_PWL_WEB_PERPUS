<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //silahkan ubah

        User::create([
            'nama' => 'Rajas',
            'email' => 'rajas@gmail.com',
            'role' => 'admin',
            'identitas' => '202231035', //masukan NIP
            'alamat' => 'Jakarta', //masukan alamat
            'password' => Hash::make('password'),
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

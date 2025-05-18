<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
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
        // script utk insert data ke tabel di database
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'telepon' => '0899121239',
            'role' => '1',
            'password' => Hash::make('@dm!n'),
        ]);
    }
}

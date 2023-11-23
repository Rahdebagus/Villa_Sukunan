<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::create([
            'name' => 'superadmin',
            'email' => 'superadmin@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'phone_number' => '08123456789',
        ]);
        User::create([
            'name' => 'wahde',
            'email' => 'wahde@gmail.com',
            'password' => bcrypt('wahde123'),
            'phone_number' => '08123456789',
        ]);
        User::create([
            'name' => 'bagus',
            'email' => 'bagus@gmail.com',
            'password' => bcrypt('bagus123'),
            'phone_number' => '08123456789',
        ]);
    }
}

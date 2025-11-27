<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::insert([
            [
                'name' => 'Admin',
                'email' => 'admin@email.com',
                'password' => bcrypt('password'),
                'occupation' => 'Administrator',
                'is_admin' => true,
                'status' => 'approved',
                'gnd_uid' => null,
            ],
            [
                'name' => 'User',
                'email' => 'user@email.com',
                'password' => bcrypt('password'),
                'occupation' => 'General User',
                'is_admin' => false,
                'status' => 'approved',
                'gnd_uid' => null,
            ]
        ]);
    }
}

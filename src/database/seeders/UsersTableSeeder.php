<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'User Um',
                'email' => 'user_um@gmail.com',
                'password' => bcrypt('abc123'),
                'active' => true,
            ],
            [
                'name' => 'User Dois',
                'email' => 'user_dois@gmail.com',
                'password' => bcrypt('abc123'),
                'active' => true,
            ],
            [
                'name' => 'User Três',
                'email' => 'user_tres@gmail.com',
                'password' => bcrypt('abc123'),
                'active' => true,
            ],
        ];
        DB::table('users')->insert($users);
    }
}

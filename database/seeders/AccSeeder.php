<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AccSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Ari Lathifatul',
                'email' => 'ari@gmail.com',
                'password' => Hash::make('rahasia'),
                'is_admin' => true,
                'additional_info' => 'Role nya berupa administrator'
            ],
            [
                'name' => 'Aruf Rahman',
                'email' => 'aruf@gmail.com',
                'password' => Hash::make('password'),
                'is_admin' => false,
                'additional_info' => 'Role nya bukan berupa administrator'
            ],
            [
                'name' => 'Rafi Rizki',
                'email' => 'kiki@gmail.com',
                'password' => Hash::make('kiki'),
                'is_admin' => false,
                'additional_info' => 'Role nya bukan berupa administrator'
            ]

        ]);
    }
}

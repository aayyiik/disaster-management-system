<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Role::factory(3)->create();
        DB::table('role')->insert([
            [
       
                'name_role' => 'administrator',
                'created_at' => now(),
                'updated_at' => now()

            ],
            [
           
                'name_role' => 'petugas',
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
      
                'name_role' => 'warga',
                'created_at' => now(),
                'updated_at' => now()
            ]
        ]);
    }
}

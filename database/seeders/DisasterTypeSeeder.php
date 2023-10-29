<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DisasterTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('disaster_type')->insert([
            ['disaster_type' => 'Gempa Bumi'],
            ['disaster_type' => 'Banjir'],
            ['disaster_type' => 'Tsunami'],
            ['disaster_type' => 'Tanah Longsor']
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BackgroundSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbl_backgrounds')->insert([
            [
                'image' => '1.png',
            ],
            [
                'image' => '2.png',
            ],
            [
                'image' => '3.png',
            ],
            [
                'image' => '4.png',
            ],
            [
                'image' => '5.png',
            ],
        ]);
    }
}

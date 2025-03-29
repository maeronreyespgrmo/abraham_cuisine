<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tbl_products')->insert([
            [
                'name' => 'Kare Kare',
                'description' => '2',
                'image_name' => 'kare-kare.jpg',
                'price' => '1000',
            ],
            [
                'name' => 'Barbeque',
                'description' => '2',
                'image_name' => 'BBQ.jpg',
                'price' => '1000',
            ],
            [
                'name' => 'Bf',
                'description' => 'wd',
                'image_name' => 'Bf.png',
                'price' => '1000',
            ],
        ]);
    }
}

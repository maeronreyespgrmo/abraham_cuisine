<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('tbl_menus')->insert([
            [
                'menu_name' => 'Home',
                'menu_link' => '#'
            ],
            [
                'menu_name' => 'About',
                'menu_link' => '#about-page'
            ],
            [
                'menu_name' => 'Menu',
                'menu_link' => '#menu-page'
            ],
            [
                'menu_name' => 'Contact',
                'menu_link' => '#contact-page'
            ],
        ]);
    }
}

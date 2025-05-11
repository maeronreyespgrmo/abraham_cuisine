<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
            DB::table('tables')->insert([
                [
                    'table_name' => 'Table 1',
                ],
                [
                    'table_name' => 'Table 2',
                ],
                [
                    'table_name' => 'Table 3',
                ],
                [
                    'table_name' => 'Table 4',
                ],
                [
                    'table_name' => 'Table 5',
                ],
                [
                    'table_name' => 'Table 6',
                ],
                [
                    'table_name' => 'Table 7',
                ],
                [
                    'table_name' => 'Table 8',
                ],
                [
                    'table_name' => 'Table 9',
                ],
                [
                    'table_name' => 'Table 10',
                ],
            ]);
        

    }
}

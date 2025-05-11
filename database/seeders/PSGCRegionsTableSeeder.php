<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PSGCRegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = array(
            array('code' => '01','name' => 'REGION I (ILOCOS REGION)'),
            array('code' => '02','name' => 'REGION II (CAGAYAN VALLEY)'),
            array('code' => '03','name' => 'REGION III (CENTRAL LUZON)'),
            array('code' => '04','name' => 'REGION IV-A (CALABARZON)'),
            array('code' => '05','name' => 'REGION V (BICOL REGION)'),
            array('code' => '06','name' => 'REGION VI (WESTERN VISAYAS)'),
            array('code' => '07','name' => 'REGION VII (CENTRAL VISAYAS)'),
            array('code' => '08','name' => 'REGION VIII (EASTERN VISAYAS)'),
            array('code' => '09','name' => 'REGION IX (ZAMBOANGA PENINSULA)'),
            array('code' => '10','name' => 'REGION X (NORTHERN MINDANAO)'),
            array('code' => '11','name' => 'REGION XI (DAVAO REGION)'),
            array('code' => '12','name' => 'REGION XII (SOCCSKSARGEN)'),
            array('code' => '13','name' => 'NATIONAL CAPITAL REGION (NCR)'),
            array('code' => '14','name' => 'CORDILLERA ADMINISTRATIVE REGION (CAR)'),
            array('code' => '15','name' => 'AUTONOMOUS REGION IN MUSLIM MINDANAO (ARMM)'),
            array('code' => '16','name' => 'REGION XIII (Caraga)'),
            array('code' => '17','name' => 'MIMAROPA'),
            array('code' => '18','name' => 'NEGROS ISLAND REGION (NIR)')
        );
        
        DB::table('tbl_psgc_regions')->insert($regions);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
class ZoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('zones')->insert([
            'zone_name' => 'West',

        ]);
        DB::table('zones')->insert([
            'zone_name' => 'South',

        ]);
        DB::table('zones')->insert([
            'zone_name' => 'North',

        ]);
        DB::table('zones')->insert([
            'zone_name' => 'East',

        ]);
        

    }
}

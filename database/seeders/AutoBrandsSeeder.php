<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoBrandsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('auto_brands')->insert([
            'brand_name' => 'Ford'
        ]);

        DB::table('auto_brands')->insert([
            'brand_name' => 'Volkswagen'
        ]);

        DB::table('auto_brands')->insert([
            'brand_name' => 'Toyota'
        ]);

        DB::table('auto_brands')->insert([
            'brand_name' => 'Mitsubishi'
        ]);

        DB::table('auto_brands')->insert([
            'brand_name' => 'Hyundai'
        ]);
    }
}

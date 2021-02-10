<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoModelsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $today = now()->toDateString();
        // DB::table('auto_models')->insert([
        //     'model_name' => 'Ford Mustang',
        //     'auto_brand_id' => '1',
        //     'release_date' => $today
        // ]);

        DB::table('auto_models')->insert([
            'model_name' => 'Ford F-Series',
            'auto_brand_id' => '1',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => 'Ford Fiesta',
            'auto_brand_id' => '1',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => 'Crown Victoria',
            'auto_brand_id' => '1',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => 'GTI',
            'auto_brand_id' => '2',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => 'Golf R',
            'auto_brand_id' => '2',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => 'CC',
            'auto_brand_id' => '2',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => 'Touareg',
            'auto_brand_id' => '2',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => 'Passat V6 SE',
            'auto_brand_id' => '2',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => 'Avalon',
            'auto_brand_id' => '3',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => 'Highlander',
            'auto_brand_id' => '3',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => 'Prius',
            'auto_brand_id' => '3',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => '86',
            'auto_brand_id' => '3',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => 'Sienna',
            'auto_brand_id' => '3',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => 'Colt Galant GTO GSR Coupe',
            'auto_brand_id' => '4',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => '1980 Colt Lancer 2000 Turbo',
            'auto_brand_id' => '4',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => '1982 Colt/Mitsubishi Shogun I',
            'auto_brand_id' => '4',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => '1990 Mitsubishi 3000GT',
            'auto_brand_id' => '4',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => '2001 Mitsubishi Lancer EVO VI',
            'auto_brand_id' => '4',
            'release_date' => $today
        ]);

        DB::table('auto_models')->insert([
            'model_name' => 'HB20',
            'auto_brand_id' => '5',
            'release_date' => $today
        ]);

    }
}

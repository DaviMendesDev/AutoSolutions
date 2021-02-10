<?php

namespace Database\Seeders;

use App\Models\AutoPart;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AutoPartsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $auto_parts = AutoPart::factory()->count(20)->create();
    }
}

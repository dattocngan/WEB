<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TrafficSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 50; $i++) { 
            DB::table('traffic')->insert([
                'title' => 'Quoc Lo ' . $i,
                'content' => 'Vuot toc do qua ' . ($i*3) . ' km/h',
                'min_penalty' => $i * 2000,
                'max_penalty' => $i * 3000,
                'effective_date' => date("Y-m-d")
            ]);
        }
    }
}

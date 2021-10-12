<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 20 ; $i++) { 
            DB::table('apartment')->insert([
                'name' => 'Home ' . $i,
                'address' => 'Street ' . $i,
                'price' => $i*10,
                'general_infor' => 'Short infor ' . $i,
                'detail_infor' => 'Full infor ' . $i,
                'thumbnail' => 'https://www.pngrepo.com/download/47765/home-icon.png',
                'status_sold' => $i % 2
            ]);
        }

    }
}

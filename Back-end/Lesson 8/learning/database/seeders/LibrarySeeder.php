<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 5; $i++) { 
            DB::table('library')->insert([
                'authorid' => $i,
                'title' => 'Quyen sach so ' . $i,
                'ISBN' => '123-456-78-' . $i,
                'pub_year' => '200'.$i,
                'available' => $i + 10
            ]);
        }
        
    }
}

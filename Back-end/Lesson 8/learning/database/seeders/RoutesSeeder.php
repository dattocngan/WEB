<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class RoutesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('routes')->insert([
            'route_name' => 'book_list',
            'route_title' => 'Quản lý sách'
        ]);

        DB::table('routes')->insert([
            'route_name' => 'hotel_showAll',
            'route_title' => 'Quản lý khách sạn'
        ]);

        DB::table('routes')->insert([
            'route_name' => 'hotel_showDetail',
            'route_title' => 'Xem chi tiết khách sạn'
        ]);
    }
}

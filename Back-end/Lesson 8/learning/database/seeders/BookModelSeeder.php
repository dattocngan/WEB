<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Seeder;

class BookModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Book::insert([
        //     'idCategory' => 1,
        //     'title' => 'Ba chú gấu',
        //     'price' => 25000,
        //     'href_param' => 'http://mnhoathuytien.longbien.edu.vn/truyen-ke-cho-be/truyen-ba-con-gau-tndetail2436-50379.aspx',
        //     'content' => 'ảo ma canada',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        // Book::insert([
        //     'idCategory' => 2,
        //     'title' => 'Đồng chí',
        //     'price' => 30000,
        //     'href_param' => 'https://www.thivien.net/Ch%C3%ADnh-H%E1%BB%AFu/%C4%90%E1%BB%93ng-ch%C3%AD/poem-xYZuhzmmmiLHd-0Syz9dHA',
        //     'content' => 'đồng tính',
        //     'created_at' => date('Y-m-d H:i:s'),
        //     'updated_at' => date('Y-m-d H:i:s')
        // ]);
        $book = Book::find(3); // tim theo id
        $book->title = 'Nguyen Tien Dat';
        $book->save();
    }
}

<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    public function showBook(Request $request)
    {
        $bookList = DB::table('book')->get();
        return view('book.book')->with([
            'bookList' => $bookList
        ]);
    }
}

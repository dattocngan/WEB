<?php

namespace App\Http\Controllers\Library;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LibraryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission');
    }
    public function showBook(Request $request)
    {
        
        $search = $request->search;
        $bookList = DB::table('library');
        if(isset($search) && $search > 0){
            $bookList = $bookList->where('library.title','like','%'.$search.'%');
        }
        $bookList = $bookList->get();
        return view('library.index')->with([
            'bookList' => $bookList,
            'index' => 1
        ]);
    }
}

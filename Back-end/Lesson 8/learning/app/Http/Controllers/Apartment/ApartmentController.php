<?php

namespace App\Http\Controllers\Apartment;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ApartmentController extends Controller
{
    public function index(Request $request)
    {
        $apartmentList = DB::table('apartment')
        ->paginate(6);
        return view('apartment.index')->with([
            'apartmentList' => $apartmentList
        ]);
    }
}

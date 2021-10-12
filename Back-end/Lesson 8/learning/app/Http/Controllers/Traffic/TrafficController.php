<?php

namespace App\Http\Controllers\Traffic;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TrafficController extends Controller
{
    public function showTraffic(Request $request)
    {
        $search = $request -> search;
        $trafficList = DB::table('traffic');
        if(isset($search)){
            $trafficList = $trafficList->where('traffic.title','like','%'.$search.'%');
        }
        $trafficList = $trafficList->paginate(5);
        $trafficList->appends(['search' => $search]);
        return view('traffic.index')->with([
            'trafficList' => $trafficList,
            'index' => 1,
            'search' => $search
        ]);
    }
}

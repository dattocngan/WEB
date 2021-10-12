<?php

namespace App\Http\Controllers\Hotel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('permission');
    }
    public function showAll(Request $request)
    {
        $roomList = [];
        for ($i=1; $i <= 10; $i++) { 
            $roomList[]=[
                'code' => 'DAT' . $i,
                'type' => 'expensive',
                'floor' => $i,
                'price' => $i*100 + 2*$i
            ];
        }
        $hotelName = "Nguyen Tien Dat";
        $hotelAddress = "Ha Noi";
        return view('hotel/index')->with([
            'roomList' => $roomList,
            'hotelName' => $hotelName,
            'hotelAddress' => $hotelAddress
        ]);
    }
    public function showDetail(Request $request)
    {
        $room = [
            'code' => 'DAT09',
            'type' => 'expensive',
            'floor' => 19,
            'price' => 20000
        ];
        $hotelName = "Nguyen Tien Dat";
        $hotelAddress = "Ha Noi";
        return view('hotel/view')->with([
            'room' => $room,
            'hotelName' => $hotelName,
            'hotelAddress' => $hotelAddress,
        ]);
    }
}

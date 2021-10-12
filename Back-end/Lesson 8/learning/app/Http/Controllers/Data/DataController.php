<?php

namespace App\Http\Controllers\Data;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataController extends Controller
{
    public function showHelloWorld(Request $request)
    {
        return view('data/helloworld');
    }
    public function PTB1(Request $request,$a,$b)
    {
        if($a == 0){
            if($b == 0) $result= 'PTVSN';
            else $result= 'PTVN';
        }
        else $result = 'x = ' . -$b/$a;
        return view('data/ptb1')->with([
            'result' => $result
        ]);
    }
    public function PTB2(Request $request,$a,$b,$c)
    {
        if($a == 0){
            if($b == 0){
                if($c == 0) $result= 'PTVSN';
                else $result = 'PTVN';
            } 
            else $result = 'x = '. -$c/$b;
        }
        else{
            $delta = $b*$b - 4*$a*$c;
            if($delta < 0) $result = 'PTVN';
            else if($delta == 0) $result = 'x = '. -$b/(2*$a);
            else{
                $result = 'x1 = '. number_format(( (-$b + sqrt($delta)) / (2*$a) ), 2) . ', ' . 'x2 = ' . number_format(( (-$b - sqrt($delta)) / (2*$a) ), 2);
            }
        } 
        return view('lesson01/ptb2')->with([
            'result' => $result,
            'a' => $a,
            'b' => $b,
            'c' => $c
        ]);
    }
}

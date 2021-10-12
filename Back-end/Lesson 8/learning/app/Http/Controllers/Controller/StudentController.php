<?php

namespace App\Http\Controllers\Controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index(Request $request)
    {
        $student = DB::table('students')->get();
        return view('student.index')->with([
            'student' => $student,
            'index' => 1
        ]);
    }

    public function save(Request $request)
    {
        // $fullname = $request->fullname;
        // $age = $request->age;
        // $address = $request->address;
        // $telephone = $request->telephone;
        // DB::table('students')->insert([
        //     'name' => $fullname,
        //     'age' => $age,
        //     'address' => $address,
        //     'telephone' => $telephone
        // ]);
        return view('student.add');
    }
}

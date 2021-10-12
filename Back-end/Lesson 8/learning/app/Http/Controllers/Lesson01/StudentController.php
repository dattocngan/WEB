<?php

namespace App\Http\Controllers\Lesson01;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function showStudent(Request $request)
    {
        $studentList = [];
        for ($i=1; $i <= 10; $i++) { 
            $studentList[] = [
                'fullname' => 'Nguyen Tien '. $i,
                'age' => 10 + $i,
                'address' => 'Ha Noi '.$i
            ];
        }
        return view('lesson01/student-list')->with([
            'studentList' => $studentList
        ]);
    }
}

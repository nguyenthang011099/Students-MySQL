<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    public function sortbyage(){
       // $students=Student::all();
        $students = DB::table('students')
            ->orderBy('age','desc')
            ->get();
        return view('sortbyage',['students'=>$students]);
    }
    public function sortbyclass(){
        $students = DB::table('students')
            ->orderBy('class')
            ->get();
        return view('sortbyclass',['students'=>$students]);
    }
    public function searchage(){
        $students = Student::where('class',8)
            ->get();
        return view('searchage',['students'=>$students]);
    }



}

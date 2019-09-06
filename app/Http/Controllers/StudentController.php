<?php

namespace App\Http\Controllers;

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
    public function search(){
        $students = DB::table('students')
            ->orderBy('class')
            ->get();
        return view('search',['students'=>$students]);
    }

}

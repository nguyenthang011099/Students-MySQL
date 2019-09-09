<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;
use Illuminate\Http\Request;

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
        $students = Student::where('class',10)
            ->get();
        return view('searchage',['students'=>$students]);
    }

    public function search(Request $request){
        $query= $request->get('query');
        $students=Student::where('class',"$query")
            ->get();
        return view('search',['students'=>$students]);
    }



}

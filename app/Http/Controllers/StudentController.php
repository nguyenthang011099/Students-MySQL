<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\Console\Input\Input;
use Illuminate\Http\Request;

class StudentController extends Controller
{
//    public function sortbyagedown(){
//       // $students=Student::all();
//        $students = DB::table('students')
//            ->orderBy('age','desc')
//            ->get();
//        return view('sortbyagedown',['students'=>$students]);
//    }
//
//    public function sortbyageup(){
//        // $students=Student::all();
//        $students = DB::table('students')
//            ->orderBy('age')
//            ->get();
//        return view('sortbyageup',['students'=>$students]);
//    }
//
//    public function sortbyclass(){
//        $students = DB::table('students')
//            ->orderBy('class')
//            ->get();
//        return view('sortbyclass',['students'=>$students]);
//    }
//    public function searchage(){
//        $students = Student::where('class',10)
//            ->get();
//        return view('searchage',['students'=>$students]);
//    }

    public function search(Request $request){
        $query= $request->get('query');
        $students=Student::where('class',"$query")
            ->get();
        return view('search',['students'=>$students]);
    }

    public function create(Request $request){
        $name=$request->get('name');
        $age=$request->get('age');
        $class=$request->get('class');

        $student= new Student();


        $student->name=$name;
        $student->age=$age;
        $student->class= $class;

        $student->save();

        return redirect()->back();

    }


}

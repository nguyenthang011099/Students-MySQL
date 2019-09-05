<?php

namespace App\Http\Controllers;

use App\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function view(){
        $students=Student::all();
        return view('view',['students'=>$students]);
    }
}

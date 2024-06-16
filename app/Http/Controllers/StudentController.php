<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $stu = Student::with('profile')->with('comments')->get();
        dd($stu);
    }

    public function store() {

        $stu = new Student();
        $stu->first_name = 'John';
        $stu->last_name = 'Doe';
        $stu->save();

        dd($stu);
    }


}

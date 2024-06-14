<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Student;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index() {
        $student = Student::find(1);
        dd($student->profile);
    }

    public function store() { 

        $student = Student::find(1);
        $profile = new Profile();
        $profile->student_id = $student->id;
        $profile->email = 'Lp2jH@example.com';
        $profile->phone = '1234567890';
        $profile->save();

        dd($profile->student);

    }
} 

<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('Students.index', [
            'students' => $students,
        ]);
    }

    public function create()
    {
        return view('Students.create');
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->first_name = $request->input('first_name');
        $student->last_name = $request->input('last_name');
        $student->gender = $request->input('gender');
        $student->birthday = $request->input('birthday');
        $student->save();
        return redirect()->route('index');
    }
}

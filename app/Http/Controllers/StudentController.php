<?php

namespace App\Http\Controllers;

use Inertia\Inertia;

class StudentController extends Controller
{
    public function index()
    {
        // Implement logic to fetch and return students
        $students = []; // Replace with your actual logic

         return Inertia::render('Students/Index', ['students' => $students]);
        
    }

    public function create()
    {
        return Inertia::render('Students/Create');
    }

    public function edit($student)
    {
        // Implement logic to fetch and return the specified student
        $studentData = []; // Replace with your actual logic

        return Inertia::render('Students/Edit', ['student' => $studentData]);
    }


public function test(){
    return view('test');
}


}

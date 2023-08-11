<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class frontendController extends Controller
{
    public function index()
    {
        $students = Student::all(); // retrieves all records from the "students" table 
        return view('index', compact('students'));
    }

    public function registration()
    {
        return view('registration');
    }
    public function login()
    {
        return view('login');
    }
}

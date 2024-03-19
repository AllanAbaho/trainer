<?php

namespace App\Http\Controllers;

use App\Models\Courses;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $courses = Courses::all();
        return view('welcome', ['courses' => $courses]);
    }

    public function courseDetails($id)
    {
        $course = Courses::where('id', $id)->first();
        return view('course-details', ['course' => $course]);
    }
}

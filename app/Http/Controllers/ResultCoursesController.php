<?php

namespace App\Http\Controllers;

use App\Course;

class ResultCoursesController extends Controller
{
    public function resultCourses() {
        $courses = Course::whereNotNull('link_origin')->get();
        return view('courses.result', compact('courses'));
    }
}

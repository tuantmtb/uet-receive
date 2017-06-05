<?php

namespace App\Http\Controllers;

use App\Course;
use App\StudentsCourses;
use App\User;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_count = User::count('*');
        $email_count = StudentsCourses::whereNotNull('sent_mail')->count();
        $course_count = Course::whereNotNull('link_origin')->count();
        return view('home', compact('user_count', 'email_count', 'course_count'));
    }

    public function introduction()
    {
        return view('introduction');
    }
}

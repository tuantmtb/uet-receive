<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Student;

class SubscribeHelperApiController extends Controller
{

    /**
     * @param $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function findStudentByCode($code)
    {
        $studentFind = Student::where('code', '=', $code)->get();
        if ($studentFind->count() < 1) {
            $output = [];
            $output["status"] = "not_found";
            $output["info"] = "If you want to hack system, anw say hi to me: fb.com/tuantmtb ;)";
            return response()->json($output);
        }
        $output = [];

        /**
         * @var Student
         */
        $student = $studentFind->first();
        $output["status"] = "success";
        $output["name"] = $student->name;
        $output["class"] = $student->clazz->name;
        $output["courses"] = $student->courses;
        $output["info"] = "If you want to hack system, anw say hi to me: fb.com/tuantmtb ;)";
        return response()->json($output);
    }


}

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
            return response()->json(null, 404);
        }
        $output = [];

        /**
         * @var Student
         */
        $student = $studentFind->first();
        $output["name"] = $student->name;
        $output["class"] = $student->clazz->name;
        $output["courses"] = $student->courses;
        return response()->json($output);
    }


}

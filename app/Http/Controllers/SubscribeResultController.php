<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Mail;
use Validator;

class SubscribeResultController extends Controller
{

    /**
     * Đăng ký
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'code' => 'integer|required|between:1,99999999',
            'email' => 'email|required|max:255',
            'g-recaptcha-response' => 'required|captcha'
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $studentFind = Student::where('code', '=', $request->code)->get();
        if ($studentFind->count() < 1) {
            \Session::flash('toastr', [
                [
                    'title' => 'Lỗi',
                    'message' => 'Mã sinh viên không tồn tại',
                    'level' => 'error'
                ]
            ]);
            return back();
        }
        /**
         * @var Student
         */
        $student = $studentFind->first();
        if ($student->user) {
            \Session::flash('toastr', [
                [
                    'title' => 'Đã đăng ký',
                    'message' => 'Bạn đã đăng ký với email là: ' . $student->user->email,
                    'level' => 'error'
                ]
            ]);
            return back();
        }


        $userFind = User::where('email', '=', $request->email)->get();
        if ($userFind->count() < 1) {
            // create user
            // TODO need test funcion
            $user = new User();
            $user->email = $request->email;
            $user->name = $student->name;
            $user->save();
            $student->user_id = $user->id;
            $student->save();
            \Session::flash('toastr', [
                [
                    'title' => 'Đăng ký thành công',
                    'message' => 'Hệ thống sẽ gửi email khi kết quả',
                    'level' => 'info'
                ]
            ]);
            return back();
        } else {
            // user đã tồn tại
            $user = $userFind->first();
            if (!$user->student->code == $request->code) {
                // tông tại user nhưng đăng ký ở code khác
                \Session::flash('toastr', [
                    [
                        'title' => 'Lỗi',
                        'message' => 'Email này đã đăng ký cho MSV: ' . $user->student->code,
                        'level' => 'error'
                    ]
                ]);
                return back();
            } else {
                // đăng ký rồi: trùng email và code
                \Session::flash('toastr', [
                    [
                        'title' => 'Đã đăng ký',
                        'message' => 'Bạn đã đăng ký. Hệ thống sẽ gửi email khi có kết quả.',
                        'level' => 'error'
                    ]
                ]);
                return back();
            }

        }


    }

    public function checkSubcribe()
    {
        $courses = Course::whereNotNull('link_origin')->get();

        foreach ($courses as $course) {

            /**
             * @var Student
             */
            $students = $course->students;
            foreach ($students as $student) {

                /**
                 * @var User
                 */
                $user = $student->user;
                if ($user != null && $user->email != null) {
//                    print_r($user->email);

                    try {
                        Mail::queue('layouts.mail.course_noti', ['course' => $course], function (Message $msg) use ($user, $course) {
                            $msg->to($user->email, $user->name)
                                ->subject('[' . config('app.name') . '] Đã có điểm môn' . $course->name);
                        });
                    } catch (\Exception $ignored) {

                    }
                }

            }

        }
    }
}

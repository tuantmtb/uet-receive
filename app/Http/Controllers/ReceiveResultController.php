<?php

namespace App\Http\Controllers;

use App\Course;
use GuzzleHttp\Client;
use Illuminate\Mail\Message;
use Mail;

class ReceiveResultController extends Controller
{
    public function reCheck()
    {
        $client = new Client(); //GuzzleHttp\Client
        $result = $client->post('http://www.coltech.vnu.edu.vn/news4st/test.php', [
            'form_params' => [
                'lstClass' => '823'
            ]
        ]);

        $body = $result->getBody()->getContents();
        $body = trim($body);
        $body = str_replace("\r\n", '', $body);
        $body = str_replace("\t", '', $body);
        $body = str_replace("\n", '', $body);

        $matches = [];
        $regex = '(<a href="[^"]*" class="newslist" target="_blank"><b>[^<]*<\/b><\/a>)';
        preg_match_all($regex, $body, $matches);

        foreach ($matches[0] as $a) {
            $full_name = [];
            preg_match('(<b>.*<\/b>)', $a, $full_name);
            $full_name = $full_name[0];
            $full_name = str_replace('<b>', '', $full_name);
            $full_name = str_replace('</b>', '', $full_name);

            $parts = preg_split('( - )', $full_name);
            $code = preg_replace('(\(.*\))', '', array_reverse($parts)[0]);

            /**
             * @var Course $course
             */
            $course = Course::whereCode($code)->first();
            if (!$course->link_origin) {
                $link_origin = [];
                preg_match('(/Contents\/attach\/.*\.pdf)', $a, $link_origin);
                $link_origin = 'http://www.coltech.vnu.edu.vn' . $link_origin[0];
                $course->link_origin = $link_origin;
                $course->save();

                foreach ($course->students as $student) {
                    $user = $student->user;
                    try {
                        Mail::queue('layouts.mail.course_noti', ['course' => $course], function (Message $msg) use ($user, $course) {
                            $msg->to($user->email, $user->name)
                                ->subject('[' . config('app.name') . '] Đã có điểm ' . $course->name);
                        });
                    } catch (\Exception $ignored) {
                    }
                }
            }
        }

        return redirect('/');
    }
}

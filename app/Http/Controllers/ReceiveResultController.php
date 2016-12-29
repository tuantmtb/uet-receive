<?php

namespace App\Http\Controllers;

use App\Course;
use App\Student;
use Carbon\Carbon;
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
        if ($result->getStatusCode() == 200) {


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
                if ($course != null && !$course->link_origin) {
                    $link_origin = [];
                    preg_match('(/Contents\/attach\/.*\.pdf)', $a, $link_origin);
                    $link_origin = 'http://www.coltech.vnu.edu.vn' . $link_origin[0];
                    $course->link_origin = $link_origin;
                    $course->save();
                }
            }
            echo '<div>reCheck UET success</div>';
            \Log::info('reCheck UET success ' . Carbon::now());
        } else {
            echo '<div>reCheck UET fail because site uet die</div>';
            \Log::info('reCheck UET fail because site uet die ' . Carbon::now());
        }
        return redirect('/');
    }

    /**
     * Kiểm tra những môn có trên hệ thống và sent mail đến subcribe
     */
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
                    if ($student->pivot->sent_mail == 1) {
                        // đã gửi mail
                        echo '<div>' . ($user->email) . ' - ' . $course->name . ' - sent before </div > ';
                        \Log::info(($user->email) . ' - ' . $course->name . ' - sent before - ' . Carbon::now());
                    } else {
                        $student->pivot->sent_mail = 1;
                        $student->pivot->save();
                        \Log::info(($user->email) . ' - ' . $course->name . ' - set queue send mail - ' . Carbon::now());
                        try {
                            Mail::later(5, 'layouts.mail.course_noti', ['course' => $course, 'user' => $user], function (Message $msg) use ($user, $course, $student) {
                                $msg->to($user->email, $user->name)
                                    ->subject('[' . config('app . name') . '] Đã có điểm môn ' . $course->name);
                                echo ' < div>' . ($user->email) . ' - ' . $course->name . ' - prepare sending mail </div > ';

                            });

                        } catch (\Exception $ignored) {
                            $student->pivot->sent_mail = null;
                            $student->pivot->save();
                            echo $ignored;

                            \Log::warning('Mail Exception - ' . $ignored);
                        }
                    }
                }
            }
        }
        echo '<div > Complete sent mail job </div > ';
        \Log::info('complete sent mail job ' . Carbon::now());

    }
}

<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * App\StudentsCourses
 *
 * @property int $student_id
 * @property int $course_id
 * @property bool $sent_mail
 * @property bool $sent_noti
 * @property bool $sent_chatbot
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\StudentsCourses whereCourseId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StudentsCourses whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StudentsCourses whereSentChatbot($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StudentsCourses whereSentMail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StudentsCourses whereSentNoti($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StudentsCourses whereStudentId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\StudentsCourses whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class StudentsCourses extends Model
{
    /**
     * @var string
     */
    protected $table = 'students_courses';


}

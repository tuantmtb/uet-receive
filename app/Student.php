<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * App\Student
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property Carbon $date
 * @property int $clazz_id
 * @property int $user_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \App\Clazz $clazz
 * @property-read \App\User $user
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Course[] $courses
 * @method static Builder|Student whereId($value)
 * @method static Builder|Student whereCode($value)
 * @method static Builder|Student whereName($value)
 * @method static Builder|Student whereDate($value)
 * @method static Builder|Student whereClazzId($value)
 * @method static Builder|Student whereUserId($value)
 * @method static Builder|Student whereCreatedAt($value)
 * @method static Builder|Student whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Student extends Model
{
    /**
     * @var string
     */
    protected $table = 'students';

    protected $fillable = ['code', 'name', 'date', 'clazz_id', 'user_id', 'created_at', '$updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function clazz()
    {
        return $this->belongsTo('App\Clazz');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function courses()
    {
        return $this->belongsToMany('App\Course', 'students_courses');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }


    /**
     * Assign course
     * @param $course
     */
    public function assignCourse($course)
    {
        $this->courses()->attach($course);
    }
}

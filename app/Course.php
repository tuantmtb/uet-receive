<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Course
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $terms_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereTermsId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \App\Term $term
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Student[] $students
 */
class Course extends Model
{
    protected $table = 'courses';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function term()
    {
        return $this->belongsTo('App\Term');
    }

    public function students()
    {
        return $this->belongsToMany('App\Student', 'students_courses');
    }

}
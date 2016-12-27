<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * App\Course
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property int $credit
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $term_id
 * @property-read \App\Term $term
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Student[] $students
 * @method static Builder|Course whereId($value)
 * @method static Builder|Course whereCode($value)
 * @method static Builder|Course whereName($value)
 * @method static Builder|Course whereCredit($value)
 * @method static Builder|Course whereCreatedAt($value)
 * @method static Builder|Course whereUpdatedAt($value)
 * @method static Builder|Course whereTermId($value)
 * @mixin \Eloquent
 */
class Course extends Model
{
    /**
     * @var string
     */
    protected $table = 'courses';
    
    /**
     * @var array
     */
    protected $fillable = ['name', 'code', 'term_id', 'credit'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function term()
    {
        return $this->belongsTo('App\Term');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function students()
    {
        return $this->belongsToMany('App\Student', 'students_courses');
    }

    /**
     * @param $student
     */
    public function assignStudent($student)
    {
        $this->students()->attach($student);
    }
}

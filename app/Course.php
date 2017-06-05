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
 * @property string $link_origin
 * @property string $link_remote
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property int $term_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Student[] $students
 * @property-read \App\Term $term
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereCredit($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereLinkOrigin($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereLinkRemote($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereTermId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Course whereUpdatedAt($value)
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
    protected $fillable = ['name', 'code', 'term_id', 'credit', 'link_origin', 'link_remote'];

    protected $hidden = ['created_at', 'updated_at', 'term_id', 'pivot'];

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
        return $this->belongsToMany('App\Student', 'students_courses')->withPivot(['sent_mail', 'sent_noti', 'sent_chatbot'])->withTimestamps();
    }

    /**
     * @param $student
     */
    public function assignStudent($student)
    {
        $this->students()->attach($student);
    }
}

<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * App\Clazz
 *
 * @property int $id
 * @property string $name
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Student[] $students
 * @method static \Illuminate\Database\Query\Builder|\App\Clazz whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Clazz whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Clazz whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Clazz whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Clazz extends Model
{
    /**
     * @var string
     */
    protected $table = 'clazzs';

    /**
     * @var array
     */
    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Student');
    }

}

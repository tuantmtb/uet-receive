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
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * @property-read Collection | Student[] $students
 * @method static Builder|Clazz whereId($value)
 * @method static Builder|Clazz whereName($value)
 * @method static Builder|Clazz whereCreatedAt($value)
 * @method static Builder|Clazz whereUpdatedAt($value)
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

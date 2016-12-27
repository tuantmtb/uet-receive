<?php

namespace App;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * App\Clazz
 *
 * @property int $id
 * @property string $name
 * @property Collection | Student[] $students
 * @method static Builder|Clazz whereId($value)
 * @method static Builder|Clazz whereName($value)
 * @mixin \Eloquent
 */
class Clazz extends Model
{
    protected $table = 'clazzs';

    protected $fillable = ['name'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Student');
    }

}

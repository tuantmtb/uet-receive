<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Clazz
 *
 * @property int $id
 * @property string $name
 * @property Collection $students
 * @method static \Illuminate\Database\Query\Builder|\App\Clazz whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Clazz whereName($value)
 * @mixin \Eloquent
 */
class Clazz extends Model
{


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function students()
    {
        return $this->hasMany('App\Student');
    }

}

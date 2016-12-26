<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Term
 *
 * @property int $id
 * @property string $name
 * @property string $termID
 * @method static \Illuminate\Database\Query\Builder|\App\Term whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Term whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Term whereTermID($value)
 * @mixin \Eloquent
 */
class Term extends Model
{
    public function courses()
    {
        return $this->hasMany('App\Courses');
    }
}

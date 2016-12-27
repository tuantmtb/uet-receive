<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * App\Term
 *
 * @property string $id
 * @property string $name
 * @property string $termID
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Course[] $courses
 * @method static Builder|Term whereId($value)
 * @method static Builder|Term whereName($value)
 * @method static Builder|Term whereTermID($value)
 * @mixin \Eloquent
 */
class Term extends Model
{
    /**
     * @var string
     */
    protected $table = 'terms';

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}

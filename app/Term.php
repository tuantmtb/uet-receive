<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Query\Builder;

/**
 * App\Term
 *
 * @property int $id
 * @property string $name
 * @property string $termID
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Course[] $courses
 * @method static \Illuminate\Database\Query\Builder|\App\Term whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Term whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Term whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Term whereTermID($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Term whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Term extends Model
{
    /**
     * @var string
     */
    protected $table = 'terms';

    /**
     * @var array
     */
    protected $fillable = ['name', 'termID'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}

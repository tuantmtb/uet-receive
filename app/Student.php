<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Student
 *
 * @property int $id
 * @property string $code
 * @property string $name
 * @property string $date
 * @property string $clazzs_id
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Student whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Student whereCode($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Student whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Student whereDate($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Student whereClazzsId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Student whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Student whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Student extends Model
{
    //
}

<?php

namespace App;

use Illuminate\Database\Query\Builder;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;

/**
 * App\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $image_path
 * @property string $phone
 * @property boolean $activated
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $readNotifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @method static Builder|Permission whereId($value)
 * @method static Builder|Permission whereName($value)
 * @method static Builder|Permission whereEmail($value)
 * @method static Builder|Permission wherePassword($value)
 * @method static Builder|Permission whereImagePath($value)
 * @method static Builder|Permission wherePhone($value)
 * @method static Builder|Permission whereActivated($value)
 * @method static Builder|Permission whereRememberToken($value)
 * @method static Builder|Permission whereUpdatedAt($value)
 * @method static Builder|Permission whereCreatedAt($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable;
    use EntrustUserTrait; // add this trait to your user model

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'image_path', 'phone', 'activated'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * @param string|array $permission
     * @param bool $requireAll
     * @return bool
     */
    public function hasPermissionTo($permission, $requireAll = false)
    {
        return $this->can($permission, $requireAll);
    }
}

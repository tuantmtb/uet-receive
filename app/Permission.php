<?php namespace App;

use Illuminate\Database\Query\Builder;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Zizaco\Entrust\EntrustPermission;

/**
 * App\Permission
 *
 * @property int $id
 * @property string $name
 * @property string $display_name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereDescription($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereDisplayName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Permission whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Permission extends EntrustPermission
{
    /**
     * @var string
     */
    protected $table = 'permissions';

    /**
     * @var array
     */
    protected $fillable = ['name', 'display_name', 'description'];

    /**
     * @param string $name
     * @return Permission
     * @throws PermissionDoesNotExist
     */
    public static function findByName($name)
    {
        $permission = static::whereName($name)->first();

        if (!$permission) {
            throw new PermissionDoesNotExist();
        }

        return $permission;
    }
}
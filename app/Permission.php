<?php namespace App;

use Illuminate\Database\Query\Builder;
use Spatie\Permission\Exceptions\PermissionDoesNotExist;
use Zizaco\Entrust\EntrustPermission;

/**
 * Class Permission
 *
 * @property integer $id
 * @property string $name
 * @property string $display_name
 * @property string $description
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static Builder|Permission whereId($value)
 * @method static Builder|Permission whereName($value)
 * @method static Builder|Permission whereDisplayName($value)
 * @method static Builder|Permission whereDescription($value)
 * @method static Builder|Permission whereUpdatedAt($value)
 * @method static Builder|Permission whereCreatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Role[] $roles
 */
class Permission extends EntrustPermission
{
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
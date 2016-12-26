<?php namespace App;

use Config;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Query\Builder;
use Spatie\Permission\Exceptions\RoleDoesNotExist;
use Zizaco\Entrust\EntrustRole;


/**
 * Class Role
 *
 * @property integer $id
 * @property string $name
 * @property string $display_name
 * @property string $description
 * @property-read Collection|User[] $users
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static Builder|Role whereId($value)
 * @method static Builder|Role whereName($value)
 * @method static Builder|Role whereDisplayName($value)
 * @method static Builder|Role whereDescription($value)
 * @method static Builder|Role whereUpdatedAt($value)
 * @method static Builder|Role whereCreatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Permission[] $perms
 */
class Role extends EntrustRole
{
    /**
     * @var string $table
     */
    protected $table = 'roles';

    /**
     * @param string $name
     * @return Role
     * @throws RoleDoesNotExist
     */
    public static function findByName($name)
    {
        $permission = static::whereName($name)->first();

        if (!$permission) {
            throw new RoleDoesNotExist();
        }

        return $permission;
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(Config::get('auth.providers.users.model'), Config::get('entrust.role_user_table'), Config::get('entrust.role_foreign_key'), Config::get('entrust.user_foreign_key'));
    }
}
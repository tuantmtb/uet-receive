<?php

use App\Permission;
use App\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Role::create([
            'name' => 'admin',
            'display_name' => 'Quản trị'
        ]);

        Role::create([
            'name' => 'student',
            'display_name' => 'Sinh viên'
        ]);
    }
}

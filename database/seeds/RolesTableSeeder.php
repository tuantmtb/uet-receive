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

        $manage = Permission::findByName('manage');

        Role::create([
            'name' => 'admin',
            'display_name' => 'Quản trị'
        ])->attachPermission($manage);

//        Role::create([
//            'name' => 'teacher',
//            'display_name' => 'Giảng viên'
//        ]);

        Role::create([
            'name' => 'student',
            'display_name' => 'Sinh viên'
        ]);
    }
}

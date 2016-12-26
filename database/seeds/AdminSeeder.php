<?php

use Illuminate\Database\Seeder;
use \App\User;
use Spatie\Permission\Models\Role;

/**
 * Class AdminSeeder
 */
class AdminSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * @var Role $admin
         */
        $admin = Role::findByName('admin');

        User::create([
            'name' => 'Nguyễn Văn Nhật',
            'email' => 'nguyenvannhat152@gmail.com',
            'image_path' => 'http://graph.facebook.com/100002307472131/picture',
            'password' => bcrypt('admin'),
            'remember_token' => str_random(10),
        ])->attachRole($admin);

        User::create([
            'name' => 'Trần Minh Tuấn',
            'email' => 'tuantmtb@gmail.com',
            'image_path' => 'https://freeiconshop.com/files/edd/person-flat.png',
            'password' => bcrypt('admin'),
            'remember_token' => str_random(10),
        ])->attachRole($admin);
        
    }
}

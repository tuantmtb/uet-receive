<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*Begin system seeder*/
//        $this->call(ScaffoldInterfacesSeeder::class);
        $this->call(PermissionsTableSeeder::class);

        // Require call before: PermissionsTableSeeder
        $this->call(RolesTableSeeder::class);

        // Require call before: RolesTableSeeder, PermissionsTableSeeder
        $this->call(AdminSeeder::class);
        /*End system seeder*/
    }
}

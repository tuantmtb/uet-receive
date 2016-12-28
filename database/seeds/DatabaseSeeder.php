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
        $this->call(RolesTableSeeder::class);

        // Require call before: RolesTableSeeder
//        $this->call(AdminSeeder::class);

        $this->call(DumpJsonDataSeeder::class);
    }

}

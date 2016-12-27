<?php

use Illuminate\Database\Seeder;

class DumpJsonDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $storagePath = Storage::disk('local')->getDriver()->getAdapter()->getPathPrefix();
        $json_path = $storagePath . "dump/example.json";
        $data = File::get($json_path);
    }
}

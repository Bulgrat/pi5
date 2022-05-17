<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

Class PlatformSeeder extends Seeder
{
    public function run()
    {
        DB::table('platforms')->insert([
            'name' => 'Windows'
        ]);
        DB::table('platforms')->insert([
            'name' => 'Mac',
        ]);
        DB::table('platforms')->insert([
            'name' => 'Android',
        ]);
        DB::table('platforms')->insert([
            'name' => 'iOS',
        ]);
    }
}

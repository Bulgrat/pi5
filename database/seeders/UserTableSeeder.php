<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'pix' => '123456',
            'nickname' => 'Adminastro',
            'github' => 'AdminastroDev',
            'password' => Hash::make('admin123'),
            'isAdmin' => 1
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->insert([
            'name' => 'Aventura',
        ]);

        DB::table('categorias')->insert([
            'name' => 'Ação',
        ]);
        DB::table('categorias')->insert([
            'name' => 'Ação e aventura',
        ]);
        
        DB::table('categorias')->insert([
            'name' => 'Battle Royale',
        ]);

        DB::table('categorias')->insert([
            'name' => 'FPS',
        ]);

        DB::table('categorias')->insert([
            'name' => 'Híbrido',
        ]);

        DB::table('categorias')->insert([
            'name' => 'Luta',
        ]);

        DB::table('categorias')->insert([
            'name' => 'MMORPG',
        ]);

        DB::table('categorias')->insert([
            'name' => 'MOBA',
        ]);

        DB::table('categorias')->insert([
            'name' => 'Puzzle',
        ]);

        DB::table('categorias')->insert([
            'name' => 'Roguelike',
        ]);

        DB::table('categorias')->insert([
            'name' => 'RTS',
        ]);

        DB::table('categorias')->insert([
            'name' => 'Terror',
        ]);
    }
}

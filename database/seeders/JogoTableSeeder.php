<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JogoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('jogos')->insert([
            'name' => 'Minecraft',
            'images' => 'Redstone',
            'video' => 'youtube.com',
            'desc' => 'Great games',
            'price' => '351',
            'user_id' => '1',
            'categoria_id' => '1',
            'platform_id' => '1',
            'link_dowload' => 'youtube.com',
        ]);
        DB::table('jogos')->insert([
            'name' => 'Resident Evil',
            'images' => 'Desent eagle',
            'video' => 'youtube.com',
            'desc' => 'Great games',
            'price' => '311',
            'user_id' => '1',
            'categoria_id' => '5',
            'platform_id' => '1',
            'link_dowload' => 'youtube.com',
        ]);
        DB::table('jogos')->insert([
            'name' => 'Genshin Impact',
            'images' => 'Paimon',
            'video' => 'youtube.com',
            'desc' => 'Great games',
            'price' => '0',
            'user_id' => '1',
            'categoria_id' => '2',
            'platform_id' => '3',
            'link_dowload' => 'youtube.com',
        ]);
        DB::table('jogos')->insert([
            "name" => "Street-Fighter",
            "platform_id" => 2,
            "desc" => "Hadouken",
            "images" => "Ryu",
            "video" => "Combo op.mp4",
            "price" => "20.00",
            "user_id" => 2,
            "categoria_id" => 7,
            "link_dowload" => "www.streetfighter.com"
        ]);
        DB::table('jogos')->insert([
            "name" => "BattleField",
            "platform_id" => 2,
            "desc" => "Arma guerra",
            "images" => "Tiro",
            "price" => "20.00",
            "video" => "guerra.mp4",
            "categoria_id" => 5,
            "user_id" => 2,
            "link_dowload" => "www.guerra.com"
        ]);
    }
}

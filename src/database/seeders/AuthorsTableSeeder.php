<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthorsTableSeeder::class);
        DB::table('fruits')->insert([
            ['name' => 'キウイ', 'image_path' => 'assets/img/kiwi.png'],
            ['name' => 'ストロベリー', 'image_path' => 'assets/img/strawberry.png'],
            ['name' => 'オレンジ', 'image_path' => 'assets/img//orange.png'],
            ['name' => 'スイカ', 'image_path' => 'assets/img/watermelon.png'],
            ['name' => 'ピーチ', 'image_path' => 'assets/img/peach.png'],
            ['name' => 'シャインマスカット', 'image_path' => 'assets/img/shine_muscat.png'],
            ['name' => 'パイナップル', 'image_path' => 'assets/img/pineapple.png'],
            ['name' => 'ブドウ', 'image_path' => 'assets/img/grape.png'],
            ['name' => 'バナナ', 'image_path' => 'assets/img/banana.png'],
            ['name' => 'メロン', 'image_path' => 'assets/img/melon.png'],
        ]);
    }
}

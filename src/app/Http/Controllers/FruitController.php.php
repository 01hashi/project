<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FruitController.php extends Controller
{
    public function index(Request $request)
    {
        $images = [
            ['src' => asset('assets/img/kiwi.png'), 'alt' => 'キウイ'],
            ['src' => asset('assets/img/strawberry.png'), 'alt' => 'ストロベリー'],
            ['src' => asset('assets/img/orange.png'), 'alt' => 'オレンジ'],
            ['src' => asset('assets/img/watermelon.png'), 'alt' => 'スイカ'],
            ['src' => asset('assets/img/peach.png'), 'alt' => 'ピーチ'],
            ['src' => asset('assets/img/muscat.png'), 'alt' => 'シャインマスカット'],
            ['src' => asset('assets/img/pineapple.png'), 'alt' => 'パイナップル'],
            ['src' => asset('assets/img/grapes.png'), 'alt' => 'ブドウ'],
            ['src' => asset('assets/img/banana.png'), 'alt' => 'バナナ'],
            ['src' => asset('assets/img/melon.png'), 'alt' => 'メロン'],

    }
}

$perPage = 6;
$page = $request->get('page', 1);

$total = count($images);
$totalPages = ceil($total / $perPage);

$pagedImages =
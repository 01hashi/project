<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>検索結果 - 商品検索ページ</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/search.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">
                mogitate
            </a>
        </div>
    </header>

    <main>
        <h1>検索結果</h1>
        <!-- 検索フォームに戻るリンク -->
        <div>
            <a href="{{ url('/') }}">トップに戻る</a>
        </div>

        <!-- 検索キーワード表示 -->
        @if(request('search'))
            <p>検索キーワード: "{{ request('search') }}"</p>
        @endif

        <!-- 商品リスト -->
        <div class="product-list">
            @if($products->isEmpty())
                <p>該当する商品がありませんでした。</p>
            @else
                @foreach($products as $product)
                    <div class="product-item">
                        <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" />
                        <div class="product-info">
                            <p class="product-name">{{ $product->name }}</p>
                            <p class="product-price">¥{{ number_format($product->price) }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </main>
</body>
</html>
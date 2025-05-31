<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>商品検索結果</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/Index.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <a class="header__logo" href="/">mogitate</a>
        </div>
    </header>
    <form method="GET" action="{{ route('search') }}">
    <main>
        <h1>商品一覧</h1>

        <!-- 検索結果の情報とソート条件の表示 -->
        <div class="search-info">
            @if(request('search'))
                <p>検索キーワード: "{{ request('search') }}"</p>
            @endif
            @if(request('price_sort'))
                @if(request('price_sort') == 'sortPriceAsc')
                    <p>価格が安い順に並び替えました</p>
                @elseif(request('price_sort') == 'sortPriceDesc')
                    <p>価格が高い順に並び替えました</p>
                @endif
            @endif
        </div>

        <div class="product-list">
            @foreach($products as $product)
                <div class="product-item">
                    <img src="{{ asset($product->image_path) }}" alt="{{ $product->name }}" />
                    <div class="product-info">
                        <p class="product-name">{{ $product->name }}</p>
                        <p class="product-price">¥{{ number_format($product->price) }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>
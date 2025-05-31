<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>商品検索ページ</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>
<body>
  <header class="header">
    <div class="header__inner">
    <a class="header__logo" href="/">mogitate</a>
    </div>
  </header>
  
  <main>
  　<h1>商品一覧</h1>
    <div class="container">
        <!-- 検索バー -->
        <div class="search-bar">
            <form method="GET" action="{{ url('/search') }}">
            <form class="form" action="/contacts/search" method="post">
            <input type="text" name="search" placeholder="商品名で検索" />
                <button type="submit">検索</button>
            </form>
        </div>
        <div class="search-form__content">
        <h2>価格順で表示</h2>
        <select class="search-form__item-select" name="price_sort" placeholder="価格で並び替え" />
            <option value="sortPriceAsc">価格で並び替え</option>
            <option value="sortPriceAsc">価格が安い順</option>
            <option value="sortPriceAsc">価格が高い順</option>
        </select>
        </div>
        <div class="slider">
        <main class="product-list">
            <div class="product-item"></div>
            <img src="{{asset('assets/img/kiwi.png') }}" alt="キウイ" />
                <div class="product-info">
                <p class="product-name">キウイ</p>
                <p class="product-price">¥800</p>
                </div>
            </div>
            <div class="product-item"></div>
            <img src="{{asset('assets/img/strawberry.png') }}" alt="ストロベリー">
                <div class="product-info">
                <p class="product-name">ストロベリー</p>
                <p class="product-price">¥1200</p>
                </div>
            </div>
            <div class="product-item"></div>
            <img src="{{asset('assets/img/orange.png') }}" alt="オレンジ" />
                <div class="product-info">
                <p class="product-name">オレンジ</p>
                <p class="product-price">¥850</p>
                </div>
            </div>
            <div class="product-item"></div>
            <img src="{{asset('assets/img/watermelon.png') }}" alt="スイカ" />
                <div class="product-info">
                <p class="product-name">スイカ</p>
                <p class="product-price">¥700</p>
                </div>
            </div>
            <div class="product-item"></div>
            <img src="{{asset('assets/img/peach.png') }}" alt="ピーチ" />
                <div class="product-info">
                <p class="product-item">ピーチ</p>
                <p class="product-price">¥1000</p>
                </div>
            </div>
            <div class="product-item"></div>
            <img src="{{asset('assets/img/muscat.png') }}" alt="シャインマスカット" />
                <div class="product-info">
                <p class="product-name">シャインマスカット</p>
                <p class="product-price">¥1400</p>
                </div>
            </div>
            <div class="product-item"></div>
            <img src="{{asset('assets/img/pineapple.png') }}" alt="パイナップル" />
                <div class="product-info">
                <p class="product-name">パイナップル</p>
                <p class="product-price">¥800</p>
                </div>
            </div>
            <div class="product-item"></div>
            <img src="{{asset('assets/img/grapes.png') }}" alt="ブドウ" />
                <div class="product-info">
                <p class="product-name">ブドウ</p>
                <p class="product-price">¥1100</p>
                </div>
            </div>
            <div class="product-item"></div>
            <img src="{{asset('assets/img/banana.png') }}" alt="バナナ" />
                <div class="product-info">
                <p class="product-name">バナナ</p>
                <p class="product-price">¥600</p>
                </div>
            </div>
            <div class="product-item"></div>
            <img src="{{asset('assets/img/melon.png') }}" alt="メロン" />
                <div class="product-info">
                <p class="product-name">メロン</p>
                <p class="product-price">¥900</p>
                </div>
            </div>
        </div>
        </main>
    </div>
</body>
</html>


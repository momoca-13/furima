<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <header class="top-header">
        <div class="top-header__logo">
            <img src="/storage/logo.svg" alt="coachtech">
        </div>

        <div class="search-text"><a href="">なにかお探しですか？</a></div>

     
          <nav>
            <ul class="header-nav">
                @if (Auth::check())
              <li class="header-nav__item">
                <a class="header-nav__link" href="/mypage">マイページ</a>
              </li>
              <li class="header-nav__item">
                <form class="form" action="/logout" method="post">
                    @csrf
                  <button class="header-nav__button">ログアウト</button>
                </form>
              </li>
              @endif
            </ul>
          </nav>
        </div>
    </header>

    <main>
        

        <div class="product-contents">
            @foreach ($products as $product)
                <div class="product-content">
                    <a href="/products/detail/{{$product->id}}" class="product-link"></a>
                    <img src="{{ Storage::url($product['image']) }}" alt="商品画像" class="img-content"/>
                    <div class="detail-content">
                        <p>{{ $product['image'] }}</p>
                        <p>{{ $product['name'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </main>

</body>
</html>

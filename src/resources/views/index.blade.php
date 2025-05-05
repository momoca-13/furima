<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>商品一覧画面</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<body>
    <header class="top-header">
        <div class="top-header__logo">
            <img src="/storage/logo.svg" alt="coachtech">
        </div>

        <div class="search-text"><a href="">なにをお探しですか？</a></div>
          <nav>
            <ul class="header-nav">
                @if (Auth::check())
                <li class="header-nav__item">
                <form class="form" action="/logout" method="post">
                    @csrf
                  <button class="header-nav__button">ログアウト</button>
                </form>
                </li>
                <li class="header-nav__item">
                <a class="header-nav__link" href="/mypage">マイページ</a>
              </li>
                @endif
            </ul>
          </nav>
    </header>

    <main>
        

        <div class="product-contents">
            @foreach ($products as $product)
                <div class="product-card">
                    <a href="/products/detail/{{$product->id}}" class="product-link">
                     <img src="{{ asset($product->image) }}" alt="{{ $product->name }}">
                      <div class="detail-content">
                      <p>{{ $product->image }}</p>
                        
                      </div>
                    </a>
                </div>
                
            @endforeach
        </div>
    </main>

</body>
</html>

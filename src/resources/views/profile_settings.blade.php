<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>プロフィール設定画面_初回ログイン時</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/common.css') }}">
    <link rel="stylesheet" href="{{ asset('css/profile_settings.css') }}">
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

    <div class="profile-form__content">
      <div class="profile-form__heading">
       <h2>プロフィール設定</h2>
      </div>
    <div class="profile__image">
        <div class="plofile__text">画像を選択する</div>
        <input id="image" type="file" name="image">
        <form class="form" action="/" method="get">
     @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">ユーザー名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" value="{{ old('name') }}"/>
        </div>
        <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">郵便番号</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="postcode" value="{{ old('postcode') }}"/>
        </div>
        <div class="form__error">
          @error('postcode')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address" value="{{ old('address') }}"/>
        </div>
        <div class="form__error">
          @error('address')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="building" value="{{ old('building') }}"/>
        </div>
      </div>
    </div>
    <div class="form__button">
      <button class="form__button-submit" type="submit">更新する</button>
    </div>
  </form>
</body>

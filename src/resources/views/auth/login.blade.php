<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/auth/login.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <h1>FashionablyLate</h1>
            </div>
            <div>
                <a class="header__link" href="/register">register</a>
            </div>
        </div>
    </header>

    <main>
        <div class="login-form__content">
            <div class="login-form__heading">
                <h2>Login</h2>
            </div>

            <form class="form" action="/login" method="post">
                @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">メールアドレス</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email"  />
                    </div>
                    <div class="form__error">
                                 @error('email')
                                 {{ $message }}
                                 @enderror                       
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">パスワード</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="password" name="password"  />
                    </div>
                    <div class="form__error">
                                 @error('password')
                                 {{ $message }}
                                 @enderror                       
                    </div>
                </div>
            </div>

            <div class="form__button">
                <button class="form__button-submit" type="submit">ログイン</button>
            </div>
            </form>

        </div>
    </main>
</body>

</html>
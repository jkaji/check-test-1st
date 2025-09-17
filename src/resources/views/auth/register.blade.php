<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/auth/register.css') }}" />
</head>
<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <h1>FashionablyLate</h1>
            </div>
            <div>
                <a class="header__link" href="/login">login</a>
            </div>
        </div>
    </header>

    <main>
        <div class="register-form__content">
            <div class="register-form__heading">
                <h2>Register</h2>
            </div>

            <form class="form" action="/register" method="post">
                @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <p class="form__label--item">お名前</p>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="name" />
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
                <button class="form__button-submit" type="submit">登録</button>
            </div>
            </form>

        </div>
    </main>
</body>

</html>
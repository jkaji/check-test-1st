<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FashionablyLate</title>
    <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}" />
</head>

<body>
    <header class="header">
        <div class="header__inner">
            <div class="header__logo">
                <h1>FashionablyLate</h1>
            </div>
        </div>
    </header>

    <main>
        <div class="contact-form__content">
            <div class="contact-form__heading">
                <h2>Contact</h2>
            </div>

            <form class="form" action="/confirm" method="post">
                @csrf
            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お名前</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <div class="form__input--last_name">
                            <input type="text" name="last_name" placeholder="例:山田" value="{{ old('last_name') }}" />
                        </div>
                        <div class="form__error">
                                 @error('last_name')
                                 {{ $message }}
                                 @enderror
                        </div>
                        <div class="form__input--first_name">
                            <input type="text" name="first_name" placeholder="例：太郎" value="{{ old('first_name') }}" />
                        </div>
                        <div class="form__error">
                                 @error('first_name')
                                 {{ $message }}
                                 @enderror                                 
                        </div>
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">性別</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <div class="form__input--gender">
                            <input type="radio" name="gender" value="男性" checked />男性
                            <input type="radio" name="gender" value="女性" />女性
                            <input type="radio" name="gender" value="その他" />その他
                        </div>
                    </div>
                    <div class="form__error">
                                 @error('gender')
                                 {{ $message }}
                                 @enderror
                    </div>
                </div>
            </div>

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">メールアドレス</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="email" name="email" placeholder="例：test@example.com" value="{{ old('email') }}" />
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
                    <span class="form__label--item">電話番号</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <div class="form__input--tel">
                            <input type="tel" name="tel" placeholder="080" value="{{ old('tel') }}" /> -
                            <input type="tel" name="tel" placeholder="1234" value="{{ old('tel') }}"/> -
                            <input type="tel" name="tel" placeholder="5678" value="{{ old('tel') }}"/>
                        </div>
                    </div>
                    <div class="form__error">
                                 @error('tel')
                                 {{ $message }}
                                 @enderror                                                         
                    </div>
              </div>
            </div>            

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">住所</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <input type="text" name="address" placeholder="例：東京都渋谷区千駄ヶ谷1-2-3" value="{{ old('address') }}"/>
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
                        <input type="text" name="building" placeholder="例：千駄ヶ谷マンション101" value="{{ old('building') }}"/>
                    </div>
                </div>
            </div> 

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの種類</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--text">
                        <div class="form__input--category">
                            <input type="text" name="category_id" placeholder="選択してください" value="{{ old('category_id') }}"/>
                        </div>
                    </div>
                    <div class="form__error">
                                 @error('category_id')
                                 {{ $message }}
                                 @enderror                                                         
                    </div>
              </div>
            </div>     

            <div class="form__group">
                <div class="form__group-title">
                    <span class="form__label--item">お問い合わせの内容</span>
                    <span class="form__label--required">※</span>
                </div>
                <div class="form__group-content">
                    <div class="form__input--textarea">
                        <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" value="{{ old('detail') }}"></textarea>
                    </div>
                    <div class="form__error">
                                 @error('detail')
                                 {{ $message }}
                                 @enderror                                                         
                    </div>
              </div>
            </div>     

            <div class="form__button">
                <button class="form__button-submit" type="submit">確認画面</button>
            </div>

            </form>
        </div>
    </main>
</body>

</html>
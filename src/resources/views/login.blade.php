@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
@endsection

@section('content')
<body>
    <main>
        <div class="register">
            <div class="register__header">
                <div class="header__logo">
                    <h1>PiGLy</h1>
                </div>
                <div class="register__title">
                    <h2>ログイン</h2>
                </div>

            <form class="form__group">
                <span class="form__label">メールアドレス</span>
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="メールアドレスを入力" class="textbox" />
                </div>
            </form>
            <form class="form__group">
                <span class="form__label">パスワード</span>
                <div class="form__input--text">
                    <input type="password" name="password" placeholder="パスワードを入力" class="textbox" />
                </div>
            </form>
            <div class="form__button">
            <button class="form__button-login" type="button">ログイン</button>
            </div>
            <a class="login" href="/register/step1">アカウント作成はこちら</a>
        </div>
    </main>
</body>
@endsection
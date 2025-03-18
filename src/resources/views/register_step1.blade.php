@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register_step1.css') }}" />
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
                    <h2>新規会員登録</h2>
                </div>
            </div>

            <form class="form__group">
                <span class="form__label">お名前</span>
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="名前を入力" class="textbox" />
                </div>
            </form>
            <form class="form__group">
                <span class="form__label">メールアドレス</span>
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="メールアドレスを入力" class="textbox" />
                </div>
            </form>
            <form class="form__group">
                <span class="form__label">パスワード</span>
                <div class="form__input--text">
                    <input type="password" name="password" placeholder="パスワードを入力" class="textbox" />
                </div>
            </form>
            <div class="form__button">
            
            </div>
            <a class="login" href="/login">ログインはこちら</a>
        </div>
    </main>
</body>
@endsection




@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/register_step2.css') }}" />
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
                <span class="form__label">現在の体重</span>
                <div class="form__input--text">
                    <input type="text" name="name" placeholder="現在の体重を入力" class="textbox"  />kg
                </div>
            </form>
            <form class="form__group">
                <span class="form__label">目標の体重</span>
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="目標の体重を入力" class="textbox" />kg
                </div>
            </form>

            <div class="form__button">
            <button class="form__button-submit" type="submit">アカウント作成</button>
            </div>
        </div>
    </main>
</body>
@endsection

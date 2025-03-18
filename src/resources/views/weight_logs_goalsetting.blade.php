@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/weight_logs_goalsetting.css') }}" />
@endsection

@section('content')
<body>
    <header class="header">
        <div class="header__logo">
            <h1>PiGLy</h1>
        </div>
        <div class="header__inner">
            <a class="header__setting" href="/wight_logs/goal_setting">
            <img src="{{ asset('../img/setting.png') }}"  alt="設定の画像" class="img-setting"/>
                目標体重設定
            </a>
            <a class="header__logout" href="/login">
            <img src="{{ asset('../img/logout.png') }}"  alt="ログアウトの画像" class="img-setting"/>
                ログアウト
            </a>
        </div>
    </header>

    <main>
        <div class="weight_logs__content">
            <div class="weight_logs_goalsetting">
                <h2>目標体重設定</h2>
                <div class="weight_logs_textbox">
                    <input type="text" name="name" class="textbox"  />
                    <p class="unit">kg</P>
                </div>
            </div>
            <div class="form__button">
            <button class="form__button-return" type="button">戻る</button>
            <button class="form__button-update" type="button">更新</button>
            </div>
        </div>
    </main>


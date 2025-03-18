@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/weight_logs_update.css') }}" />
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
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/weight_logs.css') }}" />
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
            <form class="form__weight--goal">
                <div class="form__weight--target">
                    <span class="form__label">目標体重</span> <br />
                    <input type="text" class="text-weight" name="weight" placeholder="45.0" />kg
                </div>
                <div class="form__weight--target">
                    <span class="form__label">目標まで</span> <br />
                    <input type="text" class="text-weight" name="goal" placeholder="-1.5" />kg
                </div>
                <div class="form__weight--target">
                    <span class="form__label">最新体重</span> <br />
                    <input type="text" class="text-weight" name="latest_weight" placeholder="46.5" />kg
                </div>
            </form>
        </div>

        <div class="weight__log">
            <form class="form">
                <div class="form__date">
                    <input type="date" class="date" name="date" />～
                    <input type="date" class="date" name="date" />
                    <button class="form__button--search" type="button">検索</button>
                </div>
                <button class="form__button--addition" type="button">データ追加</button>
            </form>
            <div class="weight-log__table">
                <table class="weight-log__table--inner">
                    <tr class="weight-log__table--row">
                        <th class="weight-log__table--header">
                            <span class="weight-log__table--header-span">日付</span>
                            <span class="weight-log__table--header-span">体重</span>
                            <span class="weight-log__table--header-span">食事摂取カロリー</span>
                            <span class="weight-log__table--header-span">運動時間</span>
                            <span class="weight-log__table--header-span"></span>
                        </th>
                    </tr>
                    <tr class="weight-log__table--row">
                        <td class="weight-log__table--item">
                            <form class="form">
                                <div class="form__item">
                                    <input class="form__item--input"type="date"name="date"value="" />
                                    <input class="form__item--input"type="text"name="weight"value="" />
                                    <input class="form__item--input"type="text"name="calorie"value="" />
                                    <input class="form__item--input"type="text"name="exercise"value="" />
                                    <button class="form__button" type="button">編集</button>
                                </div>
                            </form>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </main>
</body>
@endsection
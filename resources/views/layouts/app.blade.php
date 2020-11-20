<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="買い物代行サービスのプライスパッドです。">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Styles -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
        integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/base/default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/layout/default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/module/module.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    {{-- favicon --}}
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    {{-- script --}}
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script type="text/javascript" src="{{ asset('js/hamburger-menu.js') }}"></script>

    {{-- title --}}
    <title>プライスパッド</title>
</head>

<body>
    <div id="app">
        <!-- header -->
        <header class="l-content-expanded header">
            <div class="hamburger-btn-wrap header-side">
                @if(!Request::is("auth/*"))
                <i class="fas fa-bars hamburger-btn" id="js-hamburger-btn"></i>
                @endif
            </div>
            <a href="" class="header-logo">PRICE PAD</a>
            <ul class="header-btns header-side">
                @if(!Request::is("auth/*"))
                <li class="header-btns-item"><a href=""><i class="fas fa-search fa-header"></i></a></li>
                <li class="header-btns-item"><a href=""><i class="fas fa-user fa-header"></i></a></li>
                <li class="header-btns-item"><a href=""><i class="fas fa-shopping-cart fa-header"></i></a></li>
                @endif
            </ul>
        </header>
        <!-- global nabigation -->
        @if(!Request::is("auth/*"))
        <nav class="l-content-expanded">
            <ul class="nav-menu" id="js-header-menu">
                <li><a href="" class="nav-menu-item"><i class="fas fa-cash-register"></i>お買い物をする</a></li>
                <li><a href="" class="nav-menu-item"><i class="fas fa-store"></i>出品店を見る</a></li>
                <li><a href="" class="nav-menu-item"><i class="fas fa-shopping-basket"></i>取次店を見る</a></li>
                <li><a href="" class="nav-menu-item"><i class="far fa-smile"></i>お買い物の仕方</a></li>
                <li><a href="" class="nav-menu-item"><i class="fas fa-info-circle"></i>お知らせ</a></li>
                <li><a href="" class="nav-menu-item"><i class="far fa-building"></i>企業情報</a></li>
            </ul>
            <div class="header-menu-background" id="js-header-menu-background"></div>
        </nav>
        @endif

        @yield('content')

        <!-- footer -->
        <footer class="l-content-expanded footer">
            <div class="footer-content">
                <div class="l-multicolumn-footer">
                    <div class="l-column">
                        <header>
                            <h3 class="footer-title">ご利用ガイド</h3>
                            <h3 class="footer-title-link"><a href="">ご利用ガイド</a></h3>
                        </header>
                        <p class="footer-detail">
                            <a href="" class="information-link footer-link">お買い物の仕方</a>
                        </p>
                        <p class="footer-detail">
                            <a href="" class="information-link footer-link">お支払い方法</a>
                        </p>
                        <p class="footer-detail">
                            <a href="" class="information-link footer-link">よくあるご質問</a>
                        </p>
                    </div>
                    <div class="l-column">
                        <header>
                            <h3 class="footer-title">当サイトについて</h3>
                            <h3 class="footer-title-link"><a href="">当サイトについて</a></h3>
                        </header>
                        <p class="footer-detail">
                            <a href="" class="information-link footer-link">ご利用規約</a>
                        </p>
                        <p class="footer-detail">
                            <a href="" class="information-link footer-link">個人情報保護方針</a>
                        </p>
                        <p class="footer-detail">
                            <a href="" class="information-link footer-link">特定商取引法に基づく表示</a>
                        </p>
                    </div>
                    <div class="l-column">
                        <header>
                            <h3 class="footer-title">会社案内</h3>
                            <h3 class="footer-title-link"><a href="">会社案内</a></h3>
                        </header>
                        <p class="footer-detail">
                            <a href="" class="information-link footer-link">会社情報</a>
                        </p>
                        <p class="footer-detail">
                            <a href="" class="information-link footer-link">お問い合わせ</a>
                        </p>
                    </div>
                </div>
                <p class="footer-copy"><small>&copy; 2020 Price Pad Co,. Ltd. All Rights Reserved.</small></p>
            </div>
        </footer>
    </div>
</body>

</html>
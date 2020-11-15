@extends('layouts.app')

@section('content')
<!-- hero image -->
<section class="l-content-expanded hero">
    <img src="images/image-header.jpg" alt="PC用プライスパッドのヘッダー画像" class="header-img-pc">
    <img src="images/header-image-smartphone.jpg" alt="スマホ用プライスパッドのヘッダー画像" class="header-img-smartphone">
    <h1 class="catch-copy">
        <p>ネットでお買い物</p>
        <p>商品はご自宅近くの取次店にお届け</p>
        <p>買い物代行サービスの</p>
        <p>プライスパッドです</p>
    </h1>
</section>
<!-- recommended products -->
<section class="l-content-expanded section">
    <header class="section-header">
        <h2 class="section-title">本日のおすすめ</h2>
    </header>
    <div class="l-multicolumn recommended-products">
        <a href="" class="recommended-product">

            <img src="images/recomended_products/grape.png" alt="grape">
            <h3 class="recommended-item">ぶどう 300円</h3>
        </a>
        <a href="" class="recommended-product">
            <img src="images/recomended_products/peach.png" alt="peach">
            <h3 class="recommended-item">もも 400円</h3>
        </a>
        <a href="" class="recommended-product">
            <img src="images/recomended_products/apple.png" alt="apple">
            <h3 class="recommended-item">りんご 100円</h3>
        </a>
        <a href="" class="recommended-product">
            <img src="images/recomended_products/banana.png" alt="banana">
            <h3 class="recommended-item">バナナ 98円</h3>
        </a>
        <a href="" class="recommended-product">
            <img src="images/recomended_products/orange.png" alt="orange">
            <h3 class="recommended-item">みかん 80円</h3>
        </a>
    </div>
    <a href="" class="custom-btn"><i class="fas fa-angle-right custom-btn-angle"></i>商品をもっと見る</a>
</section>
<!-- how to buy -->
<section class="l-content-fixed section">
    <header class="section-header">
        <h2 class="section-title">お買い物の仕方</h2>
    </header>
    <div class="l-multicolumn-how-to-buy">
        <section class="how-to-buy-wrap">
            <div class="how-to-buy-num-wrap">
                <div class="how-to-buy-num">
                    <span>1</span>
                </div>
            </div>
            <img src="images/how-to-buy/supermarket.png" alt="supermarket" class="how-to-buy-img">
            <p class="how-to-buy-description">
                お買い物をしたい出品店(スーパー)を選択
            </p>
        </section>
        <section class="how-to-buy-wrap">
            <div class="how-to-buy-num-wrap">
                <div class="how-to-buy-num">
                    <span>2</span>
                </div>
            </div>
            <img src="images/how-to-buy/click-product.png" alt="click-product" class="how-to-buy-img">
            <p class="how-to-buy-description">
                画像をクリックして、購入する商品をカートに追加
            </p>
        </section>
        <section class="how-to-buy-wrap">
            <div class="how-to-buy-num-wrap">
                <div class="how-to-buy-num">
                    <span>3</span>
                </div>
            </div>
            <img src="images/how-to-buy/yaoya.png" alt="yaoya" class="how-to-buy-img">
            <p class="how-to-buy-description">
                ご自宅近くの取次店で商品をお受け取り
            </p>
        </section>
    </div>
    <div class="how-to-buy-btns">
        <a href="" class="custom-btn"><i class="fas fa-angle-right custom-btn-angle"></i>お買い物をする</a>
        <a href="" class="custom-btn"><i class="fas fa-angle-right custom-btn-angle"></i>お買い物の仕方詳細へ</a>
    </div>
</section>
<!-- information -->
<section class="l-content-fixed section">
    <header class="section-header">
        <h2 class="section-title">お知らせ</h2>
    </header>
    <div class="information-board">
        <div class="information-detail">
            <p class="information-row">
                <a href="" class="information-link">
                    <time datetime="2020-10-03" class="information-time">2020-10-03</time>
                    サーバーメンテナンスのお知らせ
                </a>
            </p>
            <p class="information-row">
                <a href="" class="information-link">
                    <time datetime="2020-10-03" class="information-time">2020-10-02</time>
                    出品店追加のお知らせ
                </a>
            </p>
            <p class="information-row">
                <a href="" class="information-link">
                    <time datetime="2020-10-01" class="information-time">2020-10-01</time>
                    取次店追加のお知らせ(田辺市内)
                </a>
            </p>
        </div>
    </div>
    <a href="" class="custom-btn"><i class="fas fa-angle-right custom-btn-angle"></i>お知らせ一覧へ</a>
</section>

@endsection
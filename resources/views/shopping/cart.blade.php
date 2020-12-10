@extends('layouts.app')

@section('content')
<!-- shopping -->
<section class="l-content-expanded">
    <h1 class="h1_title">カート</h1>
</section>
<section class="l-content-fixed">
    <h2 class="shopping-title">カートを確認してご注文を確定してください。</h2>
    <div class="cart-list">
        <div class="cart-item-title">
            <div class="item-name">
                商品名
            </div>
            <div class="price-num-wrap">
                <div class="price-num-flex">
                    <span class="item-price">
                        値段
                    </span>
                    <span class="cart-tax">
                        税率
                    </span>
                    <span class="item-num">
                        個数 
                    </span>
                    <span class="cart-subtotal">
                        小計
                    </span>
                </div>
            </div>
            <div class="item-btns">
                ボタン
            </div>
        </div>
        <div class="cart-item-row">
            <div class="item-name">
                和歌山県産トマト
            </div>
            <div class="price-num-wrap">
                <div class="price-num-flex">
                    <span class="item-price">
                        120円
                    </span>
                    <span class="cart-tax">
                        8%
                    </span>
                    <span class="item-num">
                        <input type="text" value="1" class="item-num-input">
                    </span>
                    <span class="cart-subtotal">
                        129円
                    </span>
                </div>
            </div>
            <div class="item-btns">
                <input type="submit" value="確認" class="cart-list-btn cart-del-btn">
                <input type="submit" value="削除" class="cart-list-btn cart-confirm-btn">
            </div>
        </div>
        <div class="cart-item-row">
            <div class="item-name">
                フッ素加工済こげつきにくいフライパン
            </div>
            <div class="price-num-wrap">
                <div class="price-num-flex">
                    <span class="item-price">
                        2,000円
                    </span>
                    <span class="cart-tax">
                        10%
                    </span>
                    <span class="item-num">
                        <input type="text" value="1" class="item-num-input">
                    </span>
                    <span class="cart-subtotal">
                        2,200円
                    </span>
                </div>
            </div>
            <div class="item-btns">
                <input type="submit" value="確認" class="cart-list-btn cart-del-btn">
                <input type="submit" value="削除" class="cart-list-btn cart-confirm-btn">
            </div>
        </div>
        <div class="cart-sum-wrap">
            <span>
                合計
            </span>
            <span>
                税込み
            </span>
            <span class="cart-sum">
                2,329円
            </span>
        </div>
    </div>
    <div class="cart-btns">
        <button type="submit" name="" class="cart-btn cart-order" onclick="location.href='/shopping/received'">注文を確定する</button>
        <button type="submit" name="" class="cart-btn cart-cancel">キャンセル</button>
        <button type="submit" name="" class="cart-btn cart-back">商品選択画面へ戻る</button>
    </div>
</section>

@endsection
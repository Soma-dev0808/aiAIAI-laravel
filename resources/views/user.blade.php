@extends('layouts.app')

@section('content')
<!-- user top -->
<section class="l-content-fixed user-top-section">
    <div class="l-multicolumn">
        <div class="user-top-btn-item">
            <a href="/select-shop" class="user-top-btn-link">
                <p>お買い物をする</p>
                <p><i class="fas fa-cash-register user-top-icon"></i></p>
            </a>
        </div>
        <div class="user-top-btn-item">
            <a href="" class="user-top-btn-link">
                <p>カートを見る</p>
                <p><i class="fas fa-shopping-cart user-top-icon"></i></p>
            </a>
        </div>
        <div class="user-top-btn-item">
            <a href="" class="user-top-btn-link">
                <p>ポイントを確認</p>
                <p><i class="fas fa-user user-top-icon"></i></p>
            </a>
        </div>
        <div class="user-top-btn-item">
            <a href="" class="user-top-btn-link">
                <p>アカウント情報</p>
                <p><i class="fas fa-user user-top-icon"></i></p>
            </a>
        </div>
    </div>
</section>

@endsection
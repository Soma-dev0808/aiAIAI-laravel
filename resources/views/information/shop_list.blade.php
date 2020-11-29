@extends('layouts.app')

@section('content')

<section class="l-content-expanded">
    <h1 class="h1_title">出品店一覧</h1>
</section>
<section class="l-content-fixed mb-5">
    <h3 class="text-center m-5 p-2 prefecture">和歌山県</h3>

    {{-- List --}}
    <div class="shop-list d-flex justify-content-center">
        <div class="logo-contaier">
            <img class="shop-logo" src="{{ asset('images/shops/value_house.png') }}" alt="shop">
        </div>

        <div class="shop-info-container">
            <a href="/information/branch-list" class="shop-link">
                <p class="shop-name">バリューハウス　富田川店</p>
                <p class="shop-detail">配達可能エリア：和歌山県　西牟婁郡</p>
            </a>
        </div>


    </div>

    <div class="shop-list d-flex justify-content-center">
        <div class="logo-contaier">
            <img class="shop-logo" src="{{ asset('images/shops/okuwa.png') }}" alt="shop">
        </div>
        <div class="shop-info-container">
            <a href="/information/branch-list" class="shop-link">
                <p class="shop-name">オークワ　パビリオンシティ田辺店</p>
                <p class="shop-detail">配達可能エリア：和歌山県　西牟婁郡</p>
            </a>
        </div>
    </div>

    <div class="shop-list d-flex justify-content-center">
        <div class="logo-contaier">
            <img class="shop-logo" src="{{ asset('images/shops/ever_green.jpg') }}" alt="shop">
        </div>
        <div class="shop-info-container">
            <a href="/information/branch-list" class="shop-link">
                <p class="shop-name">エバーグリーン　上富田店</p>
                <p class="shop-detail">配達可能エリア：和歌山県　西牟婁郡</p>
            </a>
        </div>
    </div>
</section>

@endsection
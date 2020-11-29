@extends('layouts.app')

@section('content')

<section class="l-content-expanded">
    <h1 class="h1_title">取次店一覧</h1>
</section>
<section class="l-content-fixed mb-5">
    <h3 class="text-center m-5 p-2 prefecture">バリューハウス富田川店</h3>

    {{-- List --}}
    <div class="shop-list d-flex justify-content-center">
        <div class="logo-contaier">
            <img class="shop-logo" src="{{ asset('images/branches/branch1.jpg') }}" alt="shop">
        </div>

        <div class="shop-info-container">
            <p class="shop-name">取次店１</p>
            <p class="shop-detail">住所：富田１</p>
        </div>


    </div>

    <div class="shop-list d-flex justify-content-center">
        <div class="logo-contaier">
            <img class="shop-logo" src="{{ asset('images/branches/branch1.jpg') }}" alt="shop">
        </div>
        <div class="shop-info-container">
            <p class="shop-name">取次店２</p>
            <p class="shop-detail">住所：富田２</p>
        </div>
    </div>

    <div class="shop-list d-flex justify-content-center">
        <div class="logo-contaier">
            <img class="shop-logo" src="{{ asset('images/branches/branch1.jpg') }}" alt="shop">
        </div>
        <div class="shop-info-container">
            <p class="shop-name">取次店３</p>
            <p class="shop-detail">住所：富田３</p>
        </div>
    </div>
</section>

@endsection
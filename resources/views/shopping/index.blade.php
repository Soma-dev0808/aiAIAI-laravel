@extends('layouts.app')

@section('content')
<!-- shopping -->
<section class="l-content-expanded">
    <h1 class="h1_title">商品選択</h1>
</section>
<section class="l-content-fixed">
    <h2 class="shopping-title">商品をクリックして選択してください。</h2>
    <div class="shopping-btn-wrapper">
        <a href="" class="custom-btn shopping-btn"><i class="fas fa-angle-right custom-btn-angle"></i>カートを確認する</a>
        <a href="" class="custom-btn shopping-btn"><i class="fas fa-angle-right custom-btn-angle"></i>カテゴリー選択に戻る</a>
    </div>
    <img src="images/shopping/VH_vegetable1.jpg" alt="画像1" class="shopping-item-img">
    <img src="images/shopping/VH_vegetable2.jpg" alt="画像2" class="shopping-item-img">
    <img src="images/shopping/VH_vegetable3.jpg" alt="画像3" class="shopping-item-img">
    <img src="images/shopping/VH_vegetable4.jpg" alt="画像4" class="shopping-item-img">
    <img src="images/shopping/VH_vegetable5.jpg" alt="画像5" class="shopping-item-img">
    <div class="shopping-btn-wrapper">
        <a href="" class="custom-btn shopping-btn"><i class="fas fa-angle-right custom-btn-angle"></i>カートを確認する</a>
        <a href="" class="custom-btn shopping-btn"><i class="fas fa-angle-right custom-btn-angle"></i>カテゴリー選択に戻る</a>
    </div>
</section>

@endsection
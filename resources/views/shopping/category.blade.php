@extends('layouts.app')

@section('content')
<!-- category -->
<section class="l-content-expanded">
    <h1 class="h1_title">カテゴリー選択</h1>
</section>
<section class="l-content-fixed">
    <h2 class="shopping-title">お買い物をしたい商品のカテゴリーを選択してください。</h2>
    <div class="category-wrapper">
        <div class="category-item">
            <a href="/shopping">
                <div class="category-img category-fruits"></div>
                <p>果 物</p>
            </a>
        </div>
        <div class="category-item">
            <a href="/shopping">
                <div class="category-img category-vegetable"></div>
                <p>野 菜</p>
            </a>
        </div>
        <div class="category-item">
            <a href="/shopping">
                <div class="category-img category-meat"></div>
                <p>お 肉</p>
            </a>
        </div>
    </div>
    <div class="category-wrapper">
        <div class="category-item">
            <a href="/shopping">
                <div class="category-img category-fish"></div>
                <p>お 魚</p>
            </a>
        </div>
        <div class="category-item">
            <a href="/shopping">
                <div class="category-img category-seasoning"></div>
                <p>日 用 品</p>
            </a>
        </div>
    </div>
</section>

@endsection
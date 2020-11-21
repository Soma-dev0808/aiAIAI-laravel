@extends('layouts.app')

@section('content')
<!-- guide -->
<section class="l-content-expanded">
    <h1 class="h1_title">お買い物をする</h1>
</section>
<section class="l-content-fixed">
    <h2 class="guide_title">１. 出品店を選択</h2>
    <p class="select-shop-description">お買い物をしたいスーパーを選択してください。</p>
    <select name="select-store" class="input-field">
        <option value="value-house">バリューハウス</option>
        <option value="okuwa">オークワ</option>
        <option value="evergreen">エバグリーン</option>
    </select>
    <h2 class="guide_title">２. 取次店を選択</h2>
    <p class="select-shop-description">商品を受け取るお店を選択してください。</p>
    <select name="select-store" class="input-field">
        <option value="hara">原商店</option>
        <option value="lawson">ローソン</option>
        <option value="yamamoto-seika">山本青果</option>
    </select>
    <h2 class="guide_title">３. お買い物をするボタンをクリック！</h2>
    <p class="select-shop-description">下のお買い物をするボタンをクリックすると、商品購入ページへ遷移します。</p>
    <a href="/category" class="select-shop-btn"><i class="fas fa-carrot carrot-icon"></i><span class="go-to-buy-btn">お買い物をする</span><i class="fas fa-carrot carrot-icon"></i></a>
</section>

@endsection
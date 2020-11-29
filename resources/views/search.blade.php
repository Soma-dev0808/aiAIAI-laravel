@extends('layouts.app')

@section('content')
<!-- news -->
<section class="l-content-expanded">
    <h1 class="h1_title">商品検索</h1>
</section>
<section class="l-content-fixed">
    <h2 class="guide_title">１. 出品店を選択</h2>
    <p class="select-shop-description">お買い物をしたいスーパーを選択してください。</p>
    <select name="select-store" class="input-field">
        <option value="value-house">バリューハウス</option>
        <option value="okuwa">オークワ</option>
        <option value="evergreen">エバグリーン</option>
    </select>
    <h2 class="guide_title">２. 商品名を入力</h2>
    <p class="select-shop-description">検索したい商品名を入力してください。</p>
    <input type="text" name="" placeholder="商品名を入力" class="input-field">
    <a href="/category" class="select-shop-btn"><i class="fas fa-search"></i><span class="go-to-buy-btn">検索する</span><i class="fas fa-search"></i></a>
</section>

@endsection
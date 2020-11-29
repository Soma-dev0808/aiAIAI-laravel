@extends('layouts.app')

@section('content')
<!-- guide -->
<section class="l-content-expanded">
    <h1 class="h1_title">お買い物の仕方</h1>
    <section class="l-content-fixed guide-content">
        <h2 class="guide_title">１. ログインする</h2>
        <div class="guide_description">
            <p class="guide_item">画面右上のログインマークなどからログインしてください。</p>
            <p class="guide_item">アカウントを作成されていない方は、</p>
            <p class="guide_item"><a class="guide-login-anchor" href="/auth/register">こちら</a>からアカウントを作成後、</p>
            <p class="guide_item">ログインしてください。</p>
        </div>
        <h2 class="guide_title">２. お買い物をするボタンをクリック</h2>
        <div class="guide_description">
            <p class="guide_item">ログイン後、表示される画面で「お買い物をする」ボタンをクリックしてください。</p>
            <img src="../images/guide/guide2.png" alt="お買い物をするボタンを選択する画像" class="img-guide">
        </div>
        <h2 class="guide_title">３. 出品店、取次店の選択</h2>
        <div class="guide_description">
            <p class="guide_item">出品店(お買い物をしたいスーパー)と取次店(商品をお受け取りになる店舗)を選択後、「お買い物をするボタン」をクリックしてください。</p>
            <img src="../images/guide/guide3.png" alt="出品店、取次店選択画面" class="img-guide">
        </div>
        <h2 class="guide_title">４. カテゴリーの選択</h2>
        <div class="guide_description">
            <p class="guide_item">お買い物をしたい商品のカテゴリーを選択してください。</p>
            <img src="../images/guide/guide4.png" alt="カテゴリー選択画面" class="img-guide">
        </div>
        <h2 class="guide_title">５. 商品の選択</h2>
        <div class="guide_description">
            <p class="guide_item">写真上でお買い物したい商品をクリックすると、商品がカートに追加されます。お買い物したい商品を全てカートに追加したら、「カートを確認するボタン」をクリックしてください。</p>
            <img src="../images/guide/guide5.png" alt="商品選択画面" class="img-guide">
        </div>
        <h2 class="guide_title">６. 注文の確定</h2>
        <div class="guide_description">
            <p class="guide_item">注文内容を確認し、間違いがなければ、「注文を確定するボタン」をクリックしてください。これで、注文は完了となります。</p>
            <img src="../images/guide/guide6.png" alt="注文確定画面" class="img-guide">
        </div>

    </section>
</section>

@endsection
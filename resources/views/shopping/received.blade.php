@extends('layouts.app')

@section('content')
<!-- shopping -->
<section class="l-content-expanded">
    <h1 class="h1_title">ご注文完了</h1>
</section>
<section class="l-content-fixed">
    <div class="received-content">
        <h2 class="received-title">
            ご注文を承りました。
        </h2>
        <div class="order-number-wrap">
            <p class="order-number">
                0123456789
            </p>
        </div>
        ご注文、誠にありがとうございます。
        <ul class="order-received-list">
            <li>
                ご注文番号はお問い合わせ等の際に必要となりますので、お控えください。
            </li>
            <li>
                ご登録のメールアドレスにご注文確認メールを送付いたしました。ご確認をお願いいたします。
            </li>
            <li>
                ご不明点がございましたら、弊社までお問い合わせください。<a href="/contact-form">お問い合わせ</a>
            </li>

        </ul>
    </div>
</section>

@endsection
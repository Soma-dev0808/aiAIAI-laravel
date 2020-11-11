@extends('layouts.app')

@section('content')
<!-- Login -->
<section class="l-content-fixed section">
    <div class="login-wrapper">
        <form class="login-form">
            <p class="login-title">ログイン</p>
            <input type="email" name="mail_address" placeholder="メールアドレス" autofocus class="input-field" />
            <input type="password" name="password" placeholder="パスワード" class="input-field" />
            <a class="login-anchor" href="#">パスワードをお忘れの方</a>
            <button class="auth-button">
                <span class="state">ログイン</span>
            </button>
        </form>
        <div class="no-account"><a class="login-anchor" href="#">アカウントをお持ちでない方</a></div>
        </p>
    </div>

</section>

@endsection
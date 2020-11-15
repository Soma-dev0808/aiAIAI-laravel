@extends('layouts.app')

@section('content')
<section class="l-content-fixed section">
    <div class="login-wrapper">
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        <form method="POST" class="login-form" action="{{ route('password.email') }}">
            @csrf

            <p class="login-title">{{ __('パスワードをお忘れの方') }}</p>

            <p　class="send-email-desc">登録されているメールアドレスへ<br>パスワード再設定のリンクを送信します。</p>

            <input id="email" type="email" class="input-field @error('email') is-invalid @enderror" name="email"
                value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="メールアドレス">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <a class="login-anchor" href="/auth/login">ログイン画面へ戻る</a>

            <button class="auth-button" type="submit">
                <span class="state">{{ __('送信') }}</span>
            </button>
        </form>
    </div>
</section>
@endsection
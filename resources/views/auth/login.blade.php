@extends('layouts.app')

@section('content')
<section class="l-content-fixed section">
    <div class="login-wrapper">
        <form method="POST" class="login-form" action="{{ route('login') }}">
            @csrf

            <p class="login-title">{{ __('ログイン') }}</p>

            <input id="email" type="email" placeholder="メールアドレス"
                class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password" type="password" placeholder="パスワード"
                class="input-field @error('password') is-invalid @enderror" name="password" required
                autocomplete="current-password">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <a class="login-anchor" href="/auth/password/reset">パスワードをお忘れの方</a>
            <button class="auth-button" type="submit">
                <span class="state">{{ __('ログイン') }}</span>
            </button>
        </form>
        <div class="no-account"><a class="login-anchor" href="/auth/register">アカウントをお持ちでない方</a></div>
    </div>
</section>
@endsection
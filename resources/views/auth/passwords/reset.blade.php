@extends('layouts.app')

@section('content')
<section class="l-content-fixed section">
    <div class="login-wrapper">
        <form method="POST" class="login-form" 　action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <p class="login-title">{{ __('パスワードのリセット') }}</p>


            {{-- デフォルトであったので、一応残しておきます --}}
            {{-- <input id="email" type="email" class="input-fieldl @error('email') is-invalid @enderror" name="email"
                    value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus　autofocus
            placeholder="メールアドレス">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror --}}

            <input id="password" type="password" class="input-field @error('password') is-invalid @enderror"
                name="password" required autocomplete="new-password" placeholder="新しいパスワード">

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="password-confirm" type="password" class="input-field " name="password_confirmation" required
                autocomplete="new-password" 　placeholder="パスワードの確認">

            <button class="auth-button" type="submit">
                {{ __('送信') }}
            </button>
        </form>
    </div>
</section>
@endsection
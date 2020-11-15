@extends('layouts.app')

@section('content')
<section class="l-content-fixed section">
    <div class="login-wrapper">
        <form method="POST" class="login-form contact-form" action="{{ route('login') }}">
            @csrf

            <p class="login-title">{{ __('お問い合わせフォーム') }}</p>

            <input id="name" type="text" placeholder="お名前" class="input-field @error('name') is-invalid @enderror"
                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

            @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input id="email" type="email" placeholder="メールアドレス"
                class="input-field @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"
                required autocomplete="email" autofocus>

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            <textarea name="content" id="content" class="input-field @error('content') is-invalid @enderror" cols="30"
                rows="10" required placeholder="お問合せ内容"></textarea>

            @error('content')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <button class="auth-button" type="submit">
                <span class="state">{{ __('送信') }}</span>
            </button>
        </form>

    </div>
</section>
@endsection
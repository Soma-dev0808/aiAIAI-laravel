@extends('layouts.app')

@section('content')
<section class="l-content-fixed section">
    <div class="login-wrapper">
        <form method="POST" class="login-form register-form" action="{{ route('register') }}">
            @csrf

            <p class="login-title">{{ __('アカウントの作成') }}</p>

            {{-- name --}}
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <input type="text" id="last_name" name="last_name" placeholder="姓" autofocus
                        class="input-field @error('last_name') is-invalid @enderror" value="{{ old('last_name') }}"
                        required autocomplete="last_name" />
                    @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12">
                    <input type="text" id="frist_name" name="frist_name" placeholder="名" autofocus
                        class="input-field @error('frist_name') is-invalid @enderror" value="{{ old('frist_name') }}"
                        required autocomplete="frist_name" />
                    @error('frist_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            {{-- name --}}
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <input type="text" id="last_name_kana" name="last_name_kana" placeholder="姓(カナ)" autofocus
                        class="input-field @error('last_name_kana') is-invalid @enderror"
                        value="{{ old('last_name_kana') }}" required autocomplete="last_name_kana" />
                    @error('last_name_kana')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-md-6 col-sm-12">
                    <input type="text" id="frist_name_kana" name="frist_name_kana" placeholder="名(カナ)" autofocus
                        class="input-field @error('frist_name_kana') is-invalid @enderror"
                        value="{{ old('frist_name_kana') }}" required autocomplete="frist_name_kana" />
                    @error('frist_name_kana')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            {{-- username --}}
            <input type="text" name="username" id="username" placeholder="ユーザーネーム"
                class="input-field @error('username') is-invalid @enderror" value="{{ old('username') }}" required
                autocomplete="username" />

            @error('username')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            {{-- email address --}}
            <input type="email" name="mail_address" id="mail_address" placeholder="メールアドレス" autofocus
                class="input-field @error('mail_address') is-invalid @enderror" value="{{ old('mail_address') }}"
                required autocomplete="mail_address" />

            @error('mail_address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            {{-- password --}}
            <input type="password" name="password" id="password" placeholder="パスワード" autofocus
                class="input-field @error('password') is-invalid @enderror" value="{{ old('password') }}" required
                autocomplete="password" />

            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            {{-- confirm password --}}
            <input type="password" name="confirm_password" id="confirm_password" placeholder="確認用パスワード" autofocus
                class="input-field @error('confirm_password') is-invalid @enderror"
                value="{{ old('confirm_password') }}" required autocomplete="confirm_password" />

            @error('confirm_password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            {{-- phone number --}}
            <input type="number" name="phone_number" id="phone_number" placeholder="電話番号"
                class="input-field @error('phone_number') is-invalid @enderror" value="{{ old('phone_number') }}"
                required autocomplete="phone_number" />

            @error('phone_number')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            {{-- address --}}
            <input type="text" placeholder="郵便番号" name="postal_code" id="postal_code"
                class="input-field @error('postal_code') is-invalid @enderror" value="{{ old('postal_code') }}" required
                autocomplete="postal_code" size="8" maxlength="8">

            @error('postal_code')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <div>
                <select type="text" name="prefecture" id="prefecture"
                    class="input-field prefecture-dropdown @error('prefecture') is-invalid @enderror" name="area"
                    required>
                    @foreach(config('pref') as $key => $pref)
                    <option value="{{ $pref }}">{{ $pref }}</option>
                    @endforeach
                </select>
            </div>


            @error('prefecture')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input type="text" placeholder="住所（市区町村）" class="input-field @error('city') is-invalid @enderror"
                value="{{ old('city') }}" required autocomplete="city" name="city" id="city" />

            @error('city')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input type="text" placeholder="住所（町域）" class="input-field @error('street') is-invalid @enderror"
                value="{{ old('street') }}" required autocomplete="street" name="street" id="street" />

            @error('street')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror

            <input type="text" placeholder="以降の住所" class="input-field @error('additional_address') is-invalid @enderror"
                value="{{ old('additional_address') }}" autocomplete="additional_address" name="additional_address"
                id="additional_address" />

            @error('additional_address')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror


            {{-- fogot pass --}}
            <button class="auth-button" type="submit">
                <span class="state">{{ __('登録') }}</span>
            </button>
        </form>
        <div class="no-account"><a class="login-anchor" href="/auth/login">アカウントを既にお持ちの方</a></div>

    </div>
</section>
@endsection
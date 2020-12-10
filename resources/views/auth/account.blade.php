@extends('layouts.app')

@section('content')
<!-- shopping -->
<section class="l-content-expanded">
    <h1 class="h1_title">アカウント情報</h1>
</section>
<section class="l-content-fixed">
    <div class="login-wrapper">
        <form method="POST" class="login-form register-form" action="">
            @csrf

            {{-- name --}}
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for="last_name">姓</label>
                    <input type="text" id="last_name" name="last_name" class="input-field" value="山田" disabled>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="frist_name">名</label>
                    <input type="text" id="frist_name" name="frist_name" class="input-field" value="太郎" disabled>
                </div>
            </div>

            {{-- name --}}
            <div class="row">
                <div class="col-md-6 col-sm-12">
                    <label for="last_name_kana">フリガナ(セイ)</label>
                    <input type="text" id="last_name_kana" name="last_name_kana" class="input-field" value="ヤマダ" disabled>
                </div>
                <div class="col-md-6 col-sm-12">
                    <label for="frist_name_kana">フリガナ(メイ)</label>
                    <input type="text" id="frist_name_kana" name="frist_name_kana" class="input-field" value="タロウ" disabled>
                </div>
            </div>

            {{-- username --}}
            <label for="username">ユーザーネーム</label>
            <input type="text" name="username" id="username" class="input-field" value="ヤマダタロウ" disabled>

            {{-- email address --}}
            <label for="mail_address">メールアドレス</label>
            <input type="email" name="mail_address" id="mail_address" class="input-field" value="yamada@gmail.com" disabled>

            {{-- phone number --}}
            <label for="phone_number">電話番号</label>
            <input type="number" name="phone_number" id="phone_number" class="input-field" value="0739111234" disabled>

            {{-- address --}}
            <label for="postal_code">郵便番号</label>
            <input type="text" name="postal_code" id="postal_code" class="input-field" value="646-0000" autocomplete="postal_code" disabled>

            <div>
                <label for="prefecture">都道府県</label>
                <select type="text" name="prefecture" id="prefecture" class="input-field" disabled>
                    @foreach(config('pref') as $key => $pref)
                    <option value="{{ $pref }}">{{ $pref }}</option>
                    @endforeach
                </select>
            </div>

            <label for="city">住所（市区町村）</label>
            <input type="text"  name="city" id="city" class="input-field" value="田辺市" disabled>

            <label for="street">住所（町域）</label>
            <input type="text" name="street" id="street" class="input-field" value="万呂" disabled>

            <label for="additional_address">以降の住所</label>
            <input type="text" name="additional_address" id="additional_address" class="input-field" value="10-1" disabled>

            <label for="authority">権限</label>
            <input type="text" name="authority" id="authority" class="input-field" value="一般利用者" disabled>

            {{-- fogot pass --}}
            <button class="auth-button" type="submit">
                <span class="state">{{ __('アカウント情報を修正する') }}</span>
            </button>
        </form>
    </div>
</section>

@endsection
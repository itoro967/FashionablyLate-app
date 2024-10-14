@extends('layouts/app')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/register-login.css') }}">
@endsection

@section('header-button')
<a href="/register" class="header__button">register</a>
@endsection

@section('page-title')
Login
@endsection

@section('main')
<form class="form" action="/login" method="post">
  @csrf
  <div class="form__inner">
    <div class="form__item">
      <label for="item--input-addr" class="item--label">メールアドレス</label>
      @if ($errors->has('email'))
      <div class="alert">
        <ul>
          @foreach ($errors->get('email') as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <input type="text" name="email" id="item--input-addr" class="item--input" placeholder="例: test@example.com" value="{{old('email')}}">
    </div>
    <div class="form__item">
      <label for="item--input-pass" class="item--label">パスワード</label>
      @if ($errors->has('password'))
      <div class="alert">
        <ul>
          @foreach ($errors->get('password') as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <input type="password" name="password" id="item--input-pass" class="item--input" placeholder="例: coachtech1106">
    </div>
    <input type="submit" value="ログイン" class="form__submit">
  </div>
</form>
@endsection
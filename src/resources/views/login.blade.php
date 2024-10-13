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
@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<form class="form" action="/login" method="post">
  @csrf
  <div class="form__inner">
    <div class="form__item">
      <label for="item--input-addr" class="item--label">メールアドレス</label>
      <input type="text" name="email" id="item--input-addr" class="item--input" placeholder="例: test@example.com">
    </div>
    <div class="form__item">
      <label for="item--input-pass" class="item--label">パスワード</label>
      <input type="password" name="password" id="item--input-pass" class="item--input" placeholder="例: coachtech1106">
    </div>
    <input type="submit" value="ログイン" class="form__submit">
  </div>
</form>
@endsection
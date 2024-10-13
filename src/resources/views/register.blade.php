@extends('layouts/app')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/register-login.css') }}">
@endsection

@section('header-button')
<a href="/login" class="header__button">login</a>
@endsection

@section('page-title')
Register
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
<form class="form" action="/register" method="post">
  @csrf
  <div class="form__inner">
    <div class="form__item">
      <label for="item--input-name" class="item--label">お名前</label>
      <input type="text" name="name" id="item--input-name" class="item--input" placeholder="例: 山田 太郎">
    </div>
    <div class="form__item">
      <label for="item--input-addr" class="item--label">メールアドレス</label>
      <input type="text" name="email" id="item--input-addr" class="item--input" placeholder="例: test@example.com">
    </div>
    <div class="form__item">
      <label for="item--input-pass" class="item--label">パスワード</label>
      <input type="password" name="password" id="item--input-pass" class="item--input" placeholder="例: coachtech1106">
    </div>
    <input type="submit" value="登録" class="form__submit">
  </div>
</form>
@endsection
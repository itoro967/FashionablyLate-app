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
<form class="form" action="/register" method="post">
  @csrf
  <div class="form__inner">
    <div class="form__item">
      <label for="item--input-name" class="item--label">お名前</label>
      @if ($errors->has('name'))
      <div class="alert">
        <ul>
          @foreach ($errors->get('name') as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif
      <input type="text" name="name" id="item--input-name" class="item--input" placeholder="例: 山田 太郎" value="{{old('name')}}">
    </div>
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
    <input type="submit" value="登録" class="form__submit">
  </div>
</form>
@endsection
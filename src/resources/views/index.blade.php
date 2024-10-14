@extends('layouts/app')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
@endsection

@section('page-title')
Contact
@endsection

@section('main')
<form class="form" action="/confirm" method="post">
  @csrf
  <div class="form__item">
    <label for="last-name" class="form__item-label">お名前<span class="char-red">※</span></label>
    <span class="form__item-input">
      <input type="text" name="last_name" id="last-name" class="form__input-name" placeholder="例: 山田" value="{{ old('last_name') }}">
      <input type="text" name="first_name" class="form__input-name" placeholder="例: 太郎" value="{{ old('first_name') }}">
    </span>
  </div>
  <div class="alert-message">
    @if ($errors->has('last_name'))
    {{$errors->get('last_name')[0]}}
    @endif
    @if ($errors->has('first_name'))
    {{$errors->get('first_name')[0]}}
    @endif
  </div>
  <div class="form__item">
    <label for="gender" class="form__item-label">性別<span class="char-red">※</span></label>
    <div>
      <span class="form__item-input __gender">
        <input type="radio" name="gender" value="1" id="gender" class="form__item-gender" checked @checked(old('gender')=="1" )>男性
        <input type="radio" name="gender" value="2" id="gender" class="form__item-gender" @checked(old('gender')=="2" )> 女性
        <input type="radio" name="gender" value="3" id="gender" class="form__item-gender" @checked(old('gender')=="3" )> その他
      </span>
    </div>
  </div>
  <div class="alert-message">
    @if ($errors->has('gender'))
    {{$errors->get('gender')[0]}}
    @endif
  </div>
  <div class="form__item">
    <label for="mail" class="form__item-label">メールアドレス<span class="char-red">※</span></label>
    <span class="form__item-input">
      <input type="text" id="mail" class="form__input-mail" placeholder="例: text@example.com" name="email" value="{{ old('email') }}">
    </span>
  </div>
  @if ($errors->has('email'))
  <div class="alert-message">
    {{$errors->get('email')[0]}}
  </div>
  @endif
  <div class="form__item">
    <label for="tel" class="form__item-label">電話番号<span class="char-red">※</span></label>
    <span class="form__item-input">
      <input type="tel" id="tel" class="form__input-tel" name="tell1" placeholder="080" value="{{ old('tell1') }}">-
      <input type="tel" class="form__input-tel" name="tell2" placeholder="1234" value="{{ old('tell2') }}">-<input type="tel" class="form__input-tel" name="tell3" placeholder="5678" value="{{ old('tell3') }}">
    </span>
  </div>
  <div class="alert-message">
    @if ($errors->has('tell1'))
    {{$errors->get('tell1')[0]}}
    @elseif ($errors->has('tell2'))
    {{$errors->get('tell2')[0]}}
    @elseif ($errors->has('tell3'))
    {{$errors->get('tell3')[0]}}
    @endif
  </div>
  <div class="form__item">
    <label for="addr" class="form__item-label">住所<span class="char-red">※</span></label>
    <span class="form__item-input">
      <input type="text" id="addr" class="form__input-addr" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3" name="address" value="{{ old('address') }}">
    </span>
  </div>
  @if ($errors->has('address'))
  <div class="alert-message">
    {{$errors->get('address')[0]}}
  </div>
  @endif
  <div class="form__item">
    <label for="addr2" class="form__item-label">建物名</label>
    <span class="form__item-input">
      <input type="text" id="addr2" class="form__input-addr2" placeholder="例: 千駄ヶ谷マンション101" name="building" value="{{ old('building') }}">
    </span>
  </div>
  <div class="form__item">
    <label for="" class="form__item-label">お問い合わせの種類<span class="char-red">※</span></label>
    <span class="form__item-input">
      <div class="select-wrapper">
        <select name="category_id" class="form__input-type">
          <option hidden value="">選択してください</option>
          @foreach($categories as $category)
          <option value="{{$category['id']}}" @selected(old('category_id')==$category['id'])>{{$category['content']}}</option>
          @endforeach
        </select>
      </div>
    </span>
  </div>

  @if ($errors->has('category_id'))
  <div class="alert-message">
    {{$errors->get('category_id')[0]}}
  </div>
  @endif
  <div class="form__item">
    <label for="content" class="form__item-label label-content">お問い合わせ内容<span class="char-red">※</span></label>
    <span class="form__item-input">
      <textarea name="detail" id="content" class="form__input-content" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
    </span>
  </div>
  @if ($errors->has('detail'))
  <div class="alert-message">
    {{$errors->get('detail')[0]}}
  </div>
  @endif
  <input type="submit" value="確認画面" class="form__submit">
</form>
@endsection
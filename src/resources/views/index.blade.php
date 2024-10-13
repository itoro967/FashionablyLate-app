@extends('layouts/app')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/index.css') }}">
@endsection

@section('page-title')
Contact
@endsection

@section('main')
<form class="form">
  <div class="form__item">
    <label for="last-name" class="form__item-label">お名前</label>
    <span class="form__item-input">
      <input type="text" name="last-name" id="last-name" class="form__input-name" placeholder="例: 山田">
      <input type="text" name="first-name" class="form__input-name" placeholder="例: 太郎">
    </span>
  </div>
  <div class="form__item">
    <label for="gender" class="form__item-label">性別</label>
    <div>
      <span class="form__item-input __gender">
        <input type="radio" name="gender" value="男性" id="gender" class="form__item-gender" checked>男性
        <input type="radio" name="gender" value="女性" id="gender" class="form__item-gender"> 女性
        <input type="radio" name="gender" value="その他" id="gender" class="form__item-gender"> その他
      </span>
    </div>
  </div>
  <div class="form__item">
    <label for="mail" class="form__item-label">メールアドレス</label>
    <span class="form__item-input">
      <input type="text" id="mail" class="form__input-mail" placeholder="例: text@example.com">
    </span>
  </div>
  <div class="form__item">
    <label for="tel" class="form__item-label">電話番号</label>
    <span class="form__item-input">
      <input type="tel" id="tel" class="form__input-tel" name="tel1" placeholder="080">-
      <input type="tel" class="form__input-tel" name="tel2" placeholder="1234">-<input type="tel" class="form__input-tel" name="tel3" placeholder="5678">
    </span>
  </div>
  <div class="form__item">
    <label for="addr" class="form__item-label">住所</label>
    <span class="form__item-input">
      <input type="text" id="addr" class="form__input-addr" placeholder="例: 東京都渋谷区千駄ヶ谷1-2-3">
    </span>
  </div>
  <div class="form__item">
    <label for="addr2" class="form__item-label">建物名</label>
    <span class="form__item-input">
      <input type="text" id="addr2" class="form__input-addr2" placeholder="例: 千駄ヶ谷マンション101">
    </span>
  </div>
  <div class="form__item">
    <label for="" class="form__item-label">お問い合わせの種類</label>
    <span class="form__item-input">
      <div class="select-wrapper">
        <select name="type" class="form__input-type">
          <option hidden>選択してください</option>
          <option>test1</option>
        </select>
      </div>
    </span>
  </div>
  <div class="form__item">
    <label for="content" class="form__item-label label-content">お問い合わせ内容</label>
    <span class="form__item-input">
      <textarea name="content" id="content" class="form__input-content" placeholder="お問い合わせ内容をご記載ください"></textarea>
    </span>
  </div>
  <input type="submit" value="確認画面" class="form__submit">
</form>
@endsection
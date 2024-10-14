@extends('layouts/app')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/confirm.css') }}">
@endsection

@section('page-title')
Confirm
@endsection

@section('main')
<form action="/thanks" class="form" method="post">
  @csrf
  <table class="form___table">
    <tr>
      <th>お名前</th>
      <td>{{ $confirm['last_name']." ".$confirm['first_name'] }}</td>
    </tr>
    <tr>
      <th>性別</th>
      <td>
        @switch($confirm['gender'])
        @case(1)男性@break
        @case(2)女性@break
        @case(3)その他@break
        @endswitch
      </td>
    </tr>
    <tr>
      <th>メールアドレス</th>
      <td>{{ $confirm['email']}}</td>
    </tr>
    <tr>
      <th>電話番号</th>
      <td>{{ $confirm['tell1'].$confirm['tell2'].$confirm['tell3']}}</td>
    </tr>
    <tr>
      <th>住所</th>
      <td>{{ $confirm['address']}}</td>
    </tr>
    <tr>
      <th>建物名</th>
      <td>{{ $confirm['building']}}</td>
    </tr>
    <tr>
      <th>お問い合わせの種類</th>
      <td>{{ $content['content']}}</td>
    </tr>
    <tr>
      <th>お問い合わせ内容</th>
      <td class="td_detail">{{ $confirm['detail']}}</td>
    </tr>
  </table>
  <input hidden name="last_name" value="{{ $confirm['last_name'] }}">
  <input hidden name="first_name" value="{{ $confirm['first_name'] }}">
  <input hidden name="gender" value="{{ $confirm['gender'] }}">
  <input hidden name="email" value="{{ $confirm['email'] }}">
  <input hidden name="tell1" value="{{ $confirm['tell1'] }}">
  <input hidden name="tell2" value="{{ $confirm['tell2'] }}">
  <input hidden name="tell3" value="{{ $confirm['tell3'] }}">
  <input hidden name="address" value="{{ $confirm['address'] }}">
  <input hidden name="building" value="{{ $confirm['building'] }}">
  <input hidden name="category_id" value="{{ $confirm['category_id'] }}">
  <textarea hidden name="detail">{{ $confirm['detail'] }}</textarea>
  <div class="form__submit">
    <input type="submit" value="送信" class="form__submit-button">
    <button type="submit" name="back" value="back" class="form__submit-back">修正</button>
  </div>
</form>
@endsection
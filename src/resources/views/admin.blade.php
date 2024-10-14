@extends('layouts/app')
@section('css')
<link rel="stylesheet" href="{{ asset('/css/admin.css') }}">

@endsection

@section('header-button')
<form action="/logout" method="post">
  @csrf
  <button type="submit" class="header__button">logout</button>
</form>
@endsection

@section('page-title')
Admin
@endsection

@section('main')
<div class="content">
  <form class="form" action="" method="get">
    <input type="text" name="word" class="form__input-text" placeholder="名前やメールアドレスを入力してください" value="{{request()->query('word')}}">
    <span class="select-wrapper">
      <select name="gender" class="form__input-gender">
        <option hidden value="">性別</option>
        <option value="1" @selected(request()->query('gender')=="1")>男性</option>
        <option value="2" @selected(request()->query('gender')=="2")>女性</option>
        <option value="3" @selected(request()->query('gender')=="3")>その他</option>
      </select>
    </span>
    <span class="select-wrapper">
      <select name="type" class="form__input-type">
        <option hidden value="">お問い合わせの種類</option>
        @foreach( $categories as $category )
        <option value="{{ $category['id'] }}" @selected(request()->query('type')==$category['id'])>{{$category['content']}}</option>
        @endforeach
      </select>
    </span>
    <span class="select-wrapper">
      <input type="date" name="date" class="form__input-date" value="{{request()->query('date')}}">
    </span>
    <button type="submit" class="form__submit">検索</button>
    <a href="/admin" class="form__reset-button">リセット</a>
  </form>
  <div class="action-bar">
    <button>エクスポート</button>
    <span>{{$contacts->links('vendor.pagination.default')}}</span>
  </div>
  <table class="table">

    <head>
      <tr>
        <th>お名前</th>
        <th>性別</th>
        <th>メールアドレス</th>
        <th>お問い合わせ種類</th>
        <th></th>
      </tr>
    </head>
    <tbody>
      @foreach($contacts as $contact)
      <tr>
        <td>{{ $contact['last_name']." ".$contact['first_name'] }}</td>
        <td>@switch($contact['gender'])
          @case(1)男性@break
          @case(2)女性@break
          @case(3)その他@break
          @endswitch
        </td>
        <td>{{ $contact['email']}}</td>
        <td>{{ $contact['category']['content']}}</td>
        <td>
          <a href="#{{$contact['id']}}" class="table__detail-button">詳細</a>
          <div class="modal" id="{{$contact['id']}}">
            <div class="modal__inner-top">
              <a href="#" class="close-button">×</a>
            </div>
            <table class="modal__table">
              <tr>
                <th>お名前</th>
                <td>{{ $contact['last_name']." ".$contact['first_name'] }}</td>
              </tr>
              <tr>
                <th>性別</th>
                <td>
                  @switch($contact['gender'])
                  @case(1)男性@break
                  @case(2)女性@break
                  @case(3)その他@break
                  @endswitch
                </td>
              </tr>
              <tr>
                <th>メールアドレス</th>
                <td>{{ $contact['email']}}</td>
              </tr>
              <tr>
                <th>電話番号</th>
                <td>{{ $contact['tell']}}</td>
              </tr>
              <tr>
                <th>住所</th>
                <td>{{ $contact['address']}}</td>
              </tr>
              <tr>
                <th>建物名</th>
                <td>{{ $contact['building']}}</td>
              </tr>
              <tr>
                <th>お問い合わせの種類</th>
                <td>{{ $contact['category']['content']}}</td>
              </tr>
              <tr>
                <th>お問い合わせ内容</th>
                <td class="td_detail">{{ $contact['detail']}}</td>
              </tr>
            </table>
            <form action="/delete" method="post">
              @csrf
              @method('DELETE')
              <input type="hidden" name="id" value="{{$contact['id']}}">
              <button type="submit" class="modal__delete">削除</button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
@extends('layouts/app')
@section('css')
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

@endsection
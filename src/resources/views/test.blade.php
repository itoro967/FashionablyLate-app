<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="{{ asset('/css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset('/css/test.css') }}">
</head>

<body>
  <header class="header">
    <span class="header__title">FashionablyLate</span>
    <a href="" class="header__button">login</a>
  </header>
</body>

<form action="" class="form">
  <div class="form__items">
    <label for="name">お名前</label>
    <input type="text" id="name" class="form__input" placeholder="例:山田　太郎">
  </div>
  <div class="form__items">
    <label for="addr">メールアドレス</label>
    <input type="text" id="addr" class="form__input">
  </div>
  <div class="form__items">
    <label for="pass">パスワード</label>
    <input type="text" id="pass" class="form__input">
  </div>
</form>

</html>
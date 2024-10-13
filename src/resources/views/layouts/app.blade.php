<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('/css/sanitize.css') }}">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inika&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="{{ asset('/css/common.css') }}">
  @yield('css')
</head>

<body>
  <header class="header">
    <div class="header__inner">
      <span class="header__title">FashionablyLate</span>
      @yield('header-button')
    </div>
  </header>
  <main class="main">
    <div class="page-title">@yield('page-title')</div>
    @yield('main')
  </main>
</body>

</html>
<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="description" content="専修大学の非公式サークル一覧サイトです。">
  <meta name="google-site-verification" content="KhAb-GdGrC7L18a-pDTFVGfShJ0poisG6U17toZV0z8" />
  <title>専修サークルunofficial</title>
  <script src="https://kit.fontawesome.com/ccef782b63.js" crossorigin="anonymous"></script>
  {{-- css --}}
  <link rel="stylesheet" href="{{ asset('css/reset.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  {{-- favicon --}}
  <link rel="icon" type="image/x-icon" href="/storage/img/専修サークルicon.png">
  {{-- slick --}}
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/gh/kenwheeler/slick@1.8.1/slick/slick-theme.css" />
  {{-- vue.js --}}
  <script src="https://cdn.jsdelivr.net/npm/vue@2.6.12/dist/vue.js"></script>
  {{-- google-font --}}
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@500&display=swap');

  </style>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  @stack('css')
</head>

<body id="body">
  @include('common.header')
  <div id="fixed-wrap">
    <main>
      @include('width1025_categories')
      <div class="main-inner">
        <div class="title-content">
          <a href="/">
            <img class="title-image" src="/storage/img/専サータイトル.png" alt="タイトル画像">
          </a>
          <form class="search-form" action="{{ url('/result') }}" method="POST" autocomplete="off">
            {{ csrf_field() }}
            <input class="title-search" type="text" name="search" placeholder="キーワードを入力">
            <button class="title-search-icon" type="submit"><i class="fas fa-search "></i></button>
          </form>
        </div>
        @yield('content')
      </div>

    </main>

    @include('common.footer')
  </div>
  @include('common.nav')


  {{-- slick --}}
  <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  @stack('dbTojs')
  <script src={{ asset('js/main.js') }}></script>
  @stack('circleList.js')
  @stack('header.js')
  @stack('circle.js')
  @stack('nav.js')
</body>

</html>

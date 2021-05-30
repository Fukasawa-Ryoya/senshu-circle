@extends('layouts.app')

@push('css')
  <link rel="stylesheet" href="{{ asset('css/circle.css') }}">

@endpush

@section('content')

  <div class="circle-wrap">
    <p class="circle-name">{{ $circle->name }}</p>
    <div class="circle-img-wrap">
      @if ($circle->authorization == 'true')
        <img class="authorization" src="/storage/img/公認スタンプ.png" alt="公認スタンプ">
      @endif
      <img class="circle-image" src="/storage/circleImg/{{ $circle->image }}" alt="サークル画像">
    </div>
    <div class="circle-nav-wrap">
      <ul class="circle-nav">
        <li><a href="#content">活動内容</a></li>
        <span>/</span>
        <li><a href="#time-place">日時・場所</a></li>
        <span>/</span>
        <li><a href="#people-ratio">人数・男女比</a></li>
        <span>/</span>
        <li><a href="#link">リンク</a></li>
      </ul>
    </div>
  </div>

  <div class="circle-content-wrap">
    <div id="content" class="activity-content">
      <span class="title">活動内容</span>
      <p class="text">{{ $circle->content }}</p>
    </div>
    <div id="time-place" class="time">
      <span class="title">日時</span>
      <p class="text">{{ $circle->date }}</p>
    </div>
    <div class="place">
      <span class="title">場所</span>
      <p class="text">{{ $circle->place }}</p>
    </div>
    <div id="people-ratio" class="people">
      <span class="title">人数</span>
      <p class="text">{{ $circle->people }}人</p>
    </div>
    <div class="ratio">
      <span class="title">男女比</span>
      <p class="text">{{ $circle->ratio }}</p>
    </div>
    <div id="link" class="link-wrap">
      <span class="title">リンク</span>
      <div class="links">
        @if (!$circle->twitter == null)
          <a class="link" href="{{ $circle->twitter }}"><i class="fab fa-twitter"></i></a>
        @endif
        @if (!$circle->instagram == null)
          <a class="link" href="{{ $circle->instagram }}"><i class="fab fa-instagram"></i></a>
        @endif
      </div>
    </div>
  </div>

  @include('otherCircle')

@endsection

@push('circle.js')
  <script src={{ asset('js/circle.js') }}></script>

@endpush

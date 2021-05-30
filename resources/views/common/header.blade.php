<header>
  <a class="main-icon-wrap" href="/"><img class="main-icon" src="/storage/img/専修サークルicon.png" alt="アイコン"></a>
  
  <div class="search-wrap">
    <i class="fas fa-search search-icon"></i>
    <form action="{{ url('/result') }}" method="POST">
      {{ csrf_field() }}
      <input class="header-search" type="serch" name="search" autocomplete="off">
    </form>
  </div>
</header>

@push('header.js')
  <script src={{ asset('js/header.js') }}></script>

@endpush

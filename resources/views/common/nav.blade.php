<nav class="nav-wrap">
  <a class="nav-down nav-btn" href="#footer"><i class="nav-icon fas fa-chevron-down"></i></a>
  <i class="nav-menu nav-btn nav-icon fas fa-bars" style="cursor: pointer;"></i>
  <a class="nav-up nav-btn" href="#"><i class="nav-icon fas fa-chevron-up"></i></a>
</nav>


<div class="menu">
  <div class="category-wrap">
    @include('categories')
  </div>
</div>


<a class="page-top" href="#body"><i class="fas fa-chevron-up"></i></a>

@push('nav.js')
  <script src={{ asset('js/nav.js') }}></script>

@endpush

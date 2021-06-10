@extends('layouts.app')

@push('css')
  <link rel="stylesheet" href="{{ asset('css/circle_list.css') }}">
@endpush

@section('content')

  <div class="result">
    @if (isset($circles_category))
      {{ $circles_category[0]->category }}
    @elseif (isset($circles_type))
      {{ $circles_type[0]->type }}
    @elseif ($request->search==null)
      入力されていません。
    @else
      {{ $request->search }}
    @endif
  </div>

  <ul class="sort-button">
    <li>
      <input type="radio" id="japanese" name="sort">
      <label for="japanese">50音順</label>
      <div class="check"></div>
    </li>
    <li>
      <input type="radio" id="many" name="sort">
      <label for="many">人数多</label>
      <div class="check"></div>
    </li>
    <li>
      <input type="radio" id="few" name="sort">
      <label for="few">人数少</label>
      <div class="check"></div>
    </li>
    <li>
      <input type="radio" id="authorization" name="sort" value="authorization">
      <label for="authorization">公認</label>
      <div class="check"></div>
    </li>
  </ul>

  <ul class="circle-list">
  </ul>

@endsection

@if (isset($circles_category))
  @push('dbTojs')
    <script>
      let circles = @json($circles_category);
      // 検索したものはランダムではなく50音順で取得しているためcheckedをつけている
      $('#japanese').attr('checked', 'checked');

      function circlesJp() {
        circles = @json($circles_category);
      }

      function circlesMany() {
        circles = @json($circles_category_many);
      }

      function circlesFew() {
        circles = @json($circles_category_few);
      }

      function circlesAuthorization() {
        circles = @json($circles_category_authorization);
      }

    </script>
  @endpush
@elseif (isset($circles_type))
  @push('dbTojs')
    <script>
      let circles = @json($circles_type);
      // 検索したものはランダムではなく50音順で取得しているためcheckedをつけている
      $('#japanese').attr('checked', 'checked');

      function circlesJp() {
        circles = @json($circles_type);
      }

      function circlesMany() {
        circles = @json($circles_type_many);
      }

      function circlesFew() {
        circles = @json($circles_type_few);
      }

      function circlesAuthorization() {
        circles = @json($circles_type_authorization);
      }

    </script>
  @endpush
@else
  @push('dbTojs')
    <script>
      const search = @json($request->search);

      let circles = @json($results);
      // 検索したものはランダムではなく50音順で取得しているためcheckedをつけている
      $('#japanese').attr('checked', 'checked');

      function circlesJp() {
        circles = @json($results);
      }

      function circlesMany() {
        circles = @json($results_many);
      }

      function circlesFew() {
        circles = @json($results_few);
      }

      function circlesAuthorization() {
        circles = @json($results_authorization);
      }

    </script>
  @endpush
@endif
@push('circleList.js')
  <script src="{{ asset('js/circleList.js') }}"></script>
@endpush

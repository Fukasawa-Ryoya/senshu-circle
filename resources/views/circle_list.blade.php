@extends('layouts.app')

@push('css')
  <link rel="stylesheet" href="{{ asset('css/circle_list.css') }}">
@endpush

@section('content')
  <ul class="sort-button">
    <li>
      <input type="radio" id="japanese" name="sort" value="japanese">
      <label for="japanese">50音順</label>
      <div class="check"></div>
    </li>
    <li>
      <input type="radio" id="many" name="sort" value="many">
      <label for="many">人数多</label>
      <div class="check"></div>
    </li>
    <li>
      <input type="radio" id="few" name="sort" value="few">
      <label for="few">人数少</label>
      <div class="check"></div>
    </li>
    <li>
      <input type="radio" id="authorization" name="sort" value="authorization">
      <label for="authorization">公認</label>
      <div class="check"></div>
    </li>
  </ul>

  <ul class="circle-list" id="circle-list">
  </ul>

@endsection
@push('dbTojs')
  <script>
    let circles = @json($circles);

    function circlesJp() {
      circles = @json($circles_jp);
    }

    function circlesFew() {
      circles = @json($circles_few);
    }

    function circlesMany() {
      circles = @json($circles_many);
    }
    function circlesAuthorization() {
      circles = @json($circles_authorization);
    }
  </script>
@endpush
@push('circleList.js')
  <script src="{{asset('js/circleList.js')}}"></script>
@endpush

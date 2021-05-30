<div class="other-wrap">
  @if (isset($circles_type[0]))
  <p class="other-circles">その他の{{ $circle->type }}サークル</p>
  <div class="slider-content">
    <div class="slider">
      {{-- categoryが同じものだけを取得する --}}
      @foreach ($circles_type as $circle_type)
      <a class="slide" href="/circle/{{ $circle_type->id }}">
        <figure class="hover-parent">
          <img class="other-image" src="/storage/circleImg/{{$circle_type->image}}" alt="サークル画像">
          <figcaption class="hover-mask">
            {{ $circle_type->name }}
          </figcaption>
        </figure>
      </a>
      @endforeach
    </div>
  </div>
  <p class="blank">&nbsp;</p>
  @else
  <p class="other-circles">その他の{{$circle->type}}サークルは見つかりませんでした。</p>
  @endif
</div>

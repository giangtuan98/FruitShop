<section id="sale" class="section section-sale gap-up-2 gap-down-2">
  <div class="heading">
    <div class="heading-wrap">
      <h2 class="heading-title">Special <b>offer</b></h2>
      <h5 class="heading-subtitle">Sale</h5>
    </div>
  </div>
  <div class="offer-wrap">
    <div class="container">
      <div class="row">
        @foreach ($dealOfTheDay as $product)
          @php $timestampDiff = abs(strtotime($product->promotion_end_date) - now()->timestamp); @endphp
          @if ($loop->index == 0)
            <div class="col-lg-8">
              <div class="offer">
                <h3>Deal of the day</h3>
                <div class="descr">
                  <p>{{ $product->name }} </p>
                </div>
                <div class="offer-price">
                  <span><b>only</b> {{ number_format($product->price) }}/{{ $product->unit }}</span>
                </div>
                <div class="offer-image-wrap">
                  <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                </div>
                <div class="timer">
                  <div class="countdown_timer" id="timerMain" data-countdown-time="{{ $timestampDiff }}">
                  </div>
                </div>
                <div class="button-wrap">
                  <a href="{{ route('shop', ['orderType' => 5]) }}" class="btn btn-primary">Buy now</a>
                </div>
              </div>
            </div>
          @else
            <div class="col-lg-4">
              <div class="offer offer-sm">
                <h3>{{ $product->name }}</h3>
                <div class="descr">
                  <p>Best price for this product</p>
                </div>
                <div class="offer-price">
                  <span><b>only</b> {{ number_format($product->price) }}/{{ $product->unit }}</span>
                </div>
                <div class="offer-image-wrap">
                  <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
                </div>
                <div class="timer">
                  <div class="countdown_timer_sm" data-countdown-time="{{ $timestampDiff }}">
                  </div>
                </div>
                <div class="button-wrap">
                  <a href="{{ route('shop', ['orderType' => 5]) }}" class="btn btn-primary btn-sm">Buy now</a>
                </div>
              </div>
            </div>
          @endif
        @endforeach
      </div>
    </div>
  </div>
  <div class="button-wrap">
    <a href="sale.html" class="btn btn-white">View all offers</a>
  </div>
</section>

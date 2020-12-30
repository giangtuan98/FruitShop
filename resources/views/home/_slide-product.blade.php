@if ($products->count() > 0)
  <div class="slider-products-wrap">
    <div class="container">
      <h3>{{ $title }}</h3>
      <div class="slider-products">
        @foreach ($products as $product)
          <div class="slider-products-item">
            <div class="card-item">
              <div class="card-item-img">
                <img src="{{ Storage::url($product->image) }}" alt="tomato">
              </div>
              <div class="card-item-descr">
                <h4>{{ $product->name }}</h4>
                @if ($product->is_sale)
                  <p class="price">{{ number_format($product->promotion_price) }} VND<span
                      class="price-sale">{{ number_format($product->unit_price) }}</span></p>
                @else
                  <p class="price">{{ number_format($product->unit_price) }} VND</p>
                @endif
              </div>
              <div class="card-item-hover">
                <ul class="hover-list">
                  <li><a href="#?" data-toggle="modal" data-target="#card-item-modal"><i
                        class="icon-arrows-open"></i></a>
                  </li>
                  <li><a href="#?"><i class="icon-cart"></i></a></li>
                </ul>
              </div>
              @if (isset($labels))
                <ul class="label">
                  @foreach ($labels as $label)
                    <li class="{{ $label['class'] }}">{{ $label['title'] }}</li>
                  @endforeach
                </ul>
              @endif
              </ul>
            </div>
          </div>
        @endforeach
      </div>
    </div>
  </div>
@endif

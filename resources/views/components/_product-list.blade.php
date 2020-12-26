@foreach ($products as $product)
  <div class="col-xl-3 col-lg-4 col-sm-6 shuffle-item" data-groups='["{{ $product->category->name }}"]'>
    <div class="card-item ">
      <div class="card-item-img">
        <img src="{{ Storage::url($product->image) }}" alt="{{ $product->name }}">
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
          {{-- <li><a href="#?"><i class="icon-shape"></i></a>
          </li> --}}
          <li class="open-detail" data-product-id="{{ $product->id }}"><a href="#?"><i class="icon-arrows-open"></i></a>
          </li>
          <li class="add-to-cart" data-product-id="{{ $product->id }}"><a href="#?"><i class="icon-cart"></i></a></li>
        </ul>
      </div>
      <ul class="label">
        @if ($product->is_new)
          <li class="label-new">new</li>
        @endif
        @if ($product->is_sale)
          <li class="label-sale">sale</li>
        @endif
      </ul>
    </div>
  </div>
@endforeach

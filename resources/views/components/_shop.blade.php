<section class="section section-top patern gap-up-1-top">
  <div class="container text-center">
    <h1>{{ $page }}</h1>
    <nav class="breadcrumb">
      <a class="breadcrumb-item" href="{{ route('home') }}">Home</a>
      <span class="breadcrumb-item active">{{ $page }}</span>
    </nav>
  </div>
</section>

<section class="section section-shop section-shop-inner">
  <div class="container">
    <div class="shuffle-wrap -inner">
      <div class="shuffle-buttons-list-wrap">
        @include('layouts.category-nav')
        <div class="product-select-wrap">
          <span>Sort by:</span>
          @php $orderType = request('orderType'); @endphp
          <select class="selectpicker aquarelle-select product-select" id="selectOrderType" name="checkout_region">
            <option value="{{ request()->fullUrlWithQuery(['orderType' => '']) }}" @if (!$orderType) selected @endif>Random</option>
            <option value="{{ request()->fullUrlWithQuery(['orderType' => 1]) }}" @if ($orderType == 1) selected @endif>Price Low to High</option>
            <option value="{{ request()->fullUrlWithQuery(['orderType' => 2]) }}" @if ($orderType == 2) selected @endif>Price High to Low</option>
            <option value="{{ request()->fullUrlWithQuery(['orderType' => 3]) }}" @if ($orderType == 3) selected @endif>Alphabetically</option>
            <option value="{{ request()->fullUrlWithQuery(['orderType' => 4]) }}" @if ($orderType == 4) selected @endif>First new</option>
            <option value="{{ request()->fullUrlWithQuery(['orderType' => 5]) }}" @if ($orderType == 5) selected @endif>First sale</option>
          </select>
        </div>
      </div>
      <div class="shuffle-items-wrap shuffle-items-wrap-inner row" id="shuffle-grid">
        @include('components._product-list', [
        'products' => $products
        ])
      </div>
      {{ $products->links('layouts.pagination') }}
    </div>
  </div>
</section>
<!-- SECTION PARTNERS -->
<section class="section section-partners">
  <div class="container">
    <div class="partners-wrap text-center">
      <div class="row justify-content-center">
        <div class=" col-lg-2 col-md-4 col-6">
          <div class="partners-img-wrap">
            <a href="#?"><img src="img/hipster.png" alt="hipster"></a>
          </div>
        </div>
        <div class=" col-lg-2 col-md-4 col-6">
          <div class="partners-img-wrap">
            <a href="#?"><img src="img/vintage.png" alt="vintage"></a>
          </div>
        </div>
        <div class=" col-lg-2 col-md-4 col-6">
          <div class="partners-img-wrap">
            <a href="#?"><img src="img/retro.png" alt="retro"></a>
          </div>
        </div>
        <div class=" col-lg-2 col-md-4 col-6">
          <div class="partners-img-wrap">
            <a href="#?"><img src="img/creatives.png" alt="creatives"></a>
          </div>
        </div>
        <div class=" col-lg-2 col-md-4 col-6">
          <div class="partners-img-wrap">
            <a href="#?"><img src="img/vintage-97.png" alt="vintage"></a>
          </div>
        </div>
        <div class=" col-lg-2 col-md-4 col-6">
          <div class="partners-img-wrap">
            <a href="#?"><img src="img/creatives-design.png" alt="creatives-design"></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

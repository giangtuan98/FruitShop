@extends('layouts.app')

@section('content')

  <section id="welcome" class="section section-welcome patern">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="vegetables text-center">
            <img src="img/welcome-vegetables.png" alt="vegetables">
          </div>
        </div>
        <div class="col-md-6">
          <div class="welcome-info">
            <div class="welcome-info-content">
              <h1>Fresh & Natural</h1>
              <h4>vegetables and fruits</h4>
              <p>Our organic food is your strong health</p>
            </div>
          </div>
          <div class="button-welcome-wrap">
            <a href="shop.html" class="btn btn-primary">Buy now</a>
            <a href="about.html" class="btn btn-border">About us</a>
          </div>
        </div>
      </div>
      <div class="advantages-wrap">
        <div class="row">
          <div class="col-lg-3 col-sm-6">
            <div class="advantages-item">
              <div class="advantages-item-image">
                <i class="icon-hours"></i>
              </div>
              <div class="advantages-item-descr">
                <h4>Working time 24/7</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="advantages-item">
              <div class="advantages-item-image">
                <i class="icon-box-package"></i>
              </div>
              <div class="advantages-item-descr">
                <h4>Free shipping</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="advantages-item">
              <div class="advantages-item-image">
                <i class="icon-small-truck"></i>
              </div>
              <div class="advantages-item-descr">
                <h4>Delivery to the door</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6">
            <div class="advantages-item">
              <div class="advantages-item-image">
                <i class="icon-arrow"></i>
              </div>
              <div class="advantages-item-descr">
                <h4>Free return</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="section section-about-us gap-up-1 gap-down-1">
    <div class="container">
      <div class="heading">
        <div class="heading-wrap">
          <h2 class="heading-title">We are <b>organic food shop</b></h2>
          <h5 class="heading-subtitle">About us</h5>
        </div>
      </div>
      <div class="about">
        <div class="row">
          <div class="col-md-3">
            <div class="about-item-wrap-left">
              <div class="about-item">
                <img src="img/pepper.png" alt="pepper">
                <h4>Natural</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
              </div>
            </div>
            <div class="about-item-wrap-left">
              <div class="about-item">
                <img src="img/turnip.png" alt="pepper">
                <h4>Organic</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-order_sm-1">
            <div class="about-item-wrap-center">
              <div class="about-item">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                  incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                  ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in
                  voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in
                  culpa qui officia deserunt mollit anim id est laborum. </p>
                <div class="button-wrap">
                  <a href="about.html" class="btn btn-white">Read more</a>
                </div>
                <img src="img/radish.png" alt="pepper">
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="about-item-wrap-right">
              <div class="about-item">
                <img src="img/eggplant.png" alt="pepper">
                <h4>Natural</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
              </div>
            </div>
            <div class="about-item-wrap-right">
              <div class="about-item">
                <img src="img/cauliflower.png" alt="pepper">
                <h4>Organic</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="shop" class="section section-shop patern">
    <div class="container">
      <div class="heading">
        <div class="heading-wrap">
          <h2 class="heading-title"><b>From nature</b> for you</h2>
          <h5 class="heading-subtitle">Shop</h5>
        </div>
      </div>
      <div class="shuffle-wrap">
        <ul class="shuffle-buttons-list">
          <li class="shuffle-button-item"><a href="javascript:void(0);" class="btn btn-transparent active"
              data-group="all">All products</a></li>
          <li class="shuffle-button-item"><a href="javascript:void(0);" class="btn btn-transparent"
              data-group="vegetables">Vegetables</a></li>
          <li class="shuffle-button-item"><a href="javascript:void(0);" class="btn btn-transparent"
              data-group="fruits">Fruits</a></li>
          <li class="shuffle-button-item"><a href="javascript:void(0);" class="btn btn-transparent"
              data-group="beans">Beans</a></li>
          <li class="shuffle-button-item"><a href="javascript:void(0);" class="btn btn-transparent"
              data-group="juices">Juices</a></li>
          <li class="shuffle-button-item"><a href="javascript:void(0);" class="btn btn-transparent"
              data-group="other">Other</a></li>
        </ul>
        <div class="shuffle-items-wrap row" id="shuffle-grid">
          @foreach ($products as $product)
            <div class="col-xl-3 col-lg-4 col-sm-6 shuffle-item" data-groups='["vegetables"]'>
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
                    <p class="price">{{ number_format($product->price) }} VND</p>
                  @endif
                </div>
                <div class="card-item-hover">
                  <ul class="hover-list">
                    {{-- <li><a href="#?"><i class="icon-shape"></i></a>
                    </li> --}}
                    <li><a href="#?" data-toggle="modal" data-target="#card-item-modal"><i
                          class="icon-arrows-open"></i></a>
                    </li>
                    <li><a href="#?"><i class="icon-cart"></i></a></li>
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
          <div class="col-xl-3 col-lg-4 col-sm-6 shuffle-item" data-groups='["restaurant"]'>
            <div class="card-item ">
              <div class="card-item-img">
                <img src="img/mushrooms.png" alt="mushrooms">
              </div>
              <div class="card-item-descr">
                <h4>Mushrooms - 1lb</h4>
                <p class="price">$11.25</p>
              </div>
              <div class="card-item-hover">
                <ul class="hover-list">
                  <li><a href="#?"><i class="icon-shape"></i></a></li>
                  <li><a href="#?" data-toggle="modal" data-target="#card-item-modal"><i class="icon-arrows-open"></i></a>
                  </li>
                  <li><a href="#?"><i class="icon-cart"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 shuffle-item" data-groups='["fruits"]'>
            <div class="card-item">
              <div class="card-item-img">
                <img src="img/cabage.png" alt="cabage">
              </div>
              <div class="card-item-descr">
                <h4>White cabbage - 1lb</h4>
                <p class="price">$6.25<span class="price-sale">$11.25</span></p>
              </div>
              <div class="card-item-hover">
                <ul class="hover-list">
                  <li><a href="#?"><i class="icon-shape"></i></a></li>
                  <li><a href="#?" data-toggle="modal" data-target="#card-item-modal"><i class="icon-arrows-open"></i></a>
                  </li>
                  <li><a href="#?"><i class="icon-cart"></i></a></li>
                </ul>
              </div>
              <ul class="label">
                <li class="label-new">new</li>
                <li class="label-sale">sale</li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 shuffle-item" data-groups='["fruits"]'>
            <div class="card-item">
              <div class="card-item-img">
                <img src="img/corn.png" alt="corn">
              </div>
              <div class="card-item-descr">
                <h4>Organic corn - 1lb</h4>
                <p class="price">$11.25</p>
              </div>
              <div class="card-item-hover">
                <ul class="hover-list">
                  <li><a href="#?"><i class="icon-shape"></i></a></li>
                  <li><a href="#?" data-toggle="modal" data-target="#card-item-modal"><i class="icon-arrows-open"></i></a>
                  </li>
                  <li><a href="#?"><i class="icon-cart"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 shuffle-item" data-groups='["beans"]'>
            <div class="card-item">
              <div class="card-item-img">
                <img src="img/red-cabage.png" alt="cabage">
              </div>
              <div class="card-item-descr">
                <h4>Red cabbage - 1lb</h4>
                <p class="price">$11.25</p>
              </div>
              <div class="card-item-hover">
                <ul class="hover-list">
                  <li><a href="#?"><i class="icon-shape"></i></a></li>
                  <li><a href="#?" data-toggle="modal" data-target="#card-item-modal"><i class="icon-arrows-open"></i></a>
                  </li>
                  <li><a href="#?"><i class="icon-cart"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 shuffle-item" data-groups='["juices"]'>
            <div class="card-item">
              <div class="card-item-img">
                <img src="img/potato.png" alt="potato">
              </div>
              <div class="card-item-descr">
                <h4>Potatoes - 1lb</h4>
                <p class="price">$11.25</p>
              </div>
              <div class="card-item-hover">
                <ul class="hover-list">
                  <li><a href="#?"><i class="icon-shape"></i></a></li>
                  <li><a href="#?" data-toggle="modal" data-target="#card-item-modal"><i class="icon-arrows-open"></i></a>
                  </li>
                  <li><a href="#?"><i class="icon-cart"></i></a></li>
                </ul>
              </div>
              <ul class="label">
                <li class="label-sale">sale</li>
              </ul>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 shuffle-item" data-groups='["juices"]'>
            <div class="card-item">
              <div class="card-item-img">
                <img src="img/pepper-img.png" alt="pepper">
              </div>
              <div class="card-item-descr">
                <h4>Paprika pepper - 1lb</h4>
                <p class="price">$11.25</p>
              </div>
              <div class="card-item-hover">
                <ul class="hover-list">
                  <li><a href="#?"><i class="icon-shape"></i></a></li>
                  <li><a href="#?" data-toggle="modal" data-target="#card-item-modal"><i class="icon-arrows-open"></i></a>
                  </li>
                  <li><a href="#?"><i class="icon-cart"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-lg-4 col-sm-6 shuffle-item" data-groups='["other"]'>
            <div class="card-item">
              <div class="card-item-img">
                <img src="img/cucumbers.png" alt="cucumbers">
              </div>
              <div class="card-item-descr">
                <h4>Cucumbers - 1lb</h4>
                <p class="price">$11.25</p>
              </div>
              <div class="card-item-hover">
                <ul class="hover-list">
                  <li><a href="#?"><i class="icon-shape"></i></a></li>
                  <li><a href="#?" data-toggle="modal" data-target="#card-item-modal"><i class="icon-arrows-open"></i></a>
                  </li>
                  <li><a href="#?"><i class="icon-cart"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="button-wrap">
          <a href="shop.html" class="btn btn-border">View more</a>
        </div>
      </div>
    </div>
    @include('home._slide-product', [
    'products' => $hotProducts,
    'title' => 'Best seller products'
    ])
    {{-- @include('_slide-product', [
    'product' => $productOfTheDay
    'title' => 'Product of the day'
    ]) --}}
  </section>

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
          <div class="col-lg-8">
            <div class="offer">
              <h3>Deal of the day</h3>
              <div class="descr">
                <p>Discount on lemons 50%. Lorem ipsum dolor sit amet, consectetur adipisicing elit or sit
                  amet,
                  consectetur</p>
              </div>
              <div class="offer-price">
                <span><b>only</b> $9.99/lb</span>
              </div>
              <div class="offer-image-wrap">
                <img src="img/lemons.jpg" alt="lemons">
              </div>
              <div class="timer">
                <div class="countdown_timer">
                </div>
              </div>
              <div class="button-wrap">
                <a href="shop-single.html" class="btn btn-primary">Buy now</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="offer offer-sm">
              <h3>Apples season</h3>
              <div class="descr">
                <p>Discount on apples 20% before the end of summer</p>
              </div>
              <div class="offer-price">
                <span><b>only</b> $9.99/lb</span>
              </div>
              <div class="offer-image-wrap">
                <img src="img/apples.png" alt="apples">
              </div>
              <div class="timer">
                <div class="countdown_timer_sm">
                </div>
              </div>
              <div class="button-wrap">
                <a href="shop-single.html" class="btn btn-primary btn-sm">Buy now</a>
              </div>
            </div>
            <div class="offer offer-sm">
              <h3>Offer of the week</h3>
              <div class="descr">
                <p>Best price. Green beans 15% discount</p>
              </div>
              <div class="offer-price">
                <span><b>only</b> $9.99/lb</span>
              </div>
              <div class="offer-image-wrap">
                <img src="img/beens.png" alt="lemons">
              </div>
              <div class="timer">
                <div class="countdown_timer_sm">
                </div>
              </div>
              <div class="button-wrap">
                <a href="shop-single.html" class="btn btn-primary btn-sm">Buy now</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="button-wrap">
      <a href="sale.html" class="btn btn-white">View all offers</a>
    </div>
  </section>

  <section id="comming_soon" class="section section-coming-soon patern">
    @include('.home._slide-product', [
    'products' => $comingProducts,
    'title' => 'Products coming soon',
    'labels' => [
    ['class' => 'label-soon',
    'title' => 'soon']
    ]
    ])
  </section>

  @include('home._usefulness')

  @include('home._our-customer')

  @include('home._contact')

  @include('home._partners')
@endsection

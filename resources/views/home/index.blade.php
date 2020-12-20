@extends('layouts.app')

@section('header')
  @include('layouts.header-index')
@endsection

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

  @include('home._about')

  <section id="shop" class="section section-shop patern">
    <div class="container">
      <div class="heading">
        <div class="heading-wrap">
          <h2 class="heading-title"><b>From nature</b> for you</h2>
          <h5 class="heading-subtitle">Shop</h5>
        </div>
      </div>
      <div class="shuffle-wrap">
        @include('layouts.category-nav')
        <div class="shuffle-items-wrap row" id="shuffle-grid">
          @include('components._product-list', [
          'products' => $products
          ])
        </div>
        <div class="button-wrap">
          <a href="{{ route('shop') }}" class="btn btn-border">View more</a>
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

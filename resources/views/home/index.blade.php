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
            <a href="{{ route('shop') }}" class=" btn btn-primary">Buy now</a>
            <a href="{{ route('about') }}" class=" btn btn-border">About us</a>
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
                <p>Working 24/7 all day of the week</p>
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
                <p>Coverage covers 63 cities and provinces</p>
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
                <p>
                  Professional import, transport and storage process.</p>
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
                <p>Free exchange if the product does not meet the standard</p>
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

  @include('home._hot-deal', [
  'dealOfTheDay' => $dealOfTheDay
  ])

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

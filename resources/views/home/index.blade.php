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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                  esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
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
          <div class="col-xl-3 col-lg-4 col-sm-6 shuffle-item" data-groups='["vegetables"]'>
            <div class="card-item ">
              <div class="card-item-img">
                <img src="img/tomato.png" alt="tomato">
              </div>
              <div class="card-item-descr">
                <h4>Organic tomatoes - 1lb</h4>
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
                <li class="label-new">new</li>
              </ul>
            </div>
          </div>
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
    <div class="slider-products-wrap">
      <div class="container">
        <h3>Featured products</h3>
        <div class="slider-products">
          <div class="slider-products-item">
            <div class="card-item">
              <div class="card-item-img">
                <img src="img/tomato.png" alt="tomato">
              </div>
              <div class="card-item-descr">
                <h4>Organic tomatoes - 1lb</h4>
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
          <div class="slider-products-item">
            <div class="card-item">
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
          <div class="slider-products-item">
            <div class="card-item">
              <div class="card-item-img">
                <img src="img/cabage.png" alt="cabage">
              </div>
              <div class="card-item-descr">
                <h4>White cabbage - 1lb</h4>
                <p class="price">$6.25</p>
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
          <div class="slider-products-item">
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
          <div class="slider-products-item">
            <div class="card-item">
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
        </div>
      </div>
    </div>
    <div class="slider-products-wrap">
      <div class="container">
        <h3>Product of the day</h3>
        <div class="slider-products">
          <div class="slider-products-item">
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
          <div class="slider-products-item">
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
            </div>
          </div>
          <div class="slider-products-item">
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
          <div class="slider-products-item">
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
          <div class="slider-products-item">
            <div class="card-item">
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
        </div>
      </div>
    </div>
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
                <p>Discount on lemons 50%. Lorem ipsum dolor sit amet, consectetur adipisicing elit or sit amet,
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
    <div class="slider-products-wrap">
      <div class="container">
        <h3>Products coming soon</h3>
        <div class="slider-products">
          <div class="slider-products-item">
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
              <ul class="label">
                <li class="label-soon">soon</li>
              </ul>
            </div>
          </div>
          <div class="slider-products-item">
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
                <li class="label-soon">soon</li>
              </ul>
            </div>
          </div>
          <div class="slider-products-item">
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
              <ul class="label">
                <li class="label-soon">soon</li>
              </ul>
            </div>
          </div>
          <div class="slider-products-item">
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
              <ul class="label">
                <li class="label-soon">soon</li>
              </ul>
            </div>
          </div>
          <div class="slider-products-item">
            <div class="card-item">
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
              <ul class="label">
                <li class="label-soon">soon</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="usefulness" class="section section-usefulness gap-up-1 gap-down-1">
    <div class="container">
      <div class="heading">
        <div class="heading-wrap">
          <h2 class="heading-title">Why <b>organic food</b></h2>
          <h5 class="heading-subtitle">Usefulness</h5>
        </div>
      </div>
      <div class="usefulness-wrap">
        <div class="row">
          <div class="col-lg-6">
            <div class="usefulness-img-wrap text-center">
              <img src="img/organic.png" alt="organic">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="usefulness-descr">
              <h3>Organic</h3>
              <div class="descr">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                  labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                  nisi ut aliquip ex ea commodo consequat.</p>
              </div>
              <div class="container">
                <div class="row">
                  <div class="col-md-8">
                  </div>
                </div>
              </div>
              <ul class="row">
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-leaf"></i><span>Duis aute irure dolor</span>
                </li>
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-leaf"></i><span>Quis nostrud</span></li>
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-leaf"></i><span>Ut enim ad minim</span></li>
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-leaf"></i><span>Nisi ut aliquip</span></li>
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-leaf"></i><span>Sed do eiusmod</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="usefulness-wrap">
        <div class="row">
          <div class="col-lg-6 order-lg-1">
            <div class="usefulness-img-wrap text-center">
              <img src="img/tasty.png" alt="tasty">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="usefulness-descr text-lg-right">
              <h3>Tasty</h3>
              <div class="descr">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                  pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
                  anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                  doloremque laudantium, totam rem aperiam.</p>
              </div>
              <ul class="row justify-content-lg-end text-left">
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-apple"></i><span>Ut enim ad minim</span></li>
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-apple"></i><span>Duis aute irure dolor</span>
                </li>
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-apple"></i><span>Ut enim ad minim</span></li>
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-apple"></i><span>Nisi ut aliquip</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="usefulness-wrap">
        <div class="row">
          <div class="col-lg-6">
            <div class="usefulness-img-wrap text-center">
              <img src="img/healthy.png" alt="Healthy">
            </div>
          </div>
          <div class="col-lg-6">
            <div class="usefulness-descr">
              <h3>Healthy</h3>
              <div class="descr">
                <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                  pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
              </div>
              <ul class="row">
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-carrot"></i><span>Duis aute irure dolor</span>
                </li>
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-carrot"></i><span>Quis nostrud</span></li>
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-carrot"></i><span>Ut enim ad minim</span></li>
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-carrot"></i><span>Nisi ut aliquip</span></li>
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-carrot"></i><span>Sed do eiusmod</span></li>
                <li class="col-xl-4 col-lg-5 col-md-4"><i class="icon-carrot"></i><span>Occaecat cupidatat</span></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="testimonials" class="section section-testimonials patern">
    <div class="container">
      <div class="heading">
        <div class="heading-wrap">
          <h2 class="heading-title"><b>Our customers</b> about us</h2>
          <h5 class="heading-subtitle">Testimonials</h5>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="slider-syncing">
            <div class="slider-for">
              <div class="slider-for-item">
                <div class="descr">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                    in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <span>Barbara</span>
              </div>
              <div class="slider-for-item">
                <div class="descr">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                    numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <span>Sara</span>
              </div>
              <div class="slider-for-item">
                <div class="descr">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                    in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <span>Lara</span>
              </div>
              <div class="slider-for-item">
                <div class="descr">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,
                    sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro
                    quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non
                    numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                </div>
                <span>Kate</span>
              </div>
              <div class="slider-for-item">
                <div class="descr">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
                    in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <span>April</span>
              </div>
            </div>
            <div class="slider-nav">
              <div class="slider-nav-item">
                <div class="slider-nav-img-wrap">
                  <img src="img/girl-1.png" alt="face">
                </div>
              </div>
              <div class="slider-nav-item">
                <div class="slider-nav-img-wrap">
                  <img src="img/girl-2.jpg" alt="face">
                </div>
              </div>
              <div class="slider-nav-item">
                <div class="slider-nav-img-wrap">
                  <img src="img/girl-3.jpg" alt="face">
                </div>
              </div>
              <div class="slider-nav-item">
                <div class="slider-nav-img-wrap">
                  <img src="img/girl-4.jpg" alt="face">
                </div>
              </div>
              <div class="slider-nav-item">
                <div class="slider-nav-img-wrap">
                  <img src="img/girl-5.jpg" alt="face">
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="news" class="section section-news gap-up-2 gap-down-2">
    <div class="container">
      <div class="heading">
        <div class="heading-wrap">
          <h2 class="heading-title"><b>Healthy food</b> with us</h2>
          <h5 class="heading-subtitle">News</h5>
        </div>
      </div>
      <div class="news-wrap">
        <div class="row">
          <div class="col-xl-6">
            <div class="news-item">
              <a href="news-single.html" class="news-img-link">
                <div class="news-item-img">
                  <div class="resp-img" style="background-image: url(img/news-1.png);"></div>
                </div>
              </a>
              <div class="news-item-text">
                <a href="news-single.html">
                  <h3>New arrival of vegetables</h3>
                </a>
                <span class="date">March 03, 2018</span>
                <div class="news-item-descr">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum...</p>
                </div>
                <div class="news-item-bottom">
                  <a href="news-single.html" class="news-link">Read more</a>
                  <ul class="action-list">
                    <li class="action-item"><i class="fa fa-heart"></i> <span>129</span></li>
                    <li class="action-item"><i class="fa fa-comment"></i> <span>5</span></li>
                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>17</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-6">
            <div class="news-item news-item-sm">
              <a href="news-single.html" class="news-img-link">
                <div class="news-item-img">
                  <div class="resp-img" style="background-image: url(img/news-2.png);"></div>
                </div>
              </a>
              <div class="news-item-text">
                <a href="news-single.html">
                  <h3>5 best recipes of the month</h3>
                </a>
                <span class="date">March 03, 2018</span>
                <div class="news-item-descr">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum...</p>
                </div>
                <div class="news-item-bottom">
                  <a href="news-single.html" class="news-link">Read more</a>
                  <ul class="action-list">
                    <li class="action-item"><i class="fa fa-heart"></i> <span>129</span></li>
                    <li class="action-item"><i class="fa fa-comment"></i> <span>5</span></li>
                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>17</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="news-item news-item-sm">
              <a href="news-single.html" class="news-img-link">
                <div class="news-item-img">
                  <div class="resp-img" style="background-image: url(img/news-3.png);"></div>
                </div>
              </a>
              <div class="news-item-text">
                <a href="news-single.html">
                  <h3>10 best recipes of the month</h3>
                </a>
                <span class="date">February 28, 2018</span>
                <div class="news-item-descr">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum...</p>
                </div>
                <div class="news-item-bottom">
                  <a href="news-single.html" class="news-link">Read more</a>
                  <ul class="action-list">
                    <li class="action-item"><i class="fa fa-heart"></i> <span>129</span></li>
                    <li class="action-item"><i class="fa fa-comment"></i> <span>5</span></li>
                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>17</span></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="news-item news-item-sm">
              <a href="news-single.html" class="news-img-link">
                <div class="news-item-img">
                  <div class="resp-img" style="background-image: url(img/news-4.png);"></div>
                </div>
              </a>
              <div class="news-item-text">
                <a href="news-single.html">
                  <h3>3 best recipes of the day</h3>
                </a>
                <span class="date">February 27, 2018</span>
                <div class="news-item-descr">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut
                    labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                    nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit
                    esse cillum...</p>
                </div>
                <div class="news-item-bottom">
                  <a href="news-single.html" class="news-link">Read more</a>
                  <ul class="action-list">
                    <li class="action-item"><i class="fa fa-heart"></i> <span>129</span></li>
                    <li class="action-item"><i class="fa fa-comment"></i> <span>5</span></li>
                    <li class="action-item"><i class="fa fa-share-alt"></i> <span>17</span></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="button-wrap">
        <a href="news.html" class="btn btn-white">View more</a>
      </div>
    </div>
  </section>

  <section id="contacts" class="section section-contacts patern">
    <div class="container">
      <div class="heading">
        <div class="heading-wrap">
          <h2 class="heading-title">If you have any questions <b>contact with us</b></h2>
          <h5 class="heading-subtitle">Write to Us</h5>
        </div>
      </div>
      <div class="contact-info">
        <div class="row">
          <div class="col-lg-7">
            <div class="map-wrap">
              <div class="section-map-wrap">
                <div class="section-map" id="map">
                </div>
              </div>
              <div class="map-info">
                <ul class="contacts">
                  <li><a href="#?"><i class="fa fa-location-arrow"></i><span>114 Sutton Ct Rd, Chiswick,
                        London</span></a></li>
                  <li><a href="tel:413126789"><i class="fa fa-phone"></i><span>(413) 126 789</span></a></li>
                  <li><a href="mailto:cruzdelsur@hotmail.com"><i
                        class="fa fa-envelope-o"></i><span>cruzdelsur@hotmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="contact-form">
              <h3 class="d-lg-none">Send us a message</h3>
              <form>
                <div class="form-row">
                  <div class="form-group col-lg-12 ml-auto">
                    <input type="text" class="form-control contact-form-item" id="contact-name" placeholder="Name"
                      required>
                  </div>
                  <div class="form-group col-lg-12 ml-auto">
                    <input type="email" class="form-control contact-form-item" id="contact-email" placeholder="E-mail"
                      required>
                  </div>
                </div>
                <div class="form-row">
                  <div class="form-group col-lg-12 ml-auto">
                    <textarea placeholder="Write a message" class="form-control contact-form-item" id="Message" rows="8"
                      required></textarea>
                  </div>
                </div>
                <div class="contact-btn">
                  <input type="submit" class="btn btn-primary btn-lg" value="Send">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="subscribe-wrap">
        <div class="subscribe">
          <div class="subscribe-descr">
            <h4>Subscribe newsletter</h4>
            <p>Get all the news from our store</p>
          </div>
          <div class="subscribe-form">
            <form action="#">
              <input type="email" placeholder="Email">
              <input type="submit" value="Subscribe" class="btn btn-primary">
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="partners" class="section section-partners gap-up-1 gap-down-1">
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
@endsection

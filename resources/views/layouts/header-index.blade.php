@php
$cart = session('cart');
$totalPrice = isset($cart['total']) ? number_format($cart['total']) : 0;
@endphp
<header class="header">
  <nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index-2.html"><img src="img/logo-big.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link menu-nav-link" href="#welcome">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu-nav-link" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu-nav-link" href="#shop">Shop</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu-nav-link" href="#sale">Sale</a>
          </li>
          <li class="nav-item">
            <a class="nav-link menu-nav-link" href="#contacts">Contacts</a>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link menu-nav-link" href="javascript:void(0);" id="search"><i class="icon-search"></i></a>
          </li>
          <li class="nav-item d-none d-lg-block">
            <a class="nav-link menu-nav-link" href="javascript:void(0);" id="cart"><i
                class="icon-cart cart-header-price"> {{ $totalPrice }} VND</i></a>
          </li>
          <li class="nav-item d-lg-none">
            <a class="nav-link menu-nav-link" href="cart.html"><i class="icon-cart"> {{ $totalPrice }} VND</i></a>
          </li>
          <li class="nav-item d-lg-none">
            <div class="search-form search-form-inline">
              <form action="{{ route('shop') }}">
                <input type="text" name="q" placeholder="Search...">
                <input type="submit" value="Search" class="btn btn-primary">
              </form>
            </div>
          </li>
          <li class="search-form-wrapper d-none d-lg-block">
            <div class="search-form">
              <form action="{{ route('shop') }}">
                <input type="text" name="q" placeholder="Search...">
                <input type="submit" value="Search" class="btn btn-primary">
              </form>
              <div class="close-btn close-form">
              </div>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</header>

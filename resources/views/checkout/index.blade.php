@extends('layouts.app')

@section('header')
  @include('layouts.header')
@endsection

@section('content')

  <!-- SECTION TOP -->
  <section class="section section-top patern gap-up-1-top">
    <div class="container text-center">
      <h1>checkout</h1>
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="index-2.html">Home</a>
        <span class="breadcrumb-item active">Checkout</span>
      </nav>
    </div>
  </section>
  <!-- SECTION CHECKOUT -->
  <section class="section section-checkout">
    <div class="container">
      <form id="checkout_steps" action="{{ route('checkout') }}" method="POST" class="checkout">
        @csrf
        <h4>Customer info<i class="fa fa-angle-right"></i></h4>
        <fieldset>
          <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" name="name" placeholder="Customer name" class="form-control" id="inputName"
                      value="{{ old('name') }}" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control" id="inputEmail"
                      value="{{ old('email') }}" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="tel" name="phone" placeholder="Phone number" class="form-control"
                      value="{{ old('phone') }}" id="inputPhone" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea name="address" placeholder="Address" class="form-control" rows="5" id="inputAddress"
                      minlength="10" required>{{ old('address') }}</textarea>
                  </div>
                </div>
              </div>
            </div>
            @include('checkout.cart-product', [
            'cart' => $cart
            ])
          </div>
        </fieldset>

        <h4>Payment method</h4>
        <fieldset>
          <div class="row justify-content-between">
            <div class="col-xl-7 col-lg-7 col-md-6">
              <div class="row">
                <div class="col-xl-5 col-lg-12">
                  <h4 class="shipping-method-header">Payment method</h4>
                  <div class="form-check abc-radio">
                    <input class="form-check-input" type="radio" name="payment" id="checkout_pickup" value="1" checked>
                    <label class="form-check-label" for="checkout_pickup">
                      Cash on delivery
                    </label>
                  </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                  <div class="checkout-info-wrap">
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Customer name</span>
                      <span class="checkout-info-dwscr" id="checkoutName">Name</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Email</span>
                      <span class="checkout-info-dwscr" id="checkoutEmail">stenka@email.com</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Phone number</span>
                      <span class="checkout-info-dwscr" id="checkoutPhone">+12345678</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Address</span>
                      <span class="checkout-info-dwscr" id="checkoutAddress">2075 Folson St</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @include('checkout.cart-product', [
            'cart' => $cart
            ])
          </div>
        </fieldset>
      </form>
    </div>
  </section>


@endsection

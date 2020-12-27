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
        <h4>Thông tin khách hàng<i class="fa fa-angle-right"></i></h4>
        <fieldset>
          <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" name="name" placeholder="Họ và tên" class="form-control" id="inputName" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control" id="inputEmail" required>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="tel" name="phone" placeholder="Số điện thoại" class="form-control" id="inputPhone"
                      required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea name="address" placeholder="Địa chỉ" class="form-control" rows="5" id="inputAddress"
                      minlength="10" required></textarea>
                  </div>
                </div>
              </div>
            </div>
            @include('checkout.cart-product', [
            'cart' => $cart
            ])
          </div>
        </fieldset>

        <h4>Hinh thức thanh toán</h4>
        <fieldset>
          <div class="row justify-content-between">
            <div class="col-xl-7 col-lg-7 col-md-6">
              <div class="row">
                <div class="col-xl-5 col-lg-12">
                  <h4 class="shipping-method-header">Hình thức thanh toán</h4>
                  <div class="form-check abc-radio">
                    <input class="form-check-input" type="radio" name="payment" id="checkout_pickup" value="1" checked>
                    <label class="form-check-label" for="checkout_pickup">
                      Thanh toán khi nhận hàng
                    </label>
                  </div>
                </div>
                <div class="col-xl-7 col-lg-12">
                  <div class="checkout-info-wrap">
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Họ và tên</span>
                      <span class="checkout-info-dwscr" id="checkoutName">First name</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Email</span>
                      <span class="checkout-info-dwscr" id="checkoutEmail">stenka@email.com</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Số điện thoại</span>
                      <span class="checkout-info-dwscr" id="checkoutPhone">+12345678</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Địa chỉ</span>
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

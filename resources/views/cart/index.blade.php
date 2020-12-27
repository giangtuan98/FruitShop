@extends('layouts.app')
<!-- SECTION TOP -->
@php
$cart = session('cart', null);
@endphp

@section('header')
  @include('layouts.header')
@endsection

@section('content')
  <section class="section section-top patern gap-up-1-top">
    <div class="container text-center">
      <h1>shopping cart</h1>
      <nav class="breadcrumb">
        <a class="breadcrumb-item" href="index-2.html">Home</a>
        <span class="breadcrumb-item active">Shopping Cart</span>
      </nav>
    </div>
  </section>
  <!-- SECTION CART -->
  <section class="section section-cart">
    <div class="container">
        @csrf
        <div class="cart-table">
          <div class="row cart-table-title">
            <div class="col-lg-5 col-md-4 d-none d-md-block">
              <h4>Product</h4>
            </div>
            <div class="col-lg-2 col-md-2 d-none d-md-block text-center">
              <h4>Price</h4>
            </div>
            <div class="col-lg-2 col-md-3 d-none d-md-block text-center">
              <h4>Quantity</h4>
            </div>
            <div class="col-lg-2 col-md-2 d-none d-md-block text-center">
              <h4>Subtotal</h4>
            </div>
            <div class="col-lg-1 col-md-2 d-none d-md-block"></div>
          </div>
          @if (isset($cart['items']))
            @foreach ($cart['items'] as $item)
              <div class="row cart-table-descr">
                <div class="col-lg-5 col-md-4 col-sm-5 col-12 col-12">
                  <div class="cart-product">
                    <div class="cart-product-img">
                      <img src="{{ Storage::url($item['item']->image) }}" alt="product">
                    </div>
                    <div class="cart-product-text">
                      <h4>{{ $item['item']->name }}</h4>
                      <span>{{ $item['item']->category->name }}</span>
                    </div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-3 col-3 text-center">
                  <div>
                    {{ number_format($item['item']->price) }} VND
                  </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4 col-6 text-center">
                  <div class="quantity-wrap">
                    <div class="less less-n"></div>
                    <div class="quantity">
                      <input type="hidden" type="text" class="item-id" name="products[{{ $loop->index }}][id]"
                        value="{{ $item['item']->id }}">

                      <input class="item-quantity" type="text" value="{{ $item['quantity'] }}"
                        data-price="{{ $item['item']->price }}" min="1" name="products[{{ $loop->index }}][quantity]">
                    </div>
                    <div class="more more-n"></div>
                  </div>
                </div>
                <div class="col-lg-2 col-md-2 col-sm-12 col-3 text-center text-sm-right row-price ">
                  <div class="total-price">
                    {{ number_format($item['quantity'] * $item['item']->price) }} VND
                  </div>
                </div>
                <div class="col-lg-1 col-md-1 col-sm-1 col-1 cart-close">
                  <div class="close-btn close-form remove-item">
                  </div>
                </div>
              </div>
            @endforeach
          @endif
          <div class="row">
            <div class="col-md-8">
              {{-- <div class="cart-coupon-wrap">
                <h4>Coupon Code</h4>
                <form class="cart-coupon-form">
                  <div class="form-group">
                    <input type="text" class="form-control" id="cart-coupon" aria-describedby="cart-coupon"
                      placeholder="Enter your coupon code">
                    <input type="submit" class="btn btn-white btn-md" value="Apply coupon">
                  </div>
                </form>
              </div> --}}
            </div>
            <div class="col-md-4">
              <div class="cart-total text-right">
                <div class="cart-total-title">
                  <h3>Thành tiền:</h3>
                </div>
                <div class="cart-total-price" data-total-price="{{ $cart['total'] }}">
                  {{ number_format($cart['total']) }} VND
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-between">
            <div class="col-md-3 col-sm-12 text-center text-md-left">
              <a href="{{ route('shop') }}" class="btn btn-white btn-md">Tiếp tuc shopping</a>
            </div>
            <div class="col-md-9 col-sm-12">
              <div class="cart-checkout d-flex justify-content-center justify-content-md-end">
                <a href="{{ route('checkout') }}" class="btn btn-primary btn-md checkout @if(!isset($cart['quantity']) || $cart['quantity'] == 0) disabled @endif ">Thanh toán</a>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
@endsection

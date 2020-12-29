@extends('layouts.app')

@section('header')
  @include('layouts.header')
@endsection

@section('content')
  <!-- SECTION TOP -->
  <section class="section section-top-absolute patern gap-up-1-top">
  </section>
  <!-- SECTION ABSOLUTE -->
  <section class="section section-absolute">
    <div class="container text-center">
      <h3>Your order has been received</h3>
      <h3>Thank you for your purchase!</h3>
      <p class="order-number">Your order is: {{ $order->code }}</p>
      <p class="order-descr">You will receive an order confirmation email with details of your order and a link to track
        its progress.</p>
      <div class="btn-wrap">
        <a href="{{ route('shop') }}" class="btn btn-primary btn-lg">Continue shopping</a>
      </div>
    </div>
  </section>

@endsection

@php
$cart = session('cart');
@endphp
<div class="cart-popup">
  <div class="cart-items">
    @if (isset($cart['items']))
      @foreach ($cart['items'] as $item)
        <div class="cart-item">
          <div class="cart-item-img-wrap">
            <img src="{{ Storage::url($item['item']->image) }}" alt="cart">
          </div>
          <div class="cart-item-descr" data-product-id="{{ $item['item']->id }}">
            <h5>{{ $item['item']->name }}</h5>
            <span>{{ $item['quantity'] }} X {{ number_format($item['item']->price) }} VND</span>
          </div>
          <div class="close-btn close-cart">
          </div>
        </div>
      @endforeach
    @endif
  </div>
  <div class="cart-subtotal-wrap">
    <span class="subtotal">Subtotal</span>
    <span class="subtotal-price cart-header-price">{{ isset($cart['total']) ? number_format($cart['total']) : 0 }}
      VND</span>
  </div>
  <ul class="cart-button-wrap">
    <li><a href="{{ route('cart') }}">View cart</a></li>
    <li><a href="{{ route('checkout') }}">Checkout</a></li>
  </ul>
</div>

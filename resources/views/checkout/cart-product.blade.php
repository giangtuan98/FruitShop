<div class="col-xl-5 col-lg-5 col-md-6">
  <table class="table checkout-table">
    <thead>
      <tr>
        <th style="width: 50%;"><span class="checkout-heading">Product</span></th>
        <th style="width: 27%;" class="text-center"><span class="checkout-heading">Quantity</span></th>
        <th style="width: 23%;" class="text-right"><span class="checkout-heading">Total</span></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($cart['items'] as $item)
        <tr>
          <td style="width: 50%;">
            <h4>{{ $item['item']->name }}</h4>
            <span>{{ $item['item']->category->name }}</span>
          </td>
          <td style="width: 27%;" class="text-center">
            {{ $item['quantity'] }}
          </td>
          <td style="width: 23%;" class="text-right">
            <span>{{ number_format($item['total']) }} VND</span>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
  <div class="checkout-total">
    <h3>Total:</h3>
    <div class="checkout-total-price">{{ number_format($cart['total']) }} VND</div>
  </div>
</div>

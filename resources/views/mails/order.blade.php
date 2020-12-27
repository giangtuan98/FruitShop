<p>Cảm ơn quý khách đã sử dụng sản phẩm của <b>HoaQuảSơn</b></p>
<p>Thông tin đơn hàng của quý khách là:</p>
<br />
<span>Họ và tên: {{ $data['customer']['name'] }}</span><br />
<span>Số điện thoại: <b style="color: red">{{ $data['customer']['phone'] }}</b></span><br />
<span>Địa chỉ: {{ $data['customer']['address'] }}</span><br />
<span>Mã đơn hàng: <b style="color: red">{{ $data['code'] }}</b></span><br />
<span>Sản phẩm:</span><br />
<ul>
  @foreach ($data['cart']['items'] as $item)
    <li>
      <span>{{ $item['item']->name }} : {{ number_format($item['total']) }} VND
        ({{ number_format($item['item']->price) }} x
        {{ $item['quantity'] }})
      </span>
    </li>
  @endforeach
</ul>

<span>Thành tiền: <b style="color: red">{{ number_format($data['cart']['total']) }} VND</b></span>

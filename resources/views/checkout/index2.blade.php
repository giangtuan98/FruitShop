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
      <form id="checkout_steps" action="#" class="checkout">
        <h4>Billing information<i class="fa fa-angle-right"></i></h4>
        <fieldset>
          <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" name="first_name" placeholder="First name" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" name="last_name" placeholder="Last name" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="email" name="email" placeholder="Email" class="form-control">
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="tel" name="phone" placeholder="Phone number" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <textarea name="additional" placeholder="Additional information (optional)" class="form-control"
                      rows="5"></textarea>

                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6">
              <table class="table checkout-table">
                <thead>
                  <tr>
                    <th style="width: 50%;"><span class="checkout-heading">Product</span></th>
                    <th style="width: 27%;" class="text-center"><span class="checkout-heading">Quantity</span></th>
                    <th style="width: 23%;" class="text-right"><span class="checkout-heading">Subtotal</span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 50%;">
                      <h4>Mushrooms</h4>
                      <span>Vegetable</span>
                    </td>
                    <td style="width: 27%;" class="text-center">
                      3
                    </td>
                    <td style="width: 23%;" class="text-right">
                      <span>36.00 $</span>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50%;">
                      <h4>Cucumbers</h4>
                      <span>Vegetable</span>
                    </td>
                    <td style="width: 27%;" class="text-center">
                      1
                    </td>
                    <td style="width: 23%;" class="text-right">
                      <span>12.00 $</span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="checkout-total">
                <h3>Cart total:</h3>
                <div class="checkout-total-price">48.00 $</div>
              </div>
            </div>
          </div>
        </fieldset>

        <h4>Shipping information<i class="fa fa-angle-right"></i></h4>
        <fieldset>
          <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" name="address" placeholder="Address" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <select class="selectpicker aquarelle-select" id="checkout_country" name="checkout_country"
                      title="Country">
                      <option>Spain</option>
                      <option>England</option>
                      <option>France</option>
                      <option>Germany</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <select class="selectpicker aquarelle-select" id="checkout_region" name="checkout_region"
                      title="State/Region">
                      <option>North</option>
                      <option>East</option>
                      <option>South</option>
                      <option>West</option>
                    </select>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6">
                  <div class="form-group">
                    <select class="selectpicker aquarelle-select" id="checkout_city" name="checkout_city" title="City">
                      <option>London</option>
                      <option>Paris</option>
                      <option>Madrid</option>
                      <option>Berlin</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="form-group">
                    <input type="text" name="checkout_code" placeholder="Zip/Postal code" class="form-control">

                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6">
              <table class="table checkout-table">
                <thead>
                  <tr>
                    <th style="width: 50%;"><span class="checkout-heading">Product</span></th>
                    <th style="width: 27%;" class="text-center"><span class="checkout-heading">Quantity</span></th>
                    <th style="width: 23%;" class="text-right"><span class="checkout-heading">Subtotal</span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 50%;">
                      <h4>Mushrooms</h4>
                      <span>Vegetable</span>
                    </td>
                    <td style="width: 27%;" class="text-center">
                      3
                    </td>
                    <td style="width: 23%;" class="text-right">
                      <span>36.00 $</span>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50%;">
                      <h4>Cucumbers</h4>
                      <span>Vegetable</span>
                    </td>
                    <td style="width: 27%;" class="text-center">
                      1
                    </td>
                    <td style="width: 23%;" class="text-right">
                      <span>12.00 $</span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="checkout-total">
                <h3>Cart total:</h3>
                <div class="checkout-total-price">48.00 $</div>
              </div>
            </div>
          </div>
        </fieldset>

        <h4>Shipping method<i class="fa fa-angle-right"></i></h4>
        <fieldset>
          <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-6 col-md-6">
              <div class="row">
                <div class="col-xl-4 col-lg-12">
                  <h4 class="shipping-method-header">Shiping Method</h4>
                  <div class="form-check abc-radio">
                    <input class="form-check-input" type="radio" name="shiping" id="checkout_pickup"
                      value="In-shop pickup">
                    <label class="form-check-label" for="checkout_pickup">
                      In-shop pickup
                    </label>
                  </div>
                  <div class="form-check abc-radio">
                    <input class="form-check-input" type="radio" name="shiping" id="checkout_express_courier"
                      value="Express courier">
                    <label class="form-check-label" for="checkout_express_courier">
                      Express courier
                    </label>
                  </div>
                  <div class="form-check abc-radio">
                    <input class="form-check-input" type="radio" name="shiping" id="checkout_post" value="Standart post">
                    <label class="form-check-label" for="checkout_post">
                      Standart post
                    </label>
                  </div>
                  <div class="form-check abc-radio">
                    <input class="form-check-input" type="radio" name="shiping" id="checkout_inter_courier"
                      value="International post">
                    <label class="form-check-label" for="checkout_inter_courier">
                      International post
                    </label>
                  </div>
                </div>
                <div class="col-xl-8 col-lg-12">
                  <div class="checkout-info-wrap">
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">First name</span>
                      <span class="checkout-info-dwscr">First name</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Last name</span>
                      <span class="checkout-info-dwscr">Razin</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Email</span>
                      <span class="checkout-info-dwscr">stenka@email.com</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Phone number</span>
                      <span class="checkout-info-dwscr">+12345678</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Additional information</span>
                      <span class="checkout-info-dwscr">-</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Adress</span>
                      <span class="checkout-info-dwscr">2075 Folson St</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Zip/Postal code</span>
                      <span class="checkout-info-dwscr">CA94110</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">State/Region (optional)</span>
                      <span class="checkout-info-dwscr">California</span>
                    </div>
                    <div class="checkout-info-group">
                      <span class="checkout-info-name">Country</span>
                      <span class="checkout-info-dwscr">The USA</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-6">
              <table class="table checkout-table">
                <thead>
                  <tr>
                    <th style="width: 50%;"><span class="checkout-heading">Product</span></th>
                    <th style="width: 27%;" class="text-center"><span class="checkout-heading">Quantity</span></th>
                    <th style="width: 23%;" class="text-right"><span class="checkout-heading">Subtotal</span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 50%;">
                      <h4>Mushrooms</h4>
                      <span>Vegetable</span>
                    </td>
                    <td style="width: 27%;" class="text-center">
                      3
                    </td>
                    <td style="width: 23%;" class="text-right">
                      <span>36.00 $</span>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50%;">
                      <h4>Cucumbers</h4>
                      <span>Vegetable</span>
                    </td>
                    <td style="width: 27%;" class="text-center">
                      1
                    </td>
                    <td style="width: 23%;" class="text-right">
                      <span>12.00 $</span>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50%;">
                      <h4>Shiping</h4>
                    </td>
                    <td style="width: 27%;" class="text-center">

                    </td>
                    <td style="width: 23%;" class="text-right">
                      <span>117.00 $</span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="checkout-total">
                <h3>Cart total:</h3>
                <div class="checkout-total-price">165.00 $</div>
              </div>
            </div>
          </div>
        </fieldset>

        <h4>Payment information</h4>
        <fieldset>
          <div class="row justify-content-between">
            <div class="col-xl-4 col-lg-6">
              <div class="form-check abc-radio">
                <input class="form-check-input" type="radio" name="payment" id="checkout_cash" value="Cash On Delivery">
                <label class="form-check-label" for="checkout_cash">
                  Cash On Delivery
                </label>
              </div>
              <div class="form-check abc-radio">
                <input class="form-check-input" type="radio" name="payment" id="checkout_delivery" value="Credit Card">
                <label class="form-check-label" for="checkout_delivery">
                  Credit Card
                </label>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" name="card_name" placeholder="Name on Card" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <input type="text" name="card_number" placeholder="Credit card number" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row checkout-payment-row">
                <div class="col-lg-9">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <select class="selectpicker aquarelle-select" id="checkout_month" name="checkout_month"
                          title="Month">
                          <option>01</option>
                          <option>02</option>
                          <option>03</option>
                          <option>04</option>
                          <option>05</option>
                          <option>06</option>
                          <option>07</option>
                          <option>08</option>
                          <option>09</option>
                          <option>10</option>
                          <option>11</option>
                          <option>12</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group">
                        <select class="selectpicker aquarelle-select" id="checkout_year" name="checkout_year"
                          title="Year">
                          <option>2018</option>
                          <option>2019</option>
                          <option>2020</option>
                          <option>2021</option>
                          <option>2022</option>
                          <option>2023</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-lg-3">
                  <div class="form-group">
                    <input type="text" name="checkout_cvv" placeholder="CVV" class="form-control">
                  </div>
                </div>
              </div>
              <div class="form-check abc-radio">
                <input class="form-check-input" type="radio" name="transfer" id="checkout_transfer"
                  value="Bank Transfer Payment">
                <label class="form-check-label" for="checkout_transfer">
                  Credit Card
                </label>
              </div>
            </div>
            <div class="col-xl-4 col-lg-5">
              <table class="table checkout-table">
                <thead>
                  <tr>
                    <th style="width: 50%;"><span class="checkout-heading">Product</span></th>
                    <th style="width: 27%;" class="text-center"><span class="checkout-heading">Quantity</span></th>
                    <th style="width: 23%;" class="text-right"><span class="checkout-heading">Subtotal</span></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td style="width: 50%;">
                      <h4>Mushrooms</h4>
                      <span>Vegetable</span>
                    </td>
                    <td style="width: 27%;" class="text-center">
                      3
                    </td>
                    <td style="width: 23%;" class="text-right">
                      <span>36.00 $</span>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50%;">
                      <h4>Cucumbers</h4>
                      <span>Vegetable</span>
                    </td>
                    <td style="width: 27%;" class="text-center">
                      1
                    </td>
                    <td style="width: 23%;" class="text-right">
                      <span>12.00 $</span>
                    </td>
                  </tr>
                  <tr>
                    <td style="width: 50%;">
                      <h4>Shiping</h4>
                    </td>
                    <td style="width: 27%;" class="text-center">

                    </td>
                    <td style="width: 23%;" class="text-right">
                      <span>117.00 $</span>
                    </td>
                  </tr>
                </tbody>
              </table>
              <div class="checkout-total">
                <h3>Cart total:</h3>
                <div class="checkout-total-price">165.00 $</div>
              </div>
            </div>
          </div>
        </fieldset>
      </form>
    </div>
  </section>


@endsection

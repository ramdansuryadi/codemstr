@extends('checkout')

@section('title', 'Shipping')

@section('content')

<!-- content section -->
<div id="tf-cart">

  <!-- header section -->
  <div class="cart-header">
    <div class="wrapper">
      <div class="cart-track">
        <div class="cart-track-list last">
          <a href="{{URL('/result')}}"><p>{{trans('checkout.backtosearch')}}</p></a>
        </div>
        <div class="cart-track-list">
          <span class="glyphicon glyphicon-menu-right"></span>
        </div>
        <div class="cart-track-list last">
          <a href="{{URL('/cart')}}"><p>{{trans('checkout.mycart')}}</p></a>
        </div>
        <div class="cart-track-list">
          <span class="glyphicon glyphicon-menu-right"></span>
        </div>
        <div class="cart-track-list last">
          <a href="{{URL('/shipping')}}"><p>{{trans('checkout.shippingaddress')}}</p></a>
        </div>
        <div class="cart-track-list">
          <span class="glyphicon glyphicon-menu-right"></span>
        </div>
        <div class="cart-track-list active">
          <a href="#"><p>{{trans('checkout.paymentoptions')}}</p></a>
        </div>
        <div class="cart-track-list">
          <span class="glyphicon glyphicon-menu-right"></span>
        </div>
        <div class="cart-track-list">
          <a href="{{URL('/overview')}}"><p>{{trans('checkout.orderoverview')}}</p></a>
        </div>
        <div class="cart-track-list">
          <span class="glyphicon glyphicon-menu-right"></span>
        </div>
        <div class="cart-track-list">
          <a href="#"><p>{{trans('checkout.confirmation')}}</p></a>
        </div>
      </div>
    </div>
  </div>

  <div class="myCart">
    <div class="myCart-container">
      <div class="myCart-header">
        <a class="myCart-back-btn" href="{{URL('/result')}}">
          <div class="myCart-back-icon">
            <span class="glyphicon glyphicon-menu-left"></span>
          </div>
          <div class="myCart-back">
            <p>{{trans('checkout.backtosearch')}}</p>
          </div>
        </a>
        <div class="myCart-title">
          {{trans('checkout.paymentoptions')}}
        </div>
      </div>
      <div class="myCart-order">

        <div class="payment-options">
          <div class="payment-options-container">

            <div class="payment-ls-header">
              <h4>{{trans('checkout.paymentoptions')}}</h4>
            </div>

            <div class="wire-transfer">
              <div class="wire-transfer-container">
                <div class="wire-transfer-btn">
                  <input type="radio" name="radiog_lite" id="radio-1" class="css-checkbox" checked="checked"/>
                  <label for="radio-1" class="css-label radGroup1 radGroup1">Wire Transfer with Buyer Protection <span>(Additional Fee Charged)</span></label>
                </div>
                <div class="wire-transfer-form">
                  <div class="transfer-left">
                    <p>{{trans('checkout.transferableamount-usd')}}</p>
                    <input type="text" name="name" value="">
                    <p>IBAN</p>
                    <input type="text" name="name" value="">
                  </div>
                  <div class="transfer-separator">
                    <img src="{{asset('img/separator.png')}}" alt="" />
                  </div>
                  <div class="transfer-right">
                    <p>{{trans('checkout.transferableamount-eur')}}</p>
                    <input type="text" name="name" value="">
                    <p>IBAN</p>
                    <input type="text" name="name" value="">
                  </div>
                  <div class="transfer-center">
                    <p>{{trans('checkout.reference')}}</p>
                    <input type="text" name="name" value="">
                  </div>
                </div>
              </div>
            </div>

            <div class="credit-card">
              <div class="credit-card-container">
                <div class="credit-card-btn">
                  <input type="radio" name="radiog_lite" id="radio-2" class="css-checkbox" checked="checked"/>
                  <label for="radio-2" class="css-label radGroup1 radGroup1">{{trans('checkout.creditcardpay')}}</label>
                </div>
                <div class="credit-card-form">
                  <div class="transfer-left">
                    <div class="card-form">
                      <p>{{trans('checkout.cardnum-usd')}}</p>
                      <select class="chosen-select" name="">
                        <option value="option">VISA</option>
                        <option value="option">Mactercard</option>
                      </select>
                      <input type="text" name="name" value="">
                    </div>
                    <p>{{trans('checkout.namecard')}}</p>
                    <input type="text" name="name" value="">
                    <div class="card-number">
                      <div class="valid-from">
                        <p>{{trans('checkout.valfrom')}}</p>
                        <input type="text" name="name" value="">
                      </div>
                      <div class="valid-until">
                        <p>{{trans('checkout.valuntil')}}</p>
                        <input type="text" name="name" value="">
                      </div>
                      <div class="cic-code">
                        <p>{{trans('checkout.cic-code')}}</p>
                        <input type="text" name="name" value="">
                      </div>
                    </div>
                  </div>
                  <div class="transfer-separator-big">
                    <img src="{{asset('img/big-separator.png')}}" alt="" />
                  </div>
                  <div class="transfer-right">
                    <div class="card-form">
                      <p>{{trans('checkout.cardnum-eur')}}</p>
                      <select class="chosen-select" name="">
                        <option value="option">VISA</option>
                        <option value="option">Mactercard</option>
                      </select>
                      <input type="text" name="name" value="">
                    </div>
                    <p>{{trans('checkout.namecard')}}</p>
                    <input type="text" name="name" value="">
                    <div class="card-number">
                      <div class="valid-from">
                        <p>{{trans('checkout.valfrom')}}</p>
                        <input type="text" name="name" value="">
                      </div>
                      <div class="valid-until">
                        <p>{{trans('checkout.valuntil')}}</p>
                        <input type="text" name="name" value="">
                      </div>
                      <div class="cic-code">
                        <p>{{trans('checkout.cic-code')}}</p>
                        <input type="text" name="name" value="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="order-detail">

          <div class="order-container">
            <div class="order-title">
              <h3>{{trans('checkout.orderdetail')}}</h3>
            </div>
            <div class="order">
              <dl class="">
                <dt>{{trans('checkout.partsubcost')}}</dt>
                <dd>USD 99.99</dd>
              </dl>
              <dl class="">
                <dt>{{trans('checkout.deliverycost')}}</dt>
                <dd>USD 0.00</dd>
              </dl>
              <hr>
              <dl class="total">
                <dt>
                {{trans('checkout.total')}} <span>({{trans('checkout.tax')}})</span>
                </dt>
                <dd>USD 99.99</dd>
              </dl>
            </div>

            <div class="order">
              <dl class="">
                <dt>{{trans('checkout.partsubcost')}}</dt>
                <dd>USD 99.99</dd>
              </dl>
              <dl class="">
                <dt>{{trans('checkout.deliverycost')}}</dt>
                <dd>USD 0.00</dd>
              </dl>
              <hr>
              <dl class="total">
                <dt>
                {{trans('checkout.total')}} <span>({{trans('checkout.tax')}})</span>
                </dt>
                <dd>USD 99.99</dd>
              </dl>
            </div>

            <div class="order-detail-ls-container">
              <div class="order-detail-ls">
                <div class="title-ls">
                  {{trans('checkout.shippedto')}}
                </div>
                <div class="header-ls">
                  Mango, Inc. - Abbey Road Studio
                </div>
                <div class="content-ls">
                  3 Abbey Rd, London NW8 9AY,
                </div>
                <div class="content-ls">
                  United Kingdom
                </div>
              </div>

              <div class="order-detail-ls">
                <div class="title-ls">
                  {{trans('checkout.invoiceto')}}
                </div>
                <div class="header-ls">
                  Mango, Inc. - Abbey Road Studio
                </div>
                <div class="content-ls">
                  3 Abbey Rd, London NW8 9AY,
                </div>
                <div class="content-ls">
                  United Kingdom
                </div>
              </div>

              <div class="order-detail-ls">
                <div class="title-ls">
                  {{trans('checkout.paidusing')}}
                </div>
                <div class="header-ls">
                  Mango, Inc. - Abbey Road Studio
                </div>
                <div class="content-ls">
                  3 Abbey Rd, London NW8 9AY,
                </div>
                <div class="content-ls">
                  United Kingdom
                </div>
                <a href="#">Edit <span class="glyphicon glyphicon-pencil"></span></a>
              </div>

              <div class="order-detail-ls">
                <div class="title-ls">
                  {{trans('checkout.shippedby')}}
                </div>

                <div class="shipped-ls">
                  <div class="delivery-name-ls">
                    <div class="header-ls">
                      {{trans('checkout.suborder')}} #1
                    </div>
                    <div class="content-ls">
                      {{trans('checkout.byland/sea')}}
                    </div>
                  </div>
                  <div class="delivery-image-ls">
                    <img src="{{asset('img/icon/dhl.png')}}" alt="" />
                  </div>
                </div>

                <div class="shipped-ls">
                  <div class="delivery-name-ls">
                    <div class="header-ls">
                      {{trans('checkout.suborder')}} #2
                    </div>
                    <div class="content-ls">
                      {{trans('checkout.byair')}}
                    </div>
                  </div>
                  <div class="delivery-image-ls">
                    <img src="{{asset('img/icon/dhl.png')}}" alt="" />
                  </div>
                </div>

                <a href="#">{{trans('checkout.edit')}} <span class="glyphicon glyphicon-pencil"></span></a>
              </div>
            </div>

          </div>

          <div class="submit-form-shipping">
            <input type="submit" name="" value="{{trans('checkout.next')}}">
          </div>

        </div>

        <div class="clearfix">

        </div>

      </div>
    </div>
  </div>
</div>

@endsection

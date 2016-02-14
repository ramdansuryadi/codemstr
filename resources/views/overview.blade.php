@extends('checkout')

@section('title', 'Items Cart')

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
          <a href="#"><p>{{trans('checkout.mycart')}}</p></a>
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
        <div class="cart-track-list last">
          <a href="{{URL('/payment')}}"><p>{{trans('checkout.paymentoptions')}}</p></a>
        </div>
        <div class="cart-track-list">
          <span class="glyphicon glyphicon-menu-right"></span>
        </div>
        <div class="cart-track-list active">
          <a href="#"><p>{{trans('checkout.orderoverview')}}</p></a>
        </div>
        <div class="cart-track-list">
          <span class="glyphicon glyphicon-menu-right"></span>
        </div>
        <div class="cart-track-list">
          <a href="{{URL('/confirmation')}}"><p>{{trans('checkout.confirmation')}}</p></a>
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
          {{trans('checkout.orderoverview')}}
        </div>
      </div>
      <div class="myCart-order">

        <div class="suborder-container">

          <p>
            {{trans('checkout.plaeasecheck')}}
          </p>

          <div class="suborder">
            <div class="suborder-header">
              <p>
                {{trans('checkout.suborder')}} #1 : AfterMarket Solutions Ltd. (California, U.S.A)
              </p>
            </div>
            <div class="suborder-content">

              <div class="suborder-content-container">
                <div class="suborder-content-image">
                  <img src="{{asset('img/thumbnails/3.png')}}" alt="" />
                </div>
                <div class="suborder-content-payment">
                  <div class="suborder-content-title">
                    <h4>Gritty Gaskets</h4>
                    <p>HSC0424PP</p>
                  </div>
                  <div class="suborder-content-total-pv">
                    <div class="suborder-content-price-pv">
                      <h4>USD 150</h4>
                      <input type="hidden" value="150" class="price-integer">
                    </div>
                    <div class="suborder-content-quantity-pv">
                      {{trans('checkout.quantity')}}
                    </div>
                    <div class="suborder-content-count-pv">
                      <h2>1</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="suborder-content-container">
                <div class="suborder-content-image">
                  <img src="{{asset('img/thumbnails/3.png')}}" alt="" />
                </div>
                <div class="suborder-content-payment">
                  <div class="suborder-content-title">
                    <h4>Gritty Gaskets</h4>
                    <p>HSC0424PP</p>
                  </div>
                  <div class="suborder-content-total-pv">
                    <div class="suborder-content-price-pv">
                      <h4>USD 150</h4>
                      <input type="hidden" value="150" class="price-integer">
                    </div>
                    <div class="suborder-content-quantity-pv">
                      {{trans('checkout.quantity')}}
                    </div>
                    <div class="suborder-content-count-pv">
                      <h2>1</h2>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="suborder-total">
              <div class="suborder-total-container">
                <form>

                  <div class="shipping-method-overview">
                    <p>
                      {{trans('checkout.this-suborder')}}
                    </p>
                  </div>

                  <div class="suborder-total-payment">
                    <div class="suborder-review-payment">
                      <dl class="">
                        <dt>{{trans('checkout.partsubcost')}}</dt>
                        <dd>USD <span id="sum-total"></span></dd>
                      </dl>
                      <dl class="">
                        <dt>{{trans('checkout.deliverycost')}}</dt>
                        <dd>USD 0.00</dd>
                      </dl>
                      <hr>
                      <dl>
                        <dt>{{trans('checkout.total')}}</dt>
                        <dd class="total">USD 99.99</dd>
                      </dl>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="suborder">
            <div class="suborder-header">
              <p>
                {{trans('checkout.suborder')}} #1 : AfterMarket Solutions Ltd. (California, U.S.A)
              </p>
            </div>
            <div class="suborder-content">

              <div class="suborder-content-container">
                <div class="suborder-content-image">
                  <img src="{{asset('img/thumbnails/3.png')}}" alt="" />
                </div>
                <div class="suborder-content-payment">
                  <div class="suborder-content-title">
                    <h4>Gritty Gaskets</h4>
                    <p>HSC0424PP</p>
                  </div>
                  <div class="suborder-content-total-pv">
                    <div class="suborder-content-price-pv">
                      <h4>USD 150</h4>
                      <input type="hidden" value="150" class="price-integer">
                    </div>
                    <div class="suborder-content-quantity-pv">
                      {{trans('checkout.quantity')}}
                    </div>
                    <div class="suborder-content-count-pv">
                      <h2>1</h2>
                    </div>
                  </div>
                </div>
              </div>

              <div class="suborder-content-container">
                <div class="suborder-content-image">
                  <img src="{{asset('img/thumbnails/3.png')}}" alt="" />
                </div>
                <div class="suborder-content-payment">
                  <div class="suborder-content-title">
                    <h4>Gritty Gaskets</h4>
                    <p>HSC0424PP</p>
                  </div>
                  <div class="suborder-content-total-pv">
                    <div class="suborder-content-price-pv">
                      <h4>USD 150</h4>
                      <input type="hidden" value="150" class="price-integer">
                    </div>
                    <div class="suborder-content-quantity-pv">
                      {{trans('checkout.quantity')}}
                    </div>
                    <div class="suborder-content-count-pv">
                      <h2>1</h2>
                    </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="suborder-total">
              <div class="suborder-total-container">
                <form>

                  <div class="shipping-method-overview">
                    <p>
                      {{trans('checkout.this-suborder')}}
                    </p>
                  </div>

                  <div class="suborder-total-payment">
                    <div class="suborder-review-payment">
                      <dl class="">
                        <dt>{{trans('checkout.partsubcost')}}</dt>
                        <dd>USD <span id="sum-total"></span></dd>
                      </dl>
                      <dl class="">
                        <dt>{{trans('checkout.deliverycost')}}</dt>
                        <dd>USD 0.00</dd>
                      </dl>
                      <hr>
                      <dl>
                        <dt>{{trans('checkout.total')}}</dt>
                        <dd class="total">USD 99.99</dd>
                      </dl>
                    </div>
                  </form>
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
            <input type="submit" name="" value="{{trans('checkout.placeorder')}}">
          </div>

        </div>

      <div class="clearfix">

      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  // $("[type='number']").keypress(function (evt) {
  //     evt.preventDefault();
  // });
  // jquery chosen disable_search
  $("#delivery-service-0, #delivery-service-1").chosen({
  "disable_search": true
  });

  var sum = 0;
  $(".suborder-content-total").each(function(i,o){

      total = parseInt($(o).find(".sub-quantity").val(), 10) * parseInt($(o).find(".price-integer").val(), 10);
      if(!isNaN(total) && total.length!=0) {
          $(o).find(".sub-total").text(total);
          sum += total;
          $("#sum-total").text(sum);
      }
  });
  $('.sub-quantity').on('change keyup', function() {
    var sum = 0;
    $(".suborder-content-total").each(function(i,o){

        total = parseInt($(o).find(".sub-quantity").val(), 10) * parseInt($(o).find(".price-integer").val(), 10);
        if(!isNaN(total) && total.length!=0) {
            $(o).find(".sub-total").text(total);
            sum += total;
        }
    });
    $("#sum-total").text(sum);
  });
</script>
@endsection

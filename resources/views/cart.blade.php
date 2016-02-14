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
        <div class="cart-track-list active">
          <a href="#"><p>{{trans('checkout.mycart')}}</p></a>
        </div>
        <div class="cart-track-list">
          <span class="glyphicon glyphicon-menu-right"></span>
        </div>
        <div class="cart-track-list">
          <a href="{{URL('/shipping')}}"><p>{{trans('checkout.shippingaddress')}}</p></a>
        </div>
        <div class="cart-track-list">
          <span class="glyphicon glyphicon-menu-right"></span>
        </div>
        <div class="cart-track-list">
          <a href="#"><p>{{trans('checkout.paymentoptions')}}</p></a>
        </div>
        <div class="cart-track-list">
          <span class="glyphicon glyphicon-menu-right"></span>
        </div>
        <div class="cart-track-list">
          <a href="#"><p>{{trans('checkout.orderoverview')}}</p></a>
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
          {{trans('checkout.mycart')}}
        </div>
      </div>
      <div class="myCart-order">

        <div class="suborder-container">

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
                  <div class="suborder-content-total">
                    <div class="suborder-content-price">
                      <h4>USD 150</h4>
                      <input type="hidden" value="150" class="price-integer">
                    </div>
                    <div class="suborder-content-quantity">
                      <input type="number" name="sub-quantity" id="base-unit-qty" class="sub-quantity" autocomplete="off" value="1">
                    </div>
                    <div class="suborder-content-count">
                      <p>USD</p>
                      <p class="sub-total"></p>
                    </div>
                  </div>
                </div>
                <a href="#"><img src="{{asset('img/icon/close.png')}}" alt=""></a>
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
                  <div class="suborder-content-total">
                    <div class="suborder-content-price">
                      <h4>USD 150</h4>
                      <input type="hidden" value="150" class="price-integer">
                    </div>
                    <div class="suborder-content-quantity">
                      <input type="number" name="sub-quantity" id="base-unit-qty" class="sub-quantity" autocomplete="off" value="1">
                    </div>
                    <div class="suborder-content-count">
                      <p>USD</p>
                      <p class="sub-total"></p>
                    </div>
                  </div>
                </div>
                <a href="#"><img src="{{asset('img/icon/close.png')}}" alt=""></a>
              </div>

            </div>
            <div class="suborder-total">
              <div class="suborder-total-container">
                <form>
                  <div class="suborder-shipping-method">
                    {{trans('checkout.shippingmethod')}}
                    <ul>
                      <li>
                        <input type="radio" name="radiog_lite" id="radio1" class="css-checkbox" />
                        <label for="radio1" class="css-label radGroup1 radGroup1">{{trans('checkout.shipland')}}</label>
                      </li>
                      <li>
                        <input type="radio" name="radiog_lite" id="radio2" class="css-checkbox" checked="checked"/>
                        <label for="radio2" class="css-label radGroup1 radGroup1">{{trans('checkout.shipair')}}</label>
                      </li>
                    </ul>
                  </div>
                  <div class="suborder-delivery-service">
                    <div class="delivery-service">
                      <select class="chosen-select" name="" id="delivery-service-0">
                        <option value="option">JNE</option>
                        <option value="option">POS</option>
                        <option value="option">FEDX</option>
                        <option value="option">TIKI</option>
                      </select>
                    </div>
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
                        <dt>Total</dt>
                        <dd class="total">USD 99.99</dd>
                      </dl>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>


          <a href="#" class="save-preset">{{trans('checkout.saveaspreset')}}</a>

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
        </div>
        <a href="#" class="current-checkout">{{trans('checkout.next')}}</a>
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

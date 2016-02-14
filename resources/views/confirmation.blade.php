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
        <div class="cart-track-list last">
          <a href="{{URL('/overview')}}"><p>{{trans('checkout.orderoverview')}}</p></a>
        </div>
        <div class="cart-track-list">
          <span class="glyphicon glyphicon-menu-right"></span>
        </div>
        <div class="cart-track-list active">
          <a href="#"><p>{{trans('checkout.confirmation')}}</p></a>
        </div>
      </div>
    </div>
  </div>

  <div class="myCart">
    <div class="myCart-container">
      <div class="myCart-header">
        <div class="myCart-title">
          {{trans('checkout.thanksfororder')}}
        </div>
      </div>
      <div class="myCart-order">

        <div class="order-success-message">
          <div class="order-success-header">
            <h4>{{trans('checkout.ordernumber')}}<span>308512033</span></h4>
          </div>
          <div class="order-success-content">
            <p>
              {{trans('checkout.youwillreceivemail')}}
            </p>
          </div>
          <div class="order-success-btn">
            <a href="#" class="to-order">{{trans('checkout.viewallorder')}}</a>
            <a href="#" class="to-search">{{trans('checkout.backtosearch')}}</a>
          </div>
        </div>

        <div class="order-success-ocerview">

          <div class="suborder-container">
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
                    Quantity
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
                    Quantity
                  </div>
                  <div class="suborder-content-count-pv">
                    <h2>1</h2>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- end sub-order -->




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

          </div>
          <!-- end order-detail -->

          <div class="clearfix">

          </div>

        </div>
        <!-- end order-success -->

    </div>
    <!-- end myCart-order -->
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

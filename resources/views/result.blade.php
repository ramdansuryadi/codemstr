@extends('checkout')

@section('title', 'Result')

@section('content')


<div id="tf-result">

  <div class="search-bar">

      <div class="search-container">
        <div class="row">
          <form class="form-horizontal" action="index.html" method="post">
            <div class="result-search">
              <div class="input-group">
                  <input type="text" class="form-control" placeholder="{{trans('result.searchthis')}}">
                  <span class="input-group-btn" style="right:0;">
                      <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                      </button>
                  </span>
              </div>
            </div>
            <div class='result-search-advanced'>

              <div class="adv-left">
                {{trans('result.manufacturer')}}
                  <select class="chosen-select" id="man">
                    <option>a</option>
                    <option>b</option>
                    <option>c</option>
                    <option>d</option>
                    <option>a</option>
                    <option>b</option>
                    <option>c</option>
                    <option>d</option>
                    <option>a</option>
                    <option>b</option>
                    <option>c</option>
                    <option>d</option>
                    <option>a</option>
                    <option>b</option>
                    <option>c</option>
                    <option>d</option>
                    <option>a</option>
                    <option>b</option>
                    <option>c</option>
                    <option>d</option>
                    <option>a</option>
                    <option>b</option>
                    <option>c</option>
                    <option>d</option>
                    <option>a</option>
                    <option>b</option>
                    <option>c</option>
                    <option>d</option>
                    <option>a</option>
                    <option>b</option>
                    <option>c</option>
                    <option>d</option>
                    <option>a</option>
                    <option>b</option>
                    <option>c</option>
                    <option>d</option>
                  </select>
              </div>

              <div class="oemcheck">
                <input type="checkbox" id="oem" />
                <label for="oem">{{trans('result.oemonly')}}</label>
              </div>

              <div class="adv-right">
                {{trans('result.sort')}}
                <select class="chosen-select" id="sort">
                  <option>a</option>
                  <option>b</option>
                  <option>c</option>
                  <option>d</option>
                  <option>a</option>
                  <option>b</option>
                  <option>c</option>
                  <option>d</option>
                  <option>a</option>
                  <option>b</option>
                  <option>c</option>
                  <option>d</option>
                  <option>a</option>
                  <option>b</option>
                  <option>c</option>
                  <option>d</option>
                  <option>a</option>
                  <option>b</option>
                  <option>c</option>
                  <option>d</option>
                  <option>a</option>
                  <option>b</option>
                  <option>c</option>
                  <option>d</option>
                  <option>a</option>
                  <option>b</option>
                  <option>c</option>
                  <option>d</option>
                  <option>a</option>
                  <option>b</option>
                  <option>c</option>
                  <option>d</option>
                  <option>a</option>
                  <option>b</option>
                  <option>c</option>
                  <option>d</option>
                </select>
              </div>
              <div class="clearfix">

              </div>
            </div>


          </form>

        </div>
      </div>

  </div>

  <div class="categories">
    <div class="cat-title">
      <h2>{{trans('result.categories')}}</h2>
    </div>
    <div class="cat-check">
      <div class="">
        <input type="checkbox" id="Spindles" />
        <label for="Spindles">{{trans('result.spindles')}}</label>
      </div>
      <div class="">
        <input type="checkbox" id="Engines" />
        <label for="Engines">{{trans('result.engines')}}</label>
      </div>
      <div class="">
        <input type="checkbox" id="Gaskets" />
        <label for="Gaskets">{{trans('result.gaskets')}}</label>
      </div>
      <div class="">
        <input type="checkbox" id="Gears" />
        <label for="Gears">{{trans('result.gears')}}</label>
      </div>
    </div>
  </div>

  <div class="product-cart">
    <div class="cart-title">
      <h2>{{trans('result.itemscart')}}</h2>
    </div>
    <div class="cart-check">
      <div class="current-cart">
        <h5>Unholy Screws</h5>
        <p>HSC0424PP</p>
        <a href="#"><img src="{{asset('img/icon/close.png')}}" alt="" /></a>
      </div>
      <div class="current-cart">
        <h5>Unholy Screws</h5>
        <p>HSC0424PP</p>
        <a href="#"><img src="{{asset('img/icon/close.png')}}" alt="" /></a>
      </div>
      <div class="current-cart">
        <h5>Unholy Screws</h5>
        <p>HSC0424PP</p>
        <a href="#"><img src="{{asset('img/icon/close.png')}}" alt="" /></a>
      </div>
      <div class="current-cart">
        <h5>Unholy Screws</h5>
        <p>HSC0424PP</p>
        <a href="#"><img src="{{asset('img/icon/close.png')}}" alt="" /></a>
      </div>
    </div>
    <a href="{{URL('/cart')}}" class="current-checkout">{{trans('result.proceedchcekout')}}</a>
  </div>

  <div class="clearfix">

  </div>

  <div class="result">

    <div class="main-result">
          <div class="product-wrapper clearfix">

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

            <div class="product">
                <div class="thumbnail">

                    <div class="products-img">
                      <a href="#"><img src="{{asset('img/thumbnails/1.png')}}" alt=""></a>
                    </div>
                    <div class="caption">
                      <div class="flg">
                        <span class="lang-lg" lang="en"></span>
                        <p>U.S.A</p>
                      </div>
                      <div class="oem">
                        <img src="{{asset('img/icon/oem.png')}}" alt="" />
                      </div>
                      <h4>Unholy Screw</h4>
                      <p>HSC0424PP</p>
                      <p>Karl Mayer Machinery</p>
                      <p>AfterMarket Solutions Ltd.</p>
                      <span>USD 99.99</span>
                      <h5>(EUR ~9999.99)</h5>
                      <a href="#"><img src="{{asset('img/icon/plus.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>

      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $('.search-bar').scrollToFixed();
  $('.categories').scrollToFixed({
    marginTop: $('.search-bar').outerHeight(true) + 80,
    minWidth: 1000,
    zIndex: 999,
    fixed: function() {  },
    dontCheckForPositionFixedSupport: true
});

$('.product-cart').scrollToFixed({
  marginTop: $('.search-bar').outerHeight(true) + 80,
  minWidth: 1000,
  zIndex: 999,
  fixed: function() {  },
  dontCheckForPositionFixedSupport: true
});



</script>


@endsection

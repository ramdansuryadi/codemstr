@extends('master')

@section('title', 'Detail')

@section('content')

<!-- Navigation
==========================================-->
<div id="tf-menu" class="navbar navbar-default navbar-fixed-top" role="navigation" data-0="background-color:rgba(0,0,0,0.0);" data-300="background-color: rgba(61, 62, 64, 1);">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="{{URL('/')}}"><img src="{{asset('img/logo.svg')}}" width="166" alt="" /></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
     
       @include('header-login')
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</div>

<div class="head">

</div>

<div id="tf-detail">
  <div class="detail">
    <div class="wrapper">
      <div class="product-details">
        <a href="#">
          <div class="detail-header">
            <div class="icon-bck">
              <span class="glyphicon glyphicon-menu-left"></span>
            </div>
            <div class="srch-rslt">
              {{trans('detail.searchresult')}}
            </div>
          </div>
        </a>
        <div class="detail-desc">
          <div class="detail-img">
            <div class="picZoomer">
                <img src="{{asset('img/thumbnails/1.png')}}" height="320" width="320" alt="">
            </div>

            <ul class="piclist">
                <li><img src="{{asset('img/thumbnails/1.png')}}" alt=""></li>
                <li><img src="{{asset('img/thumbnails/2.png')}}" alt=""></li>
                <li><img src="{{asset('img/thumbnails/3.png')}}" alt=""></li>
                <li><img src="{{asset('img/thumbnails/4.png')}}" alt=""></li>
                <li><img src="{{asset('img/thumbnails/5.png')}}" alt=""></li>
                <li><img src="{{asset('img/thumbnails/3.png')}}" alt=""></li>
            </ul>
          </div>
          <div class="product-title">
            <div class="title">
              <h2>Unholy Screw</h2>HSC0424PP
            </div>
            <div class="left-desc">

                <h6>{{trans('detail.sparepartsfor')}}</h6>
                <p>Karl Mayer Machinery</p>

                <h6>{{trans('detail.shippedby')}}</h6>
                <p>AfterMarket Solutions Ltd.</p>

                <h6>{{trans('detail.shippedfrom')}}</h6>
                <p>Germany</p>

                <h6>{{trans('detail.shippedto')}}</h6>
                <p>Worldwide</p>

                <a href="#" class="bookmark">{{trans('detail.bookmark')}}</a>

            </div>
            <div class="right-desc">
                <h6>{{trans('detail.quantitysale')}}</h6>
                <p>1000 cs</p>

                <h6>{{trans('detail.pricesale')}}</h6>
                <p class="price">USD 9999.99</p>
                <p class="approx">({{trans('detail.approx')}}. EUR 9999.99)</p>

                <h6>{{trans('detail.rating')}}</h6>
                <p>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  <span class="glyphicon glyphicon-star"></span>
                  &nbsp;5.0
                </p>
                <p class="rev">{{trans('detail.basedfrom')}}</p>

                <a href="#" class="addto">{{trans('detail.addtocart')}}</a>
            </div>
          </div>
          <div class="clearfix">


          </div>
        </div>

        <div class="quick-detail">
          <div class="title">
            <h3>{{trans('detail.quickdetail')}}</h4>
          </div>
          <div class="spec">

            <div class="spec-left">
              <dl>
                <dt>{{trans('detail.placeoforigin')}}</dt>
                <dd>China</dd>

                <dt>{{trans('detail.brandname')}}</dt>
                <dd>New Think</dd>

                <dt>{{trans('detail.modelnumber')}}</dt>
                <dd>XXXXXX</dd>

                <dt>{{trans('detail.usage')}}</dt>
                <dd>Home Appliance</dd>

                <dt>{{trans('detail.certification')}}</dt>
                <dd>ISO 9010</dd>

                <dt>{{trans('detail.type')}}</dt>
                <dd>Vacum Cleaner</dd>

                <dt>{{trans('detail.torque')}}</dt>
                <dd>3.5 Nm</dd>

                <dt>{{trans('detail.construction')}}</dt>
                <dd>Permanent Magnet</dd>

                <dt>{{trans('detail.commutation')}}</dt>
                <dd>Brushless</dd>

                <dt>{{trans('detail.protectfeature')}}</dt>
                <dd>Drip Proof</dd>

                <dt>{{trans('detail.speed')}}</dt>
                <dd>2500rpm</dd>
              </dl>
            </div>

            <div class="spec-right">
              <dl>
                <dt>{{trans('detail.continuous')}}</dt>
                <dd>6A</dd>

                <dt>{{trans('detail.outputpower')}}</dt>
                <dd>1600W</dd>

                <dt>{{trans('detail.voltage')}}</dt>
                <dd>220V</dd>

                <dt>{{trans('detail.eficiency')}}</dt>
                <dd>IE 2</dd>

                <dt>{{trans('detail.magneticfield')}}</dt>
                <dd>Brushless</dd>

                <dt>{{trans('detail.airflow')}}</dt>
                <dd>1.846cubic meter per minutes</dd>

                <dt>{{trans('detail.sparkle')}}</dt>
                <dd>0</dd>

                <dt>{{trans('detail.application')}}</dt>
                <dd>Wet & Dry</dd>

                <dt>{{trans('detail.commutation')}}</dt>
                <dd>Brushless</dd>

                <dt>{{trans('detail.halfsensor')}}</dt>
                <dd>Unavilable</dd>

                <dt>{{trans('detail.life')}}</dt>
                <dd><5000hr</dd>
              </dl>
            </div>
            <div class="clearfix">

            </div>

          </div>
        </div>

        <div class="product-description">
          <div class="title">
            <h3>{{trans('detail.productdesc')}}</h3>
          </div>
          <div class="desc">
            <p>
              INM series motors are developed based on Italian technology and incorporated design variations intended to increase the strength of the motor casings and load capacity of internal dynamic components.
              <br/>
              <br />
              Main Features:
              <br/>
              <br />
              Compared with other radial piston motors, they have many excellent features:
              <br/>- High volumetric efficiency (higher than 0.99) and mechanical efficiency (higher than 0.92)
              <br/>- Wide speed range (1-1000 rpm)
              <br/>- They could run in pump condition and freewheeling condition.
              <br/>- Stable running in extremely unfavorable environment from -50°C to 70°C.
              <br/>- Long lifetime.
              <br/>
              <br />
              Application:
              <br />
              <br />
              They are  widely used in all kinds of hydraulic transmission system such as plastic injection machines, hoisting winches and capstans, swing drives,  ship and deck machinery, construction machinery and equipments, hoist and transport vehicles, heavy metallurgical machinery, petroleum and mine machines, light industry equipments, lath, light industry equipments and drilling machines.
              <br />
              <br />
              Dimension:
            </p>
            <br />
            <img src="{{asset('img/product_detail/example.jpg')}}" alt="" />
          </div>

        </div>

        <div class="product-reviews">
          <div class="title">
            <h3>{{trans('detail.productreviews')}}</h3>
          </div>
          <div class="review-container">
            <ul class="list-box">
              <li class="review-list-container">
                <div class="list-box-content">

                    <div class="list-box-image">
                      <a href="#">
                        <img src="{{asset('img/user/example.jpg')}}" alt="" />
                      </a>
                    </div>

                  <div class="comment-container">
                    <div class="list-box-title">
                      <h4>Title</h4>
                      <p>
                        Seaside Vacation Tech.
                      </p>
                    </div>

                    <div class="list-box-comment">
                      <p>
                        You know, there are two things that kinda good for my cement mixing monstrocity; a cheap but well built parts! This one right here, is the shiz. The ultimate pinnacle of humankind history for this particular, moody machinery.
                        <br />
                        <br />
                        Do it. Do it for humanity. Do it for the future.
                      </p>
                    </div>
                  </div>

                  <div class="list-box-rating">
                    <p>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                    </p>
                  </div>

                </div>
              </li>
              <li class="review-list-container">
                <div class="list-box-content">

                    <div class="list-box-image">
                      <a href="#">
                        <img src="{{asset('img/user/example2.png')}}" alt="" />
                      </a>
                    </div>

                  <div class="comment-container">
                    <div class="list-box-title">
                      <h4>Title</h4>
                      <p>
                        Seaside Vacation Tech.
                      </p>
                    </div>

                    <div class="list-box-comment">
                      <p>
                        You know, there are two things that kinda good for my cement mixing monstrocity; a cheap but well built parts! This one right here, is the shiz. The ultimate pinnacle of humankind history for this particular, moody machinery.
                        <br />
                        <br />
                        Do it. Do it for humanity. Do it for the future.
                      </p>
                    </div>
                  </div>

                  <div class="list-box-rating">
                    <p>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                      <span class="glyphicon glyphicon-star"></span>
                    </p>
                  </div>

                </div>
              </li>
            </ul>
          </div>
        </div>

      </div>
    </div>
  </div>


</div>

    <!-- gallery zoom-->
    <script type="text/javascript" src="{{asset('js/jquery.picZoomer.js')}}"></script>
    <script type="text/javascript">
        $(function() {
            $('.picZoomer').picZoomer();


            //切换图片
            $('.piclist li').on('click',function(event){
                var $pic = $(this).find('img');
                $('.picZoomer-pic').attr('src',$pic.attr('src'));
            });
        });
    </script>

@endsection

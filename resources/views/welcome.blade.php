@extends('master')

@section('title', 'Home')

@section('content')
    <!-- Navigation
    ==========================================-->
    <div id="tf-menu-main" class="navbar navbar-default navbar-fixed-top" role="navigation" data-0="background-color:rgba(0,0,0,0.0);" data-300="background-color: rgba(61, 62, 64, 1);">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button id="change" type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{URL('/')}}"><img src="{{asset('img/logo.svg')}}"  width="166" cslass="size-img-logo" alt="" /></a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


           @include('header-login')
        </div>
        <!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </div>

    <!-- Home Page
    ==========================================-->
    <div id="tf-home" class="text-center">
      <div class="overlay">
        <div class="container">
          <div class="content">

            <form class="search-responsive" action="{{URL('/search')}}" method="post">

              <div class="home-search">
                <a href="{{URL('/search')}}">
                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="{{trans('welcome.searchnshop')}}...">
                    <span class="input-group-btn" style="right:0;">
                      <button type="submit" class="btn btn-default">
                        <span class="glyphicon glyphicon-search"></span>
                      </button>
                    </span>
                  </div>
                </a>
              </div>
            </form>
            <h1>{{ trans('welcome.greetings-1') }}</h1>
            <h1>{{ trans('welcome.greetings-2') }}</h1>
          <p class="lead">{{ trans('welcome.intro-1') }}<br class="auto-line-break1">{{ trans('welcome.intro-2') }}<br class="auto-line-break2">{{ trans('welcome.intro-3') }}</p>

            <div class="">
              <a href="#tf-about" class="more page-scroll">{{ trans ('welcome.more') }}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
      <div class="container">
        <div class="box">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="about-text">
                <div class="section-title">
                  <h2>{{ trans('welcome.aboutHeader') }}</h2>
                  <p>{{ trans('welcome.aboutIntro') }}</p>
                  <div class="clearfix"></div>
                </div>
                <p class="intro">{{ trans('welcome.introduction') }}</p>
                <div class="row">
                  <h2 class="center points">{{ trans('welcome.no1') }}</h2>
                  <div class="col-xs-12 col-md-4 col-sm-4 service">
                    <img src="{{asset('img/icon/extensive.svg')}}"   width="120" height="120" class="size-img" alt="" />
                    <h4>{{ trans('welcome.globalReach') }}</h4>
                    <p>{{ trans('welcome.globaldesc') }}</p>
                  </div>

                  <div class="col-xs-12  col-md-4 col-sm-4 service">
                    <img src="{{asset('img/icon/robust.svg')}}" width="120" height="120" class="size-img" alt="" />
                    <h4>{{ trans('welcome.shipment') }}</h4>
                    <p>{{ trans('welcome.shipmentdesc') }}</p>
                  </div>

                  <div class="col-xs-12  col-md-4 col-sm-4 service">
                    <img src="{{asset('img/icon/reliable.svg')}}" width="120" height="120" class="size-img" alt="" />
                    <h4>{{ trans('welcome.noagents')}}</h4>
                    <p>{{ trans('welcome.noagentsdesc')}}</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
      <!-- profit Page
      ==========================================-->
      <div id="tf-profit" class="text-center">
        <div class="overlay">
          <div class="container">
            <div class="section-title center">
             <h2>{{ trans('welcome.gain')}}</h2>
           </div>

           <div class="row">
            <div class="col-xs-12 col-md-6 col-sm-6 profit">
              <img src="{{asset('img/icon/iconParts.svg')}}" width="144" height="144" class="size-img-profit" alt=""/>
              <h4>{{ trans('welcome.suppliers')}}</h4>
              <ul>
                <li>{{trans('welcome.manage')}}</li>
                <li>{{trans('welcome.receive')}}</li>
                <li>{{trans('welcome.communicate')}}</li>
                <li>{{trans('welcome.trade')}}</li>
                <li>{{trans('welcome.review')}}</li>
                <li>{{trans('welcome.generate')}}</li>
              </ul>
              <a href="{{URL('/reg-parts')}}" class="reg-btn">{{trans('welcome.regsup')}}</a>
            </div>

            <div class="col-xs-12  col-md-6 col-sm-6 profit">
              <img src="{{asset('img/icon/iconFactory.svg')}}" width="144" height="144" class="size-img-profit" alt="" />
              <h4>{{trans('welcome.factory')}}</h4>
              <ul>
                <li>{{trans('welcome.searchby')}}</li>
                <li>{{trans('welcome.findbest')}}</li>
                <li>{{trans('welcome.simple')}}</li>
                <li>{{trans('welcome.track')}}</li>
                <li>{{trans('welcome.lifetime')}}</li>
              </ul>
              <a href="{{URL('/reg-factory')}}" class="reg-btn">{{trans('welcome.regfacto')}}</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="text-center">
      <div class="container">
        <div class="box">
          <div class="row">
            <div class="col-xs-8 col-xs-offset-2  col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">

              <div class="section-title center batas">
               <h2>{{trans('welcome.contactus')}}</h2>
               <div class="clearfix"></div>
               <p>{{trans('welcome.useone')}}</p>
             </div>
             <div class="row">
              <div class="col-xs-6 col-md-6 col-sm-6 contact">
                <a href="#" class="email"><img src="{{asset('img/icon/email.svg')}}" width="96"  class="size-img-contact" alt="" /></a>
              </div>
              <div class="col-xs-6 col-md-6 col-sm-6 contact">
                <a href="#" class="call" ><img src="{{asset('img/icon/phone.svg')}}" width="96"  class="size-img-contact" alt="" /></a>
              </div>
              <div class="clearfix">
              </div>
            </div>
          </div>
        </div>

        <iframe  style="pointer-events: none;"  src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2558.604582273482!2d8.670003215949608!3d50.112407819545304!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd0eac7a19bf27%3A0xe9432f6e53bd0bdf!2sMain+Tower!5e0!3m2!1sen!2sid!4v1453431280375" width="1080" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>


      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{asset('js/skrollr.min.js')}}"></script>
  <script type="text/javascript">

  function main() {

    (function () {
     'use strict';

       /* ==============================================
        Testimonial Slider
        =============================================== */

        $('a.page-scroll').click(function() {
          if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
            if (target.length) {
              $('html,body').animate({
                scrollTop: target.offset().top - 60
              }, 900);
              return false;
            }
          }
        });

      }());


  }
  main();

  </script>
  <script type="text/javascript">
  window.addEventListener("scroll", yScroll);
  var yPos;

  function yScroll(){
    var header = document.getElementById('tf-menu-main');
    yPos = window.pageYOffset;

    if(yPos > 50){
      header.style.backgroundColor = "#3d3e40";
    } else {
      header.style.backgroundColor = "transparent";
    }
  }
  </script>
  <script>
  $( "#change" ).click(function() {
    $( ".navbar-default" ).toggleClass( "change-bg" );
  });
  </script>
  @endsection

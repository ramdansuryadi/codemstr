<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MASPA - @yield('title')</title>
    <meta name="description" content="Spirit8 is a Digital agency one page template built based on bootstrap framework. This template is design by Robert Berki and coded by Jenn Pereira. It is simple, mobile responsive, perfect for portfolio and agency websites. Get this for free exclusively at ThemeForces.com">
    <meta name="keywords" content="bootstrap theme, portfolio template, digital agency, onepage, mobile responsive, spirit8, free website, free theme, themeforces themes, themeforces wordpress themes, themeforces bootstrap theme">
    <meta name="author" content="ThemeForces.com">

    <!-- Favicons
    ================================================== -->
    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('img/favicons/apple-touch-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/favicons/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('img/favicons/apple-touch-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('img/favicons/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/favicons/apple-touch-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('img/favicons/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('img/favicons/apple-touch-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('img/favicons/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('img/favicons/apple-touch-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('img/favicons/apple-touch-icon-180x180.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/favicons/favicon-32x32.png')}}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{asset('img/favicons/android-chrome-192x192.png')}}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{asset('img/favicons/favicon-96x96.png')}}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{asset('img/favicons/favicon-16x16.png')}}" sizes="16x16">
    <link rel="manifest" href="{{asset('img/favicons/manifest.json')}}">
    <link rel="mask-icon" href="{{asset('safari-pinned-tab.svg')}}" color="#5bbad5">
    <meta name="apple-mobile-web-app-title" content="maspa">
    <meta name="application-name" content="maspa">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="{{asset('img/favicons/mstile-144x144.png')}}">
    <meta name="theme-color" content="#ffffff">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/font.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('fonts/font-awesome/css/font-awesome.css')}}">
    <!-- language flag -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/languages.min.css')}}" media="screen" title="no title" charset="utf-8">
    <!-- pic zoom -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/jquery-picZoomer.css')}}">
    <!-- Stylesheet
    ================================================== -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/chosen.css')}}">
    <link rel="stylesheet" type="text/css"  href="{{asset('css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/grayscale2.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/responsive2.css')}}">


    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400' rel='stylesheet' type='text/css'>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/jquery.1.11.1.js')}}"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/SmoothScroll.js')}}"></script>
    <!-- <script type="text/javascript" src="{{asset('js/jquery.isotope.js')}}"></script> -->
    <script type="text/javascript" src="{{asset('js/skrollr.min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/chosen.jquery.js')}}"></script>
    <!-- <script src="{{asset('js/jquery.localscroll-1.2.7-min.js')}}"></script> -->

    <!-- Javascripts
    ================================================== -->
    <script type="text/javascript" src="{{asset('js/jquery-scrolltofixed-min.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/main.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/grayscale.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/modernizr.custom.js')}}"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


    @yield('content')

    <!-- Footer Section
    ==========================================-->

    <nav id="tf-footer" class="navbar">
      <div class="container">
        <div class="footer-wrapper">
          <div class="footer">
            <div class="pull-left fnav">
              <p>2015 MASPA - Machinery Spares</p>
            </div>
            <div class="pull-right fnav">
                <div class="form-group">
                  <label for=""></label>
                  {{trans('menu.language')}} :
                  <div class="btn-group dropup">
                    <button type="button" class="btn btn-default dropdown-toggle lang-btn" data-toggle="dropdown">
                      <span class="lang-sm" lang="<?php if (Lang::getLocale() == 'id' ) {echo 'in';} else {echo 'iw';}?>"></span> <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu lang-menu" role="menu">
                      @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                          <li>
                              <a rel="alternate" hreflang="{{$localeCode}}" href="{{LaravelLocalization::getLocalizedURL($localeCode) }}">
                                  <span class="lang-sm" lang="{{{ $properties['regional'] }}}"></span> {{{ $properties['native'] }}}
                              </a>
                          </li>
                      @endforeach
                    </ul>
                  </div>
                </div>
            </div>
            <div class="clearfix">

            </div>
          </div>
        </div>
      </div>

    </nav>


  <!-- Modal -->
    <div id="myModal" class="modal fade" role="dialog">
      <div class="modal-dialog">
        <div class="modal-thankyou">
          <div class="logothankyou"> <img src="img/content/btn-thankyou.png" height="96" width="108">  </div>
          <div class="thankyou">
            <h1>Thank You</h1>
            <p> One of our Sales Representatives will be in touch <br> with you within the next 3 working days. </p>
          </div>
        </div>
      </div>


  </body>
</html>

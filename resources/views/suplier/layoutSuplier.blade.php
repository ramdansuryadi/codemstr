<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- css library -->
	<link rel="stylesheet" type="text/css"  href="{{asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.vertical-tabs.css')}}">
	<link rel="stylesheet" type="text/css"  href="{{asset('css/font.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/jquery-picZoomer.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/chosen.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/suplier.css')}}">

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


	<!-- javascript library -->
	<script type="text/javascript" src="{{asset('js/jquery.1.11.1.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/chosen.jquery.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/canvasjs.min.js')}}"></script>
	<script type="text/javascript" src="{{asset('js/suplier.js')}}"></script>

	<script type="text/javascript">
		var BASE_URL = "{{url('/')}}";
	</script>

</head>
<body>
<div class="suplierWrapper" >
	<div class="suplierHead">
	<div class="leftLogo">
		 <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('img/logo.svg')}}" alt="" width="166" /></a>
		 <div class="yourSalesPage">
		 	<div>AfterMarket Solution Ltd.</div>
		 	<div>California, USA</div>
		 </div>
		 	<div class="btnYsp">
		 		<a href="">YOUR SALES PAGE</a>
		 	</div>
	</div>
	<div class="rightLogo">
		 <a class="amsLogo"><img src="{{asset('img/suplierImage/ams-logo.png')}}" alt="" /></a>
		 <span class="textLogoRight">AfterMarket Machinery Spares</span>
	</div>
	</div>
	<div class="suplierContent">
		<div class="col-xs-3 sideNav navSuplier"> 

		<!-- Nav tabs -->
		<ul class="nav nav-tabs tabs-left ">
			<li class="active">
				<a href="#home" data-toggle="tab" class="sideNavSuplier">
					<div class="navIcon navIcon_home"></div>
					<div class="blockTextNav">
						<div>
							Home
						</div>
						<div class="descNav">
							Quick info in one place
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="#profile" data-toggle="tab" class="sideNavSuplier">
					<div class="navIcon navIcon_profile"></div>
					<div class="blockTextNav">
						<div>
							Profile
						</div>
						<div class="descNav">
							Your personal data
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="#catalog" data-toggle="tab" class="sideNavSuplier">
					<div class="navIcon navIcon_catalog"></div>
					<div class="blockTextNav">
						<div>
							Catalog
						</div>
						<div class="descNav">
							Manage your item
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="#orders" data-toggle="tab" class="sideNavSuplier">
					<div class="navIcon navIcon_order"></div>
					<div class="blockTextNav">
						<div>
							Orders
						</div>
						<div class="descNav">
							Handle your orders
						</div>
					</div>
					<div class="numberIconNav">
							45
					</div>
				</a>
			</li>
			<li>
				<a href="#inbox" data-toggle="tab" class="sideNavSuplier">
					<div class="navIcon navIcon_inbox"></div>
					<div class="blockTextNav">
						<div>
							Inbox
						</div>
						<div class="descNav">
							Answer your message
						</div>
					</div>
					<div class="numberIconNav">
							768
					</div>
				</a>
			</li>
			<li>
				<a href="#reviews" data-toggle="tab" class="sideNavSuplier">
					<div class="navIcon navIcon_review"></div>
					<div class="blockTextNav">
						<div>
							Reviews
						</div>
						<div class="descNav">
							View your clients' reviews
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="#finance" data-toggle="tab" class="sideNavSuplier">
					<div class="navIcon navIcon_finance"></div>
					<div class="blockTextNav">
						<div>
							Finance
						</div>
						<div class="descNav">
							Evaluate your finance
						</div>
					</div>
				</a>
			</li>
			<li>
				<a href="#payout" data-toggle="tab" class="sideNavSuplier">
					<div class="navIcon navIcon_payout"></div>
					<div class="blockTextNav">
						<div>
							Payout
						</div>
						<div class="descNav">
							Get your payout
						</div>
					</div>
				</a>
			</li>
		</ul>
	</div>

	  @yield('suplierContent')
		
	</div>
	
</div>
</body>
</html>
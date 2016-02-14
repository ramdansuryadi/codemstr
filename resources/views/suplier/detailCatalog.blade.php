<div class="backToCatalog" onclick="backCatalogFunc()">
		<div class="backToCatalogBtn">
			
		</div>
		<div class="backText" >
			Back to Catalog
		</div>
	</div>
	<div class="mainContentPreview">
		

		<div id="tf-detail">
			<div class="detail">
				<div class="wrapper">
					<div class="product-details">
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
								</ul>
							</div>
							<div class="product-title">
								<div class="title">
									<h2>Unholy Screw</h2>HSC0424PP
								</div>
								<div class="left-desc">

									<h6>Spareparts for</h6>
									<p>Karl Mayer Machinery</p>

									<h6>Supplied by</h6>
									<p>AfterMarket Solutions Ltd.</p>

									<h6>Shipped from</h6>
									<p>Germany</p>

									<h6>Shipped to</h6>
									<p>Worldwide</p>

									<a href="#" class="bookmark">Bookmark</a>

								</div>
								<div class="right-desc">
									<h6>Quantity per Sale Package</h6>
									<p>1000 cs</p>

									<h6>Price per Sale Package</h6>
									<p class="price">USD 9999.99</p>
									<p class="approx">(approx. EUR 9999.99)</p>

									<h6>Rating</h6>
									<p>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										<span class="glyphicon glyphicon-star"></span>
										&nbsp;5.0
									</p>
									<p class="rev">Based from 10 reviews</p>

									<a href="#" class="addto">Add To Chart</a>
								</div>
							</div>
							<div class="clearfix">


							</div>
						</div>

						<div class="quick-detail">
							<div class="title">
								<h3>Quick Detail</h3>
							</div>
							<div class="spec">

								<div class="spec-left">
									<dl>
										<dt>Place of origin</dt>
										<dd>China</dd>

										<dt>Brand Name</dt>
										<dd>New Think</dd>

										<dt>Model Number</dt>
										<dd>XXXXXX</dd>

										<dt>Usage</dt>
										<dd>Home Appliance</dd>

										<dt>Certification</dt>
										<dd>ISO 9010</dd>

										<dt>Type</dt>
										<dd>Vacum Cleaner</dd>

										<dt>Torque</dt>
										<dd>3.5 Nm</dd>

										<dt>Constructin</dt>
										<dd>Permanent Magnet</dd>

										<dt>Cummutation</dt>
										<dd>Brushless</dd>

										<dt>Protect Feature</dt>
										<dd>Drip Proof</dd>

										<dt>Speed (RPM)</dt>
										<dd>2500rpm</dd>
									</dl>
								</div>

								<div class="spec-right">
									<dl>
										<dt>Continuous Current (A)</dt>
										<dd>6A</dd>

										<dt>Output Power</dt>
										<dd>1600W</dd>

										<dt>Voltage (A)</dt>
										<dd>220V</dd>

										<dt>Eficiency</dt>
										<dd>IE 2</dd>

										<dt>Magnetic Field Shift</dt>
										<dd>Brushless</dd>

										<dt>Air Flow</dt>
										<dd>1.846cubic meter per minutes</dd>

										<dt>Sparkle</dt>
										<dd>0</dd>

										<dt>Application</dt>
										<dd>Wet & Dry</dd>

										<dt>Cummutation</dt>
										<dd>Brushless</dd>

										<dt>Hall Sensor</dt>
										<dd>Unavilable</dd>

										<dt>Life</dt>
										<dd><5000hr</dd>
									</dl>
								</div>
								<div class="clearfix">

								</div>

							</div>
						</div>

						<div class="product-description">
							<div class="title">
								<h3>Product Description</h3>
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
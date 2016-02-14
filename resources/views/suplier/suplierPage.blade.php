@extends('suplier.layoutSuplier')

@section('suplierContent')

<div class="suplier">
	<div class="col-xs-9 contentSuplier">
		<!-- Tab panes -->
		<div class="tab-content mainContent">

			<div class="tab-pane active" id="home">
				<div class="wrapHalf wrapHomeSuplier">
					<div class="contentPageSuplier homeSuplierContent">
						<div class="contentMainTitle contentSection">
							<div class="logoTitleHomeSuplier">

							</div>
							<div>
								<h1>Welcome back!</h1>
							</div>
						</div>
						<div class="contentOrderHome contentSection">
							<div class="sectionContentTitile">
								Orders
							</div>
							<div class="greenTextContent">
								15 new paid order(s)
							</div>
							<div class="suplierGreenSeparator"></div>
							<div class="contentShowSuplier showOrder">
								content show
							</div>
						</div>
						<div class="contentInboxHome contentSection">
							<div class="sectionContentTitile">
								Inbox
							</div>
							<div class="greenTextContent">
								7 new inquiry(s)
							</div>
							<div class="suplierGreenSeparator"></div>
							<div class="contentShowSuplier showInbox">
								content show
							</div>
						</div>
						<div class="contentReviewsHome contentSection">
							<div class="sectionContentTitile">
								Reviews
							</div>
							<div class="greenTextContent">
								86 new reviews(s)
							</div>
							<div class="suplierGreenSeparator"></div>
							<div class="contentShowSuplier showReviews">
								content show
							</div>
						</div>
					</div>
					<div class="suplierContentInfo homeSuplierInfo">
						<div class="contentInfo">
							<h3>News</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>	
						</div>
						<div class="contentInfo">
							<h3>Tips</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>
						</div>
						<div class="contentInfo">
							<h3>Help</h3>
							<ul class="suplierSideInfo">
								<li>
									How to edit my items’ details?
								</li>
								<li>
									How can I accept an order?
								</li>
								<li>
									How can I summon Kyuubi?
								</li>
								<li>
									How can I lick my elbow?
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane" id="profile">
				<div class="wrapHalf wrapProfileSuplier">
					<div class="contentPageSuplier profileSuplierContent">
						<div class="contentMainTitle contentSection">
							<div class="logoTitleHomeSuplier">

							</div>
							<div>
								<h1>Your Profile</h1>
							</div>
						</div>
						<div class="formProfileSection">
							<div class="titleFormProfile">
								Company Profile
							</div>
							<form id="formProfile">
								<div class="formHalf">
									<div class="profilCompany">
										<label class="labelBlock">Company Name</label>
										<input type="text" class="largeInput">

										<label class="labelBlock">Street Address #1</label>
										<input type="text" class="largeInput">

										<label class="labelBlock">Street Address #2</label>
										<input type="text" class="largeInput">
										<div class="formHalf">
											<div class="inlineInput">
												<label class="labelBlock">City</label>
												<input type="text" class="largeInput">
											</div>
											<div class="inlineInput">
												<label class="labelBlock">Country</label>
												<select class="chosen-select selectCountry" >
													<option>United Kingdom</option>
													<option>b</option>
													<option>c</option>
													<option>d</option>
													<option>United Kingdom</option>
													<option>b</option>
													<option>c</option>
													<option>d</option>
													<option>United Kingdom</option>
													<option>b</option>
													<option>c</option>
													<option>d</option>
													<option>United Kingdom</option>
													<option>b</option>
													<option>c</option>
													<option>d</option>
													<option>United Kingdom</option>
													<option>b</option>
													<option>c</option>
													<option>d</option>
													<option>United Kingdom</option>
													<option>b</option>
													<option>c</option>
													<option>d</option>
													<option>United Kingdom</option>
													<option>b</option>
													<option>c</option>
													<option>d</option>
													<option>United Kingdom</option>
													<option>b</option>
													<option>c</option>
													<option>d</option>
													<option>United Kingdom</option>
													<option>b</option>
													<option>c</option>
													<option>d</option>
												</select>
											</div>
											<div class="inlineInput">
												<label class="labelBlock">Postcode</label>
												<input type="text" class="largeInput">
											</div>
										</div>

										<label class="labelBlock">Email Address</label>
										<input type="text" class="largeInput">

										<label class="labelBlock">Phone Number</label>
										<input type="text" class="largeInput">
									</div>
									<div class="profilImage">
										<div class="previewUpload">
											<img id="imgProfile" src="{{asset('img/suplierImage/ams-logo-big.png')}}" alt="" />
										</div>
										<label for="image_file" class="select_file editImgBtn">Edit</label>
										<input id="image_file" type="file" name="image_file" multiple class="hide select_file" value="">
									</div>		
								</div>
							</form>
						</div>
					</div>
					<div class="suplierContentInfo profileSuplierInfo">
						<div class="contentInfo">
							<h3>News</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>	
						</div>
						<div class="contentInfo">
							<h3>Tips</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>
						</div>
						<div class="contentInfo">
							<h3>Help</h3>
							<ul class="suplierSideInfo">
								<li>
									How to edit my items’ details?
								</li>
								<li>
									How can I accept an order?
								</li>
								<li>
									How can I summon Kyuubi?
								</li>
								<li>
									How can I lick my elbow?
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane" id="catalog">
				<div class="wrapHalf wrapCatalogSuplier">
					<div class="contentPageSuplier catalogSuplierContent">
						<div class="contentMainTitle contentSection">
							<div class="logoTitleHomeSuplier"></div>
							<div>
								<h1>Your Catalog</h1>
							</div>
						</div>
						<div class="wrapperCatalogDisplay">
							<div class="wrapperCatalogPreview"></div>
							<div class="catalogDisplay">
								<form id="formFlterCatalog">
									<div class="filterCatalog">
										<label class="labelFilter">Filter</label>
										<input type="text" placeholder="Keyword..." class="inputFilterCatalog">
										<div class="clearFilter">CLEAR</div>	
									</div>
									<div class="wrapperTableCatalog">
										<table class="tableCatalog">
											<thead>
												<tr>
													<th class="active ascending">
														Part Name<b></b>
													</th>
													<th class="ascending">
														Part Number<b></b>
													</th>		
													<th class="ascending">
														Instock<b></b>
													</th>
													<th class="ascending">
														Price<b></b>
													</th>
													<th></th>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td onclick="reviewCatalog()" class="partName">Hogling Hub</td>
													<td>LKDJHF54849</td>		
													<td><input type="checkbox" name="part_name_1"></label></td>
													<td>999.999 USD</td>
													<td class="editColumn"> 
														<div class="editCatalog" onclick="editCatalog()"></div>
														<div class="deleteCatalog"></div>	
													</td>
												</tr>
												<tr>
													<td onclick="reviewCatalog()" class="partName">Hogling Hub</td>
													<td>LKDJHF54849</td>		
													<td><input type="checkbox" name="part_name_2"></td>
													<td>999.999 USD</td>
													<td class="editColumn"> 
														<div class="editCatalog" onclick="editCatalog()"></div>
														<div class="deleteCatalog"></div>	
													</td>
												</tr>
												<tr>
													<td onclick="reviewCatalog()" class="partName">Hogling Hub</td>
													<td>LKDJHF54849</td>		
													<td><input type="checkbox" name="part_name_3"></td>
													<td>999.999 USD</td>
													<td class="editColumn"> 
														<div class="editCatalog" onclick="editCatalog()"></div>
														<div class="deleteCatalog"></div>	
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</form>
							</div>
						</div>
					</div>

					<div class="suplierContentInfo catalogSuplierInfo">
						<div class="contentInfo">
							<h3>News</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>	
						</div>
						<div class="contentInfo">
							<h3>Tips</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>
						</div>
						<div class="contentInfo">
							<h3>Help</h3>
							<ul class="suplierSideInfo">
								<li>
									How to edit my items’ details?
								</li>
								<li>
									How can I accept an order?
								</li>
								<li>
									How can I summon Kyuubi?
								</li>
								<li>
									How can I lick my elbow?
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane" id="orders">
				<div class="wrapHalf wrapOrdersSuplier">
					<div class="contentPageSuplier ordersSuplierContent">
						<div class="contentMainTitle contentSection">
							<div class="logoTitleHomeSuplier">

							</div>
							<div>
								<h1>Your Orders</h1>
							</div>
						</div>
						<div class="wrapperOrderDisplay">
							<div class="detailOrderDisplay">
								
							</div>
							<div class="listAllOrder">
								<div class="blockOrder">
									<div class="blankRed ">
									</div>
									<div class="blankGreen hide">
									</div>
									<div class="leftOrderDetail">
										<div class="titleOrder">
											Order 3425453453 - 29 Nov 2015
										</div>
										<div class="blockImgOrder">
											<img src="{{asset('img/thumbnails/2.png')}}" alt="">
											<img src="{{asset('img/thumbnails/3.png')}}" alt="">
											<img src="{{asset('img/thumbnails/1.png')}}" alt="">
											<img src="{{asset('img/thumbnails/4.png')}}" alt="">
											<img src="{{asset('img/thumbnails/5.png')}}" alt="">
										</div>
									</div>
									<div class="rightOrderDetail">
										<div class="greenBold">
											SHIPPED
										</div>
										<div class="greyBold hide">
											ON QUEUE
										</div>
										<div class="checkDetailBtn" onclick="detailOrderFunc()">
											CHECK DETAIL
										</div>
									</div>
								</div>


								<div class="blockOrder">
									<div class="blankRed hide">
									</div>
									<div class="blankGreen ">
									</div>
									<div class="leftOrderDetail">
										<div class="titleOrder">
											Order 3425453453 - 29 Nov 2015
										</div>
										<div class="blockImgOrder">
											<img src="{{asset('img/thumbnails/2.png')}}" alt="">
											<img src="{{asset('img/thumbnails/3.png')}}" alt="">
											<img src="{{asset('img/thumbnails/1.png')}}" alt="">
											<img src="{{asset('img/thumbnails/4.png')}}" alt="">
											<img src="{{asset('img/thumbnails/5.png')}}" alt="">
										</div>
									</div>
									<div class="rightOrderDetail">
										<div class="greenBold hide">
											SHIPPED
										</div>
										<div class="greyBold ">
											ON QUEUE
										</div>
										<div class="checkDetailBtn" onclick="detailOrderFunc()">
											CHECK DETAIL
										</div>
									</div>
								</div>

								<div class="blockOrder">
									<div class="blankRed hide">
									</div>
									<div class="blankGreen hide">
									</div>
									<div class="leftOrderDetail">
										<div class="titleOrder">
											Order 3425453453 - 29 Nov 2015
										</div>
										<div class="blockImgOrder">
											<img src="{{asset('img/thumbnails/2.png')}}" alt="">
											<img src="{{asset('img/thumbnails/3.png')}}" alt="">
											<img src="{{asset('img/thumbnails/1.png')}}" alt="">
											<img src="{{asset('img/thumbnails/4.png')}}" alt="">
											<img src="{{asset('img/thumbnails/5.png')}}" alt="">
										</div>
									</div>
									<div class="rightOrderDetail">
										<div class="greenBold">
											SHIPPED
										</div>
										<div class="greyBold hide">
											ON QUEUE
										</div>
										<div class="checkDetailBtn" onclick="detailOrderFunc()">
											CHECK DETAIL
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="suplierContentInfo ordersSuplierInfo">
						<div class="contentInfo">
							<h3>News</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>	
						</div>
						<div class="contentInfo">
							<h3>Tips</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>
						</div>
						<div class="contentInfo">
							<h3>Help</h3>
							<ul class="suplierSideInfo">
								<li>
									How to edit my items’ details?
								</li>
								<li>
									How can I accept an order?
								</li>
								<li>
									How can I summon Kyuubi?
								</li>
								<li>
									How can I lick my elbow?
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane" id="inbox">
				<div class="wrapHalf wrapInboxSuplier">
					<div class="contentPageSuplier inboxSuplierContent">
						<div class="contentMainTitle contentSection">
							<div class="logoTitleHomeSuplier">

							</div>
							<div>
								<h1>Your Inbox</h1>
							</div>
						</div>
						<div class="displayDetailInbox"></div>
						<div class="inboxContent">

							<div class="blockInbox">
								<div class="blankGreenInbox">
								</div>
								<div class="leftInboxDetail" onclick="detailInboxFunc()">
									<div class="messageSubject">
										Is the stock for UHP#9779 is up and ready?
									</div>
									<div class="messageFrom">
									From <span>Monolith Co.</span>
									</div>
								</div>
								<div class="rightInboxDetail">
									<div class="inboxDate">
										27 Nov 2015 -09:30 AM
									</div>
									<div class="checkInboxBtn">
										<button>DELETE</button>
									</div>
								</div>
							</div>

							<div class="blockInbox">
								<div class="blankGreenInbox">
								</div>
								<div class="leftInboxDetail" onclick="detailInboxFunc()">
									<div class="messageSubject">
										Is the stock for UHP#9779 is up and ready?
									</div>
									<div class="messageFrom">
									From <span>Monolith Co.</span>
									</div>
								</div>
								<div class="rightInboxDetail">
									<div class="inboxDate">
										27 Nov 2015 -09:30 AM
									</div>
									<div class="checkInboxBtn">
										<button>DELETE</button>
									</div>
								</div>
							</div>

							<div class="blockInbox">
								<div class="blankGreenInbox hide">
								</div>
								<div class="leftInboxDetail" onclick="detailInboxFunc()">
									<div class="messageSubject">
										Is the stock for UHP#9779 is up and ready?
									</div>
									<div class="messageFrom">
									From <span>Monolith Co.</span>
									</div>
								</div>
								<div class="rightInboxDetail">
									<div class="inboxDate">
										27 Nov 2015 -09:30 AM
									</div>
									<div class="checkInboxBtn">
										<button>DELETE</button>
									</div>
								</div>
							</div>

							<div class="blockInbox">
								<div class="blankGreenInbox ">
								</div>
								<div class="leftInboxDetail" onclick="detailInboxFunc()">
									<div class="messageSubject">
										Is the stock for UHP#9779 is up and ready?
									</div>
									<div class="messageFrom">
									From <span>Monolith Co.</span>
									</div>
								</div>
								<div class="rightInboxDetail">
									<div class="inboxDate">
										27 Nov 2015 -09:30 AM
									</div>
									<div class="checkInboxBtn">
										<button>DELETE</button>
									</div>
								</div>
							</div>



						</div>
					</div>
					<div class="suplierContentInfo inboxSuplierInfo">
						<div class="contentInfo">
							<h3>News</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>	
						</div>
						<div class="contentInfo">
							<h3>Tips</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>
						</div>
						<div class="contentInfo">
							<h3>Help</h3>
							<ul class="suplierSideInfo">
								<li>
									How to edit my items’ details?
								</li>
								<li>
									How can I accept an order?
								</li>
								<li>
									How can I summon Kyuubi?
								</li>
								<li>
									How can I lick my elbow?
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane" id="reviews">
				<div class="wrapHalf wrapReviewsSuplier">
					<div class="contentPageSuplier reviewsSuplierContent">
						<div class="contentMainTitle contentSection">
							<div class="logoTitleHomeSuplier">

							</div>
							<div>
								<h1>Your Reviews</h1>
							</div>
						</div>
						<div class="displayDetailReview"></div>
						<div class="wrapperReviews">

							<div class="blockReviews reviews_1">
								<div class="reviewsFor">
									Review(s) for <span class="reviewsForTitle">Grinding Gears UHT69595</span>
								</div>

								<div class="reviewsContent">
									<div class="picReviewer">
										<img src="{{asset('img/thumbnails/2.png')}}" alt="">
									</div>
									<div class="bodyReviews">
										<h3 class="subjectReviews">This not Good!!!</h3>
											<span class="senderPlace">
												Monolith Co.
											</span> - 
											<span class="senderDate">
												27 Nov 2015-09:30 AM
											</span>
										<p class="reviewsTextBody">
											there are two things that kinda good for my cement mixing monstrocity; You know, there are two things there are two things that kinda good for my cement mixing monstrocity; You know, there are two things there are two things that kinda good for my cement mixing monstrocity; You know, there are two things that kinda good for my cement mixing monstrocity; a cheap but well built parts! This one right here, is the shiz. The ultimate pinnacle of humankind history for this particular, moody machinery.
											<br>Do it. Do it for humanity. Do it for the future.
										</p>
									</div>
									<div class="btnWriteReply" onclick="replyReviewFunc()">WRITE A REPLY</div>
									<div class="reviewsRating stars-review" >
										<input type="hidden" name"rating"="" value="4">
					                
					                </div>
								</div>

								<div class="reviewsContent">
									<div class="picReviewer">
										<img src="{{asset('img/thumbnails/2.png')}}" alt="">
									</div>
									<div class="bodyReviews">
										<h3 class="subjectReviews">This not Good!!!</h3>
											<span class="senderPlace">
												Monolith Co.
											</span> - 
											<span class="senderDate">
												27 Nov 2015-09:30 AM
											</span>
										<p class="reviewsTextBody">
											there are two things that kinda good for my cement mixing monstrocity; You know, there are two things there are two things that kinda good for my cement mixing monstrocity; You know, there are two things there are two things that kinda good for my cement mixing monstrocity; You know, there are two things that kinda good for my cement mixing monstrocity; a cheap but well built parts! This one right here, is the shiz. The ultimate pinnacle of humankind history for this particular, moody machinery.
											<br>Do it. Do it for humanity. Do it for the future.
										</p>
									</div>
									<div class="btnWriteReply" onclick="replyReviewFunc()">WRITE A REPLY</div>
									<div class="reviewsRating stars-review" >
										<input type="hidden" name"rating"="" value="4">
					              
					                </div>
								</div>
							</div>

							<div class="blockReviews reviews_2">
								<div class="reviewsFor">
									Review(s) for <span class="reviewsForTitle">Grinding Gears UHT69595</span>
								</div>

								<div class="reviewsContent">
									<div class="picReviewer">
										<img src="{{asset('img/thumbnails/2.png')}}" alt="">
									</div>
									<div class="bodyReviews">
										<h3 class="subjectReviews">This not Good!!!</h3>
											<span class="senderPlace">
												Monolith Co.
											</span> - 
											<span class="senderDate">
												27 Nov 2015-09:30 AM
											</span>
										<p class="reviewsTextBody">
											there are two things that kinda good for my cement mixing monstrocity; You know, there are two things there are two things that kinda good for my cement mixing monstrocity; You know, there are two things there are two things that kinda good for my cement mixing monstrocity; You know, there are two things that kinda good for my cement mixing monstrocity; a cheap but well built parts! This one right here, is the shiz. The ultimate pinnacle of humankind history for this particular, moody machinery.
											<br>Do it. Do it for humanity. Do it for the future.
										</p>
									</div>
									<div class="btnWriteReply" onclick="replyReviewFunc()">WRITE A REPLY</div>
									<div class="reviewsRating stars-review" >
										<input type="hidden" name"rating"="" value="4">
					               
					                </div>
								</div>
							</div>


						</div>
					</div>
					<div class="suplierContentInfo reviewsSuplierInfo">
						<div class="contentInfo">
							<h3>News</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>	
						</div>
						<div class="contentInfo">
							<h3>Tips</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>
						</div>
						<div class="contentInfo">
							<h3>Help</h3>
							<ul class="suplierSideInfo">
								<li>
									How to edit my items’ details?
								</li>
								<li>
									How can I accept an order?
								</li>
								<li>
									How can I summon Kyuubi?
								</li>
								<li>
									How can I lick my elbow?
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane" id="finance">
				<div class="wrapHalf wrapFinanceSuplier">
					<div class="contentPageSuplier financeSuplierContent">
						<div class="contentMainTitle contentSection">
							<div class="logoTitleHomeSuplier">

							</div>
							<div>
								<h1>Your Finance</h1>
							</div>
						</div>
						<div class="wrapFinanceContent">
							<div class="blockFinancePanel">
								<div class="greenPanel">
									<div class="titlePanelFinance">
										Sales Earning This Month (<span class="monthEarning">December</span>) 
									</div>
									<div class="numPanelFinance">
										USD 80.000
									</div>
									<div class="descFinancePanel">
										
									</div>
								</div>
								<div class="greenPanel">
									<div class="titlePanelFinance">
										Your Balance :
									</div>
									<div class="numPanelFinance">
										USD 80.000
									</div>
									<div class="descFinancePanel">
										
									</div>
								</div>
								<div class="greenPanel">
									<div class="titlePanelFinance">
										Total Value Of Your Sales
									</div>
									<div class="numPanelFinance">
										USD 80.000
									</div>
									<div class="descFinancePanel">
										based on the listed price
									</div>
								</div>
							</div>
							<div class="blockStatistic">
								<div class="blockSelectFinance">
									<div class="oneLine">
										<select class="chosen-select selectItemSales" >
											<option>Item Sales</option>
											<option>b</option>
											<option>c</option>
											<option>d</option>
											<option>United Kingdom</option>
											<option>b</option>
											<option>c</option>
											<option>d</option>
										</select>
									</div>
									<label class="greenLabel"><span>All Time</span> / <span>2015</span> / <span>November</span></label>	
								</div>

								<div id="graphicFinance" style="height: 500px; width: 100%;">

								</div>

							</div>
						</div>
					</div>
					<div class="suplierContentInfo inanceSuplierInfo">
						<div class="contentInfo">
							<h3>News</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>	
						</div>
						<div class="contentInfo">
							<h3>Tips</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>
						</div>
						<div class="contentInfo">
							<h3>Help</h3>
							<ul class="suplierSideInfo">
								<li>
									How to edit my items’ details?
								</li>
								<li>
									How can I accept an order?
								</li>
								<li>
									How can I summon Kyuubi?
								</li>
								<li>
									How can I lick my elbow?
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="tab-pane" id="payout">
				<div class="wrapHalf wrapPayoutSuplier">
					<div class="contentPageSuplier payoutSuplierContent">
						<div class="contentMainTitle contentSection">
							<div class="logoTitleHomeSuplier">

							</div>
							<div>
								<h1>Your Payout</h1>
							</div>
						</div>
						<div class="wrapperPayout">
							<div class="blockPayout">
								<div class="wrapCurrentBalance">
									<div class="currentBalance">
										<div class="titleCurrent">Your Current Balance</div>
										<div class="blockBalance">
											<div class="balanceTotal">USD 80.000</div>
											<div class="balanceTotal">EUR 80.000</div>		
										</div>
										<div class="formWithdraw">
											<div class="marginTop10">Withdraw Your Balance</div>
											<div class="blockChooseWithdraw">
												<div class="radioBlockWithdraw">
													<input type="radio" name="radiog_withdraw_1" id="radioWithdraw-1" class="css-checkbox" />
	                  								<label for="radioWithdraw-1" class="css-label radGroup1 radGroup1">USD</label>
													<input type="radio" name="radiog_withdraw_1" id="radioWithdraw-2" class="css-checkbox"/>
	                  								<label for="radioWithdraw-2" class="css-label radGroup1 radGroup1">EUR</label>
												</div>
												<div class="inputTextBlock">
													<input type="text" class="withdrawInput">
												</div>
												<div class="withdrawBtn">
													<button>WITHDRAW</button>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="wrapDefaultWithdraw">
									<div class="defaultWithdraw">
										<div class="titleWithdraw">Default Withdrawal Account</div>
										<div class="acountDefault">
											<div class="iconWithdraw">
												<img id="imgWithdraw" src="{{asset('img/suplierImage/paypal-icon.png')}}" alt="" />
											</div>
											<div class="emailWithdraw">
												<span>kurtze@gmail.com</span>
											</div>
											<div class="editImgWithdraw">
												<label for="image_withdraw" class="select_withdraw labelImgWithdraw">Edit</label>
												<input id="image_withdraw" type="file" name="image_withdraw" multiple class="hide select_withdraw" value="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="suplierContentInfo payoutSuplierInfo">
						<div class="contentInfo">
							<h3>News</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>	
						</div>
						<div class="contentInfo">
							<h3>Tips</h3>
							<ul class="suplierSideInfo">
								<li>
									The excellent way to display product description.
								</li>
								<li>
									Tips for a product photo preview.
								</li>
								<li>
									Easier product search.
								</li>
								<li>
									Manage your catalog efficiently.
								</li>
							</ul>
						</div>
						<div class="contentInfo">
							<h3>Help</h3>
							<ul class="suplierSideInfo">
								<li>
									How to edit my items’ details?
								</li>
								<li>
									How can I accept an order?
								</li>
								<li>
									How can I summon Kyuubi?
								</li>
								<li>
									How can I lick my elbow?
								</li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>  
</div>
<script type="text/javascript" src="{{asset('js/canvas.finance.js')}}"></script>


@endsection	
<div class="editOrderHead">
	<div class="backToOrder" onclick="backDetailOrderFunc()">
		<div class="backToOrderBtn">
			
		</div>
		<div class="backText" >
			Back to Overview
		</div>
	</div>
	<div class="editOrderTitle">
		<h3>Order 54534534</h3>
		29 November 2015
	</div>
	<div class="statusOrderQueue hide">
		ON QUEUE
	</div>
	<div class="statusOrderShipped">
		SHIPPED
	</div>
</div>
<form id="formEditOrder" class="">
	<div class="detailContentOrder">
		<div class="leftOrderOverview">
			<div class="blockImgPrice">
				<div class="imgPriceOrder item_1">
					<div class="imgItem">
						<img src="{{asset('img/thumbnails/2.png')}}" alt="">
					</div>
					<div class="imgPriceOrderName">
						<div class="topCodeItem">
							<p>
								Gritty Gasket
							</p>
							<p class="marginMin">
								HSC45655HG
							</p>
						</div>
						<div class="litlePrice">
							USD 9999.9
						</div>
					</div>
					<div class="imgPriceOrderPrice">
						<div>
							<span>QTY.</span><span class="bigFontNum">	1</span>
						</div>
						<div class="bigFontPrice">
							USD 999.999
						</div>
					</div>
				</div>
				<div class="imgPriceOrder item_2">
					<div class="imgItem">
						<img src="{{asset('img/thumbnails/4.png')}}" alt="">
					</div>
					<div class="imgPriceOrderName">
						<div class="topCodeItem">
							<p>
								Gritty Gasket
							</p>
							<p class="marginMin">
								HSC45655HG
							</p>
						</div>
						<div class="litlePrice">
							USD 9999.9
						</div>
					</div>
					<div class="imgPriceOrderPrice">
						<div>
							<span>QTY.</span><span class="bigFontNum">	1</span>
						</div>
						<div class="bigFontPrice">
							USD 999.999
						</div>
					</div>
				</div>
				<div class="imgPriceOrder item_3">
					<div class="imgItem">
						<img src="{{asset('img/thumbnails/3.png')}}" alt="">
					</div>
					<div class="imgPriceOrderName">
						<div class="topCodeItem">
							<p>
								Gritty Gasket
							</p>
							<p class="marginMin">
								HSC45655HG
							</p>
						</div>
						<div class="litlePrice">
							USD 9999.9
						</div>
					</div>
					<div class="imgPriceOrderPrice">
						<div>
							<span>QTY.</span><span class="bigFontNum">	1</span>
						</div>
						<div class="bigFontPrice">
							USD 999.999
						</div>
					</div>
				</div>
			</div>
			<div class="priceDetail">
				<div class="leftTotalPrice">
					Requested to be shipped
						<br>
					by land/sea
				</div>
				<div class="rightTotalPrice">
					<div class="sumPrice">
						<div class="detailSum">
							<div class="blockBIllItem">
								<div class="billName">Parts Subtotal costs</div>
								<div class="billNumber">USD 999999.99</div>
							</div>
							<div class="blockBIllItem">
								<div class="billName">Parts Subtotal costs</div>
								<div class="billNumber">USD 999999.99</div>
							</div>
							<div class="blockBIllItem">
								<div class="billName">Parts Subtotal costs</div>
								<div class="billNumber">USD 999999.99</div>
							</div>
							<div class="blockBIllItem">
								<div class="billName">Parts Subtotal costs</div>
								<div class="billNumber">USD 999999.99</div>
							</div>
							<div class="blockBIllItem">
								<div class="billName">Parts Subtotal costs</div>
								<div class="billNumber">USD 999999.99</div>
							</div>
							<div class="blockBIllItem">
								<div class="billName">Parts Subtotal costs</div>
								<div class="billNumber">USD 999999.99</div>
							</div>
							<div class="blockBIllItem">
								<div class="billName">Delivery Cost</div>
								<div class="billNumber">USD 12.99</div>
							</div>
						</div>
					</div>
					<div class="separatorBill"></div>
					<div class="totalPriceOrder">
						<div class="totalText">
							Total
						</div>
						<div class="totalNumber">
							USD 999999.99
						</div>
					</div>
				</div>
			</div>
			<div class="trackingForm">
				<label class="">Tracking Number</label>
				<input type="text" class="trackingFieldInput">
			</div>
			<div>
				<button class="btnAsShipped">MARK AS SHIPPED</button>
				<div class="errorShipped hide">
					<div class="errorShippedIcon"></div>
					<div class="errorShippedText">
						The Buyer opened a ticket for this order. We will contact you as soon as possible to resolve this issue.
					</div>
				</div>
			</div>
		</div>
		<div class="rightOrderOverview">
			<div class="receiptHead">
				<h3>Order Detail</h3>
			</div>
			<div class="detailSumReceipt">
				<div class="blockBIllItem">
					<div class="billName">Parts Subtotal costs</div>
					<div class="billNumber">USD 999999.99</div>
				</div>
				<div class="blockBIllItem">
					<div class="billName">Delivery Costs</div>
					<div class="billNumber">USD 999.99</div>
				</div>
				<div class="separatorBillReceipt"></div>
				<div class="totalPriceOrder">
					<div class="totalText">
						Total <span>(Tax incl.)</span>
					</div>
					<div class="totalNumber">
						USD 999999.99
					</div>
				</div>
			</div>
			<div class="blockSIPS">
				<div class="blockAddressSIPS shippedTo">
					<div class="titleSIPS">
						Shipped to
					</div>
					<div class="firstAddressSIPS">
						Mango, Inc. - Abbey Road Studio
					</div>
					<div class="secondAddressSIPS">
						3 Abbey Rd, London NW8 9AY,
					</div>
					<div class="countryAddressSIPS">
						United Kingdom
					</div>
				</div>
				<div class="blockAddressSIPS invoicedTo">
					<div class="titleSIPS">
						Invoiced to
					</div>
					<div class="firstAddressSIPS">
						Mango, Inc. - Abbey Road Studio
					</div>
					<div class="secondAddressSIPS">
						3 Abbey Rd, London NW8 9AY,
					</div>
					<div class="countryAddressSIPS">
						United Kingdom
					</div>
				</div>
				<div class="blockAddressSIPS paidUsing">
					<div class="titleSIPS">
						Paid to
					</div>
					<div class="firstAddressSIPS">
						Mango, Inc. - Abbey Road Studio
					</div>
					<div class="secondAddressSIPS">
						3 Abbey Rd, London NW8 9AY,
					</div>
					<div class="countryAddressSIPS">
						United Kingdom
					</div>
				</div>
				<div class="blockAddressSIPS shippedBY">
					<div class="titleSIPS">
						Shipped by
					</div>
					<div class="halfShippedBy">
						<div class="detailShippedBy">
							<div class="firstAddressSIPS">
								Sent through
							</div>
							<div class="secondAddressSIPS">
								by land/sea
							</div>
						</div>
						<div class="logoShippedBy">
							<img src="{{asset('img/suplierImage/shipped-by-example.png')}}" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</form>


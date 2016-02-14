<div class="editCatalogHead">
	<div class="backToCatalog" onclick="backCatalogFunc()">
		<div class="backToCatalogBtn">
			
		</div>
		<div class="backText" >
			Back to Catalog
		</div>
	</div>
	<div class="editCatalogTitle">
		Editing Catalogue Entry
		<br>
		Horrible Higgling Hub (HSC0424PP)
	</div>
</div>
<form id="formEditCatalog" class="">
	<div class="wrapperEditCatalog">
			<div class="leftSideEdit">
				<div class="formGeneral">
					<div class="generalHead numberForm">
						<span class="textFormHead">GENERAL</span> 
					</div>
					<div>	
						<label class="labelBlock">Manufacturer</label>
						<input type="text" class="largeInput">

						<label class="labelBlock">Part Name</label>
						<input type="text" class="largeInput">

						<label class="labelBlock">Part Number</label>
						<input type="text" class="largeInput">

						<div class="formHalf">
							<div class="twoInputInline">
								<label class="labelBlock">Type</label>
								<input type="text" class="largeInput">
							</div>
							<div class="twoInputInline">
								<label class="labelBlock">Model</label>
								<input type="text" class="largeInput">
							</div>
						</div>

						<div class="formHalf">
							<div class="inlineInput">
								<label class="labelBlock">Dimension</label>
								<input type="text" class="largeInput">
								<label class="labelBlock">Height</label>
							</div>
							<div class="inlineInput">
								<label class="labelBlock zeroOpacity">label</label>
								<input type="text" class="largeInput">
								<label class="labelBlock">Width</label>
							</div>
							<div class="inlineInput">
								<label class="labelBlock zeroOpacity">label</label>
								<input type="text" class="largeInput">
								<label class="labelBlock">Depth</label>
							</div>
						</div>
						<label> Image(s)</label>
						<div class="imageInputArea">
							<div class="imgAreaTop">
								<div class="placeholderImg">

								<input type="file" id="imgUploadCatalog_1" name="imgUploadCatalog" class="dragImg" multiple>
								</div>
								<img src="" id="imgToUpload_1" class="hide">
							</div>
							<div class="imgAreaBottom">
								<div class="btnUpload">
									<label for="imgUploadCatalog_1" class="zeroMargin labelUpload">UPLOAD</label>
								</div>	
							</div>
						</div>
						<div class="addMoreImgArea"></div>
						<div class="addMore addMoreImg" onclick="moreAreaImg()">+ Add more part image</div>

					</div>
				</div>
			</div>
			<div class="rightSideEdit">
				<div class="formPricing">
					<div class="pricingHead numberForm">
						<span class="textFormHead">PRICING</span> 
					</div>
					<div>	
						<div class="formHalf">
							<div class="twoInputInline">
								<label class="labelBlock">Price per piece</label>
								<input type="text" class="fiftyWidthInput">
							</div>
							<div class="twoInputInline">
								<label class="labelBlock">Min.Quantity</label>
								<input type="text" class="fiftyWidthInput">
								<label class="rightLabel">pcs</label>
							</div>
						</div>
						<div class="formHalf">
							<div class="twoInputInline">
								<label class="labelBlock">Discount</label>
								<input type="text" class="fiftyWidthInput" id="percentDiscount_1">
								<label class="rightLabel">%</label>
							</div>
							<div class="twoInputInline">
								<label class="labelBlock zeroOpacity">label</label>
								<label class="leftLabel">from</label>
								<input type="text" class="fiftyWidthInput" id="fromDiscount_1">
								<label class="rightLabel">pcs</label>
							</div>
						</div>
						<div class="addMoreDiscountArea"></div>
						<div class="addMore" onclick="moreDiscount()">+ Add another discount tier</div>
					</div>
				</div>
				<div class="formSupply">
					<div class="supplyHead numberForm">
						<span class="textFormHead">SUPPLY</span> 
					</div>
					<div>	
						<label class="labelBlock">Delivery Time</label>
						<input type="text" class="mediumInput">
						<label class="rightLabel">Days</label>
						<div class="formHalf">
							<div class="twoInputInline">
								<label class="labelBlock">On Stock</label>
								<input type="checkbox" class="">
							</div>
							<div class="twoInputInline">
								<label class="labelBlock">OEM</label>
								<input type="checkbox" class="">
							</div>
						</div>
					</div>
				</div>
				<div class="formNote">
					<div class="noteHead numberForm">
						<span class="textFormHead">NOTE</span> 
					</div>
					<div>	
						<label class="labelBlock">Remarks</label>
						<textarea  name="remarks" class="textAreaWidth"></textarea>
						<label class="labelBlock">Tags</label>
						<textarea  name="tags" class="textAreaWidth"></textarea>
					</div>
				</div>
			</div>	
		</div>
		<div class="descriptionEdit">
			<label class="labelBlock">Description</label>
			<textarea  name="tags" class="textAreaBigDesc"></textarea>
			<div class="btnSubmitEdit">
				<div class="cancelEdit btn" onclick="backCatalogFunc()">CANCEL</div>
				<button class="saveEdit btn">SAVE & FINISH</button>
			</div>	
		</div>
</form>


$(document).ready(function() {
	// set min-height content dashboard suplier
  	var heightWin = $( window ).height();
    var heightHeadSuplier =$('.suplierHead').height();
    $('.mainContent,.sideNav,.suplierContentInfo').css('min-height', heightWin);
  	$('.suplierContentInfo').css('height',(heightWin+heightHeadSuplier)-95);

  	// set dropdown custom plugin
  	$('.chosen-select').chosen({disable_search_threshold: 10});
  	$('.suplier .chosen-container').css('width','100%');

  	// set active class for head table catalog
  	$('.tableCatalog thead th').on('click',function(){
  		if ($(".tableCatalog thead th").hasClass("active")) {
  			$('.tableCatalog thead th').removeClass('active');
		}
  		$(this).addClass('active');
  	});
  	$('.tableCatalog thead th').on('click',function(){
  		if ($(this).hasClass("ascending")) {
  			$(this).removeClass('ascending');
  			$(this).addClass('descending');
		}else{
			$(this).removeClass('descending');
			$(this).addClass('ascending');
		}		
  	});
    
  $(".stars-review").rating();
  
});




function replyReviewFunc(){
  $( ".displayDetailReview" ).html('');
  var urlReviewProduct = BASE_URL+"/supplier/detail-review";
  $.ajax({
    url: urlReviewProduct,
    dataType: "html",
    success : function (data) {
      $('.wrapperReviews').hide();
      $( ".displayDetailReview" ).append(data);
      $(".stars-review").rating();
    }
  });
}

function backDetailReviewFunc(){
  $( ".displayDetailReview,.stars-review" ).html('');
  $('.wrapperReviews').show();
  $(".stars-review").rating();
}




function detailInboxFunc(){
  $( ".displayDetailInbox" ).html('');
  var urlInbox = BASE_URL+"/supplier/detail-inbox";
  $.ajax({
    url: urlInbox,
    dataType: "html",
    success : function (data) {
      $('.inboxContent').hide();
      $( ".displayDetailInbox" ).append(data);
    }
  });
}

function backDetailInboxFunc(){
  $( ".displayDetailInbox" ).html('');
  $('.inboxContent').show();
}



function detailOrderFunc(){
  $( ".detailOrderDisplay" ).html('');
  var urlOrder = BASE_URL+"/supplier/detail-order";
  $.ajax({
    url: urlOrder,
    dataType: "html",
    success : function (data) {
      $('.listAllOrder').hide();
      $( ".detailOrderDisplay" ).append(data);
    }
  });
}

function backDetailOrderFunc(){
  $( ".detailOrderDisplay" ).html('');
  $('.listAllOrder').show();
}



function reviewCatalog(){
  $( ".wrapperCatalogPreview" ).html('');
  var urlPreview = BASE_URL+"/supplier/preview";
  $.ajax({
    url: urlPreview,
    dataType: "html",
    success : function (data) {
			$('.catalogDisplay').hide();
			$( ".wrapperCatalogPreview" ).append(data);
		}
	});
}

function editCatalog(){
  $( ".wrapperCatalogPreview" ).html('');
  var urlEdit = BASE_URL+"/supplier/edit";
  $.ajax({
    url: urlEdit,
    dataType: "html",
    success : function (data) {
      $('.catalogDisplay').hide();
      $( ".wrapperCatalogPreview" ).append(data);
    }
  });
}


function backCatalogFunc(){
  $( ".wrapperCatalogPreview" ).html('');
  $('.catalogDisplay').show();
}

function moreAreaImg(){
  n = $( ".imageInputArea" ).length;
  var showUpload =  $('.imageInputArea:visible').length;
  var moreImgArea = '<div class="imageInputArea imgClone_'+n+'"><div class="imgAreaTop"><div class="placeholderImg"><input type="file" id="imgUploadCatalog_'+n+'" name="imgUploadCatalog" class="dragImg" multiple></div><img src="" id="imgToUpload_'+n+'" class="hide"></div><div class="imgAreaBottom"><div class="btnUpload"><label for="imgUploadCatalog_'+n+'" class="zeroMargin labelUpload">UPLOAD</label></div><div class="btnCloseImgArea"><label class="zeroMargin labelUpload">CANCEL</label></div></div></div>';

  $( ".addMoreImgArea" ).append(moreImgArea);
  if (showUpload == 5) {
    $('.addMoreImg').hide();
  }else{
    $('.addMoreImg').show();
  }
}

function moreDiscount(){
  n = $( ".discountArea" ).length;
  var moreDiscountArea = '<div class="discountArea"><div class="formHalf discountClone_'+n+'"><div class="twoInputInline"><label class="labelBlock">Discount</label><input type="text" class="fiftyWidthInput" id="percentDiscount_'+n+'"><label class="rightLabel">%</label></div><div class="twoInputInline"><label class="labelBlock zeroOpacity">label</label><label class="leftLabel">from</label><input type="text" class="fiftyWidthInput" id="fromDiscount_'+n+'"><label class="rightLabel">pcs</label></div></div></div>';
   
  $( ".addMoreDiscountArea" ).append(moreDiscountArea);
}


$(document).on('click', '.btnCloseImgArea', function () {
  var showUpload =  $('.imageInputArea:visible').length;
  $(this).parents('.imageInputArea').fadeOut();
  if ((showUpload-1) <= 5) {
    $('.addMoreImg').show();
  }

});



// script grafik in finance supplier
 window.onload = function () {

  CanvasJS.addColorSet("greenMaspa",
            [//colorSet Array
            '#43bf43'                
            ]);

  var chart = new CanvasJS.Chart("graphicFinance",
  {
  colorSet: "greenMaspa",
  width:720,
  theme: "",
  title:{
    text: " "
  },
  animationEnabled: true,
  axisX: {
    valueFormatString: "DD",
    interval:1,
    intervalType: "week",
    lineThickness: 2,
    gridColor: "#000000" ,
    gridThickness: 1    
  },
  axisY:{
    prefix: "USD ", 
    includeZero: true,
    lineThickness: 2 ,
    gridColor: "#000000" ,
    gridThickness: 1    
  },
  data: [
  {        
    type: "line",
    lineThickness: 2,        
    dataPoints: [
    { x: new Date(2016, 01, 1), y: 1300 },
    { x: new Date(2016, 01, 4), y: 2000 },
    { x: new Date(2016, 01, 6), y: 1800 },
    { x: new Date(2016, 01, 8), y: 2500 },
    { x: new Date(2016, 01, 12), y: 1200 },
    { x: new Date(2016, 01, 18), y: 3300 },   
    { x: new Date(2016, 01, 21), y: 2600 },
    { x: new Date(2016, 01, 23), y: 1400 },
    { x: new Date(2016, 01, 27), y: 3200 },
    { x: new Date(2016, 01, 28), y: 3300 },
    ]
  }


  ]
  });

chart.render();


}








// Rating star function

$.fn.rating = function( method, options ) {
    method = method || 'create';
        // This is the easiest way to have default options.
        var settings = $.extend({
            // These are the defaults.
      limit: 5,
      value: 0,
      glyph: "glyphicon-star",
            coloroff: "#dddddd",
      coloron: "#43BF43",
      size: "24px",
      cursor: "default",
      onClick: function () {},
            endofarray: "idontmatter"
        }, options );
    var style = "";
    style = style + "font-size:" + settings.size + "; ";
    style = style + "color:" + settings.coloroff + "; ";
    style = style + "cursor:" + settings.cursor + "; ";
  

    
    if (method == 'create')
    {
      //this.html('');  //junk whatever was there
      
      //initialize the reviewsRating property
      this.each(function(){
        attr = $(this).attr('reviewsRating');
        if (attr === undefined || attr === false) { $(this).attr('reviewsRating',settings.value); }
      })
      
      //bolt in the glyphs
      for (var i = 0; i < settings.limit; i++)
      {
        this.append('<span data-value="' + (i+1) + '" class="ratingicon glyphicon ' + settings.glyph + '" style="' + style + '" aria-hidden="true"></span>');
      }
      
      //paint
      this.each(function() { paint($(this)); });

    }
    if (method == 'set')
    {
      this.attr('reviewsRating',options);
      this.each(function() { paint($(this)); });
    }
    if (method == 'get')
    {
      return this.attr('reviewsRating');
    }
    //register the click events
    this.find("span.ratingicon").click(function() {
      rating = $(this).attr('data-value')
      $(this).parent().attr('reviewsRating',rating);
      paint($(this).parent());
      settings.onClick.call( $(this).parent() );
    })
    function paint(div)
    {
      rating = parseInt(div.attr('reviewsRating'));
      div.find("input").val(rating);  //if there is an input in the div lets set it's value
      div.find("span.ratingicon").each(function(){  //now paint the stars
        
        var rating = parseInt($(this).parent().attr('reviewsRating'));
        var value = parseInt($(this).attr('data-value'));
        if (value > rating) { $(this).css('color',settings.coloroff); }
        else { $(this).css('color',settings.coloron); }
      })
    }

    };
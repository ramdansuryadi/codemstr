function showArrow(coba){
  if (coba) {
    $('.manufacturer').show();
    $(".chosen-container").css("width", "240px");
    $(".chosen-container").css("text-align", "left");
    $('.arrowdown').hide();
  } else{
    $('.manufacturer').hide();
    $('.arrowdown').show();
  }
}



// // login dropdown

// $(document).ready(function(){
//     $('#login-trigger').click(function() {
//         $(this).next('#login-content').slideToggle();
//         $(this).toggleClass('active');

//         if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
//             else $(this).find('span').html('&#x25BC;')
//         })

//         $(".chosen-select").chosen({no_results_text: "Oops, nothing found!"});
// });

// logout dropdown
$(document).ready(function(){
    $('#logout-trigger').click(function() {
        $(this).next('#logout-content').slideToggle();
        $(this).toggleClass('active');

        if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
            else $(this).find('span').html('&#x25BC;')
        })
        $(".chosen-select").chosen({no_results_text: "Oops, nothing found!"});
});

var onMapMouseleaveHandler = function (event) {
    var that = $(this);

    that.on('click', onMapClickHandler);
    that.off('mouseleave', onMapMouseleaveHandler);
    that.find('iframe').css("pointer-events", "none");
  }

  var onMapClickHandler = function (event) {
    var that = $(this);

    // Disable the click handler until the user leaves the map area
    that.off('click', onMapClickHandler);

    // Enable scrolling zoom
    that.find('iframe').css("pointer-events", "auto");

    // Handle the mouse leave event
    that.on('mouseleave', onMapMouseleaveHandler);
  }

  // Enable map zooming with mouse scroll when the user clicks the map
  $('.maps.embed-container').on('click', onMapClickHandler);

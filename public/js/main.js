// Hello.
//
// This is The Scripts used for ___________ Theme
//
//

// login dropdown

$(document).ready(function(){
        $(".chosen-select").chosen({no_results_text: "Oops, nothing found!"});

        $('#tf-home, #tf-search').height($(window).height());
});

$(window).on('resize', function(){
$('#tf-home, #tf-search').height($(window).height());
});

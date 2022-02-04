$ = jQuery.noConflict();


$(window).on("load", function () {

    "use strict";

    /* ===================================
            Loading Timeout
     ====================================== */

    setTimeout(function () {
        $(".loader").fadeOut("slow");
    }, 1000);

});

jQuery(function ($) {


    "use strict";

    /* ===================================
            Scroll
    ====================================== */


    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 200) { // Set position from top to add class
            $('header').addClass('header-appear');
        }
        else {
            $('header').removeClass('header-appear');
        }
    });

});

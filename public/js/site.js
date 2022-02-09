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

        // check section position
        var homePosition = $("#sectionHome").position();
        console.log("Scroll: " + $(this).scrollTop()+ " home: " + homePosition.top);
        var aboutPosition = $("#sectionAbout").position();
        console.log("Scroll: " + $(this).scrollTop()+ " about: " + aboutPosition.top);
        var productPosition = $("#sectionProduct").position();
        console.log("Scroll: " + $(this).scrollTop()+ " product: " + productPosition.top);
        var tipsPosition = $("#sectionProcess").position();
        console.log("Scroll: " + $(this).scrollTop()+ " tips: " + tipsPosition.top);
        var contactPosition = $("#sectionContact").position();
        console.log("Scroll: " + $(this).scrollTop()+ " contact: " + contactPosition.top);

        // if ($(this).scrollTop() < aboutPosition.top)
        // {
        //     $("#linkHome").addClass("active");
        //     $("#linkAbout").removeClass("active");
        //     $("#linkProduct").removeClass("active");
        //     $("#linkTips").removeClass("active");
        //     $("#linkContact").removeClass("active");
        // } else if ($(this).scrollTop() <= (aboutPosition.top - 200))
        // {
        //     $("#linkHome").removeClass("active");
        //     $("#linkAbout").addClass("active");
        //     $("#linkProduct").removeClass("active");
        //     $("#linkTips").removeClass("active");
        //     $("#linkContact").removeClass("active");
        // } else if ($(this).scrollTop() < tipsPosition.top)
        // {
        //     $("#linkHome").removeClass("active");
        //     $("#linkAbout").removeClass("active");
        //     $("#linkProduct").addClass("active");
        //     $("#linkTips").removeClass("active");
        //     $("#linkContact").removeClass("active");
        // } else if ($(this).scrollTop() < contactPosition.top)
        // {
        //     $("#linkHome").removeClass("active");
        //     $("#linkAbout").removeClass("active");
        //     $("#linkProduct").removeClass("active");
        //     $("#linkTips").addClass("active");
        //     $("#linkContact").removeClass("active");
        // }
        // else if ($(this).scrollTop() > contactPosition.top)
        // {
        //     $("#linkHome").removeClass("active");
        //     $("#linkAbout").removeClass("active");
        //     $("#linkProduct").removeClass("active");
        //     $("#linkTips").removeClass("active");
        //     $("#linkContact").addClass("active");
        // }

    });

});

jQuery(document).ready(function ($) {
    jQuery(".navbar-toggler").click(function () {
        jQuery("#navbarNav").toggleClass("show-nav");
    });

     $(window).on('scroll', function() {
        const scroll = $(window).scrollTop();
        const header = $('header');

        if (scroll > 300) {
            header.addClass('sticky-shadow');
        } else {
            header.removeClass('sticky-shadow');
        }
    });

});
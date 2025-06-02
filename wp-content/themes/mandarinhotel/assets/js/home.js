jQuery(document).ready(function ($) {
    const swiper = new Swiper('.swiper-slider', {
        direction: 'horizontal',
        loop: true,

        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },

        autoplay: {
            delay: 5000, 
            disableOnInteraction: false, 
        },
    });
})
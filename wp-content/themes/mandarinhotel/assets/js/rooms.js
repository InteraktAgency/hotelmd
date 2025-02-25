jQuery(document).ready(function($) {
    const swiper = new Swiper('.swiper-slider-rooms', {
        direction: 'horizontal',
        loop: true,

        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },

        pagination: {
            el: '.swiper-pagination',
        },

        scrollbar: {
            el: '.swiper-scrollbar',
        },
    });
})
$(document).ready(function () {
    $('.section-slider--photo .slider-pics').slick({
        autoplay: false,
        arrows: false,
        slidesToShow: 3,
        vertical: true,
        verticalSwiping: true,
        slidesToScroll: 1,
        focusOnSelect: true,
        asNavFor: '.section-slider--photo .slider-photo',
        dots: false,
        prevArrow: '<button type="button" class="product-detail__prev slick-prev"></button>',
        nextArrow: '<button type="button" class="product-detail__next slick-next"></button>',
        responsive:[
            {
                breakpoint: 992,
                settings: {
                    vertical: false
                }
            }
        ]
    });
    $('.section-slider--photo .slider-photo').slick({
        dots: ($('.section-slider--photo .slider-photo').attr('data-dots') == 'true') ? true : false,
        arrows: ($('.section-slider--photo .slider-photo').attr('data-arrows') == 'true') ? true : false,
        autoplay: ($('.section-slider--photo .slider-photo').attr('data-autoplay') == 'true') ? true : false,
        autoplaySpeed:$('.section-slider--photo .slider-photo').attr('data-speed'),
        appendDots: $('.section-slider--photo .slider-home-dots'),
        prevArrow: '<button type="button" class="slide-prev slick-prev"></button>',
        nextArrow: '<button type="button" class="slide-next slick-next"></button>',
        adaptiveHeight: true,
        asNavFor: '.section-slider--photo .slider-pics',
        responsive:[
            {
                breakpoint: 750,
                settings: {
                    dots: false
                }
            }
        ]
    });
});
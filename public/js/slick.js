$(document).ready(function() {
    $('.promotion-goods-slick').slick({
        infinite: false,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 800,
        arrows: true,
        prevArrow: '<div class="slick-arrow-wrapper arrow-left center"><ion-icon name="arrow-back-outline"></ion-icon></div>',
        nextArrow: '<div class="slick-arrow-wrapper arrow-right center"><ion-icon name="arrow-forward-outline"></ion-icon></div>',
        dots: true,
        responsive: [{
            breakpoint: '600',
            variableWidth: true
        }]
    });

    $('.similar-products-slick').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1200,
        arrows: true,
        prevArrow: '<div class="slick-arrow-purple similar-products-slick__arrow-left center"><ion-icon name="arrow-back-outline"></ion-icon></div>',
        nextArrow: '<div class="slick-arrow-purple similar-products-slick__arrow-right center"><ion-icon name="arrow-forward-outline"></ion-icon></div>',
        dots: true,
        responsive: [{
            breakpoint: '992',
            settings: {
                slidesToShow: 3
            }
        }, {
            breakpoint: '768',
            settings: {
                slidesToShow: 2
            }
        }, {
            breakpoint: '460',
            settings: {
                slidesToShow: 1
            }
        }]
    });

    $('.choose-products-slick').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 1200,
        arrows: true,
        prevArrow: '<div class="slick-arrow-purple similar-products-slick__arrow-left center"><ion-icon name="arrow-back-outline"></ion-icon></div>',
        nextArrow: '<div class="slick-arrow-purple similar-products-slick__arrow-right center"><ion-icon name="arrow-forward-outline"></ion-icon></div>',
        dots: true 
    });

    

});
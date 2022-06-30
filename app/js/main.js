$(function () {

    $('.top-slider__inner, .blog-page__slider').slick({
        prevArrow: '<button class="slick-btn slick-prev"><img src="images/icon/arrow-left.svg" alt="prev"></button>',
        nextArrow: '<button class="slick-btn slick-next"><img src="images/icon/arrow-right.svg" alt="prev"></button>',
        fade: true,
        autoplay: true,
        autoplaySpeed: 4000,
        infinite: false,
        dots: true,
    });

});

$(function () {
    var containerEl1 = document.querySelector('[data-ref="container-1"]');
    var containerEl2 = document.querySelector('[data-ref="container-2"]');

    var config = {
        controls: {
            scope: 'local',
        }
    };

    var mixer1 = mixitup(containerEl1, config);
    var mixer2 = mixitup(containerEl2, config);
});

$('.filter-price__input').ionRangeSlider({
    type: "double",
    prefix: "₽",
    onStart: function (data) {
        $('.filter-price__from').text(data.from);
        $('.filter-price__to').text(data.to);
    },
    onChange: function (data) {
        $('.filter-price__from').text(data.from);
        $('.filter-price__to').text(data.to);
    }
});

$('.select-style, .product-box__input').styler();

$('.shop-content__filter-btn').on('click', function () {
    $('.shop-content__filter-btn').removeClass('shop-content__filter-btn--active');
    $(this).addClass('shop-content__filter-btn--active');
});

$('.button-list').on('click', function () {
    $('.product-item').addClass('product-item--list');
    $('.shop-content__inner').addClass('shop-content__nogrid');
});

$('.button-grid').on('click', function () {
    $('.product-item').removeClass('product-item--list');
    $('.shop-content__inner').removeClass('shop-content__nogrid');
});

$('.product-slide__thumb').slick({
    asNavFor: '.product-slide__big',
    focusOnSelect: true,
    slidesToShow: 4,
    slidesToScroll: 1,
    vertical: true,
    draggable: false,
});

$('.product-slide__big').slick({
    asNavFor: '.product-slide__thumb',
    draggable: false,
    arrows: false,
    fade: true,
    responsive: [{
        breakpoint: 1200,
        settings: {
            draggable: true,
            focusOnSelect: true,
        }
    }]
});

$('.product-tabs__top-item').on('click', function (e) {

    e.preventDefault();
    $('.product-tabs__top-item').removeClass('product-tabs__top-item--active');
    $(this).addClass('product-tabs__top-item--active');

    $('.product-tabs__content-item').removeClass('product-tabs__content-item--active');
    $($(this).attr('href')).addClass('product-tabs__content-item--active');
});

let map;

function initMap() {
    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: 54.192,
            lng: 37.616
        },
        zoom: 14,
    });
};

$('.user-nav__btn, .header__search-btn').on('click', function () {
    $('.header__search').toggleClass('header__search--active');
});

$('.header__btn').on('click', function () {
    $('.menu').addClass('menu--active');
    $('html, body').addClass('lock');
});

$('.menu__logo-btn, .menu a').on('click', function () {
    $('.menu').removeClass('menu--active');
    $('html,body').removeClass('lock');
});

$('.shop-filter__btn').on('click', function () {
    $('.shop__filters').slideToggle();
});
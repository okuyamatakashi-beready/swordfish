/*
	トップページABOUTのスライダー
*/

$(document).ready(function(){
    $('.about__slider').slick({
        slidesToShow: 2.4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 5000,
        cssEase: 'linear',
        infinite: true,
        pauseOnHover: false,
        pauseOnFocus: false,
        arrows: false,
        dots: false
    });
});

/*
	SWORD FISH SHOPの無限文字
*/
$(document).ready(function() {
    // 背景文字の無限ループ
    $('.scroll__textWrapper').infiniteslide({
        'speed': 100,
        'direction': 'left',
        'pauseonhover': false,
        'responsive': true,
        'clone': 100
    });
});

/*
	matchHeight
*/
$(function() {
	$('.feature__text').matchHeight({
        target: $('.feature__images')
    });
});
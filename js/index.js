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
	メニュースライダー
*/

$(document).ready(function(){
    $('.menu__slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 3000,
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

$(function() {
	$('.amenities .container ul li').matchHeight();
});

/*
	スムーススクロール
*/

let lenis = new Lenis();

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}

requestAnimationFrame(raf);


/*
	hidden__menu
*/
document.addEventListener('DOMContentLoaded', function() {
    var courseMenu = document.querySelector('li.course');
    var hiddenMenu = document.querySelector('.hidden__menu');

    courseMenu.addEventListener('mouseenter', function() {
        hiddenMenu.classList.add('show');
    });

    courseMenu.addEventListener('mouseleave', function() {
        // マウスがhiddenMenu上にある場合、showクラスを削除しない
        setTimeout(function() {
            if (!hiddenMenu.matches(':hover')) {
                hiddenMenu.classList.remove('show');
            }
        }, 100);
    });

    hiddenMenu.addEventListener('mouseenter', function() {
        hiddenMenu.classList.add('show');
    });

    hiddenMenu.addEventListener('mouseleave', function() {
        hiddenMenu.classList.remove('show');
    });
});


$(function(){
    $("dl.qa_line dt").on("click", function() {
        $(this).next().slideToggle();
        });
});
    
$(function(){
    $("dl.qa_line dt").on("click", function() {
        $(this).toggleClass("open");
        });
});


// toggle開閉
$('#toggle').on('click',function(){
    $('body').toggleClass('open');
  });
  // toggle開閉
    $('.header_wrap nav ul li a').on('click',function(){
    $('body').removeClass('open');
  });


$(document).ready(function(){
    $("p.sp").click(function(){
        $(this).next("ul.sp-hidden").slideToggle();
    });
});


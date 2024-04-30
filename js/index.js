/*
	トップページABOUTのスライダー
*/

$(document).ready(function(){
    $('.about__slider').slick({
        slidesToShow: 2.4, // 一度に表示するスライド数
        slidesToScroll: 1, // 一度にスクロールするスライド数
        autoplay: true, // 自動再生を有効にする
        autoplaySpeed: 0, // 自動再生のスピード（0に設定して無限スクロールのように見せる）
        speed: 5000, // アニメーションの速度（ms）
        cssEase: 'linear', // アニメーションの種類（リニアに設定して等速でスクロール）
        infinite: true, // 無限スクロール
        pauseOnHover: false, // ホバー時に停止しない
        pauseOnFocus: false, // フォーカス時に停止しない
        arrows: false, // 矢印を非表示
        dots: false // ドットナビゲーションを非表示
    });
});
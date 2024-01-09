$(function () {
  // ハンバーガーメニュー
  $(".js-hamburger,.js-drawer, .js-drawer a").click(function () {
    $(".js-hamburger").toggleClass("is-active");
    $(".js-drawer").fadeToggle();
    $(".circle-bg").toggleClass("circleactive"); //丸背景にcircleactiveクラスを付与
  });
});
// スワイパー
const slider1 = new Swiper(".slider1", {
  loop: true, // ループ
  speed: 800, // 少しゆっくり(デフォルトは300)
  direction: "vertical", // 縦方向
  autoplay: {
    // 自動再生
    delay: 6000, // 1秒後に次のスライド
  },
});

// ふわっとテキスト
$(function () {
  $(window).scroll(function () {
    $(".section-title").each(function () {
      var elemPos = $(this).offset().top;
      var scroll = $(window).scrollTop();
      var windowHeight = $(window).height();
      if (scroll > elemPos - windowHeight) {
        $(this).addClass("active");
      } else {
        $(this).removeClass("active");
      }
    });
  });
});
// 上からフワッとテキスト
$(".works__body").css("visibility", "hidden");
$(window).scroll(function () {
  var windowHeight = $(window).height(),
    topWindow = $(window).scrollTop();
  $(".works__body").each(function () {
    var targetPosition = $(this).offset().top;
    if (topWindow > targetPosition - windowHeight + 300) {
      $(this).addClass("fadeInDown");
    }
  });
});
//scroll_effect
$(window).scroll(function () {
  var scrollAnimationElm = document.querySelectorAll(".news__list");
  var scrollAnimationFunc = function () {
    for (var i = 0; i < scrollAnimationElm.length; i++) {
      var triggerMargin = 100;
      if (window.innerHeight > scrollAnimationElm[i].getBoundingClientRect().top + triggerMargin) {
        scrollAnimationElm[i].classList.add("on");
      }
    }
  };
  window.addEventListener("load", scrollAnimationFunc);
  window.addEventListener("scroll", scrollAnimationFunc);
});

// 無限スライダー

const slider2 = new Swiper(".slider2", {
  loop: true,
  slidesPerView: 3,
  speed: 6000,
  spaceBetween: 10,
  allowTouchMove: false,
  autoplay: {
    delay: 0,
  },
});

$(document).ready(function () {
  $(".news__list-text").click(function () {
    // クリックされた要素にクラス 'active' を追加
    $(this).addClass("active");
    // 他の要素から 'active' クラスを削除
    $(".news__list-text").not(this).removeClass("active");
  });
});

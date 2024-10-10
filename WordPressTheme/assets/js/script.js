"use strict";

jQuery(function ($) {
    // この中であればWordpressでも「$」が使用可能になる

// ========================================
// header
// ========================================
    //ドロワーメニュー
    $(".js-hamburger").click(function () {
        if ($(".js-hamburger").hasClass("is-active")) {
        $(".js-hamburger").removeClass("is-active");
        $(".header").removeClass("is-active");
        $(".js-global-nav").fadeOut();
        } else {
        $(".js-hamburger").addClass("is-active");
        $(".header").addClass("is-active");
        $(".js-global-nav").fadeIn();
        }
        // ドロワーメニューが開いている時に背景をスクロールさせない
        if ($("body").css("overflow") === "hidden") {
        $("body").css({
            height: "",
            overflow: ""
        }); // もしoverflowがhiddenなら、bodyのスタイルを元に戻す
        } else {
        // そうでなければ
        $("body").css({
            height: "100%",
            overflow: "hidden"
        }); // bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
        }
        // ドロワーメニュー内のaタグをクリックした時、ドロワーメニューを閉じる
        $('.js-global-nav a[href^="#"]').on("click", function () {
        $(".js-hamburger").removeClass("is-active");
        $(".header").removeClass("is-active");
        $(".js-global-nav").fadeOut();
        });

        // ページ読み込み時にPC幅を検出し、幅が768pxを超えたときはメニューを閉じる
        $(window).resize(function () {
        if ($(window).width() > 768) {
            $(".js-hamburger").removeClass("is-active");
            $(".header").removeClass("is-active");
            $(".js-global-nav").fadeOut();
        }
        });

        // ページ読み込み時にもPC幅を超えたらメニューを閉じる
        if ($(window).width() > 768) {
        $(".js-hamburger").removeClass("is-active");
        $(".header").removeClass("is-active");
        $(".js-global-nav").fadeOut();
        }
    });

// ========================================
// mv
// ========================================
    // mv-swiper
    $(function () {
        var swiper = new Swiper(".js-mv-swiper", {
        loop: true,
        // 無限ループさせる
        speed: 4000,
        effect: "fade",
        autoplay: {
            delay: 1000,
            // 次のスライドに切り替わるまでのミリ秒
            disableOnInteraction: false // ユーザーが操作したときに自動再生を止める。falseがオススメ
        }
        });
    });

// ========================================
// campaign
// ========================================
    // campaign-swiper
    $(function () {
        var swiper = new Swiper(".js-campaign-swiper", {
        loop: true,
        // クルクル回ってる
        slidesPerView: 1.21,
        // 1画面にいくつ表示させるか
        breakpoints: {
            400: {
            slidesPerView: 1.4,
            spaceBetween: 30 // slider間の余白
            },

            500: {
            slidesPerView: 1.7,
            spaceBetween: 30 // slider間の余白
            },

            600: {
            slidesPerView: 2.0,
            spaceBetween: 30 // slider間の余白
            },

            768: {
            slidesPerView: 2.89,
            spaceBetween: 40 // slider間の余白
            },

            1280: {
            slidesPerView: 3.48,
            spaceBetween: 40
            }
        },
        spaceBetween: 24,
        speed: 2000,
        autoplay: {
            delay: 1000,
            disableOnInteraction: false
        },
        // Navigation arrows
        navigation: {
            prevEl: ".campaign-swiper__prev",
            nextEl: ".campaign-swiper__next"
        }
        });
    });

// ========================================
// 共通
// ========================================
    //画像のアニメーション
    var box = $(".js-colorbox"),
        speed = 700;
    box.each(function () {
        $(this).append('<div class="is-color"></div>');
        var color = $(this).find($(".is-color")),
        image = $(this).find("img", "source");
        var counter = 0;
        image.css("opacity", "0");
        color.css("width", "0%");
        color.on("inview", function () {
        if (counter == 0) {
            $(this).delay(200).animate({
            width: "100%"
            }, speed, function () {
            image.css("opacity", "1");
            $(this).css({
                left: "0",
                right: "auto"
            });
            $(this).animate({
                width: "0%"
            }, speed);
            });
            counter = 1;
        }
        });
    });

    // ページトップボタン
    $(function () {
        var pageTop = $(".js-pagetop");
        pageTop.hide();
        $(window).scroll(function () {
        if ($(this).scrollTop() > 100) {
            pageTop.fadeIn();
        } else {
            pageTop.fadeOut();
        }
        });
        pageTop.click(function () {
        $("body,html").animate({
            scrollTop: 0
        }, 500);
        return false;
        });
        // フッター手前でストップ
        $(".js-pagetop").hide();
        $(window).on("scroll", function () {
        var scrollHeight = $(document).height();
        var scrollPosition = $(window).height() + $(window).scrollTop();
        var footHeight = $("footer").innerHeight();
        if (scrollHeight - scrollPosition <= footHeight) {
            // ページトップボタンがフッター手前に来たらpositionとfixedからabsoluteに変更
            $(".js-pagetop").css({
            position: "absolute",
            bottom: footHeight + 18
            });
        } else {
            $(".js-pagetop").css({
            position: "fixed",
            bottom: "35px"
            });
        }
        });
    });

    // アーカイブ
    $(function () {
        // タイトルをクリックすると
        $(".js-blog-archive-accordion__title").on("click", function () {
        // クリックしたタイトル以外のopenクラスを外す(－から＋にする)
        $(".js-blog-archive-accordion__title").not(this).removeClass("is-open");
        // クリックしたタイトル以外のコンテンツを閉じる
        $(".js-blog-archive-accordion__title").not(this).next().slideUp(300);
        // クリックしたタイトルにopenクラスを付け外しして＋と－を切り替える
        $(this).toggleClass("is-open");
        // クリックしたタイトルの次の要素(コンテンツ)を開閉
        $(this).next().slideToggle(300);
        });
    });

// ========================================
// FAQ
// ========================================
    // FAQのドロワー
    $(".js-nav-open").click(function () {
        $(this).toggleClass("is-active");
        $(this).next("nav").slideToggle();
    });

// ========================================
// about
// ========================================
    // aboutのモーダル
    $(function () {
        $(".js-about-modal-trigger img").click(function () {
        $(".js-about-modal").html($(this).prop("outerHTML"));
        $(".js-about-modal").fadeIn(200);
        $("html, body").css("overflow", "hidden");
        });
        $(".js-about-modal, .js-about-modal img").click(function () {
        $(".js-about-modal").fadeOut(200);
        $("html, body").removeAttr("style");
        });
    });
    $(function () {
        $(".js-contact-form").validate({
        rules: {
            text: {
            required: true
            }
        },
        errorPlacement: function errorPlacement(error, element) {
            element.addClass("is-error");
            document.querySelector(".page-contact__error-message").style.display = "block";
        },
        success: function success(error, element) {
            document.querySelector(".page-contact__error-message").style.display = "none";
            $(element).removeClass("is-error");
        }
        });
    });

// ========================================
// information
// ========================================
    // タブ切り替え
    $(".information-tab__item").on("click", function () {
        $('.is-open').removeClass('is-open');
        $(this).addClass("is-open");
        $($(this).children("a").attr("href")).addClass("is-open");
        return false;
    });
        // パラメータ取得
        function getParam(name, url) {
        if (!url) url = window.location.href;
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(url);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
        }

        // ページ読み込み時のタブ切り替え
        var pram = getParam('tab');
        if (pram && $('[data-tab="' + pram + '"]').length) {
        $('.js-tab-content,.js-tab-menu').removeClass('is-open');
        $('[data-tab="' + pram + '"]').addClass('is-open');
        }

        // ロード後のタブ切り替え
        $('.js-tab-menu').on('click', function () {
        var dataPram = $(this).data('tab');
        $('.js-tab-content,.js-tab-menu').removeClass('is-open');
        $('[data-tab="' + dataPram + '"]').addClass('is-open');
        });


// ========================================
// aタグ、リンク確認
// ========================================
    // HTMLドキュメント内のすべての<a>タグを取得
var links = document.getElementsByTagName('a');

// それぞれのhref属性の状態に応じてカウントするための変数を定義
var countNoHref = 0;       // href属性が存在しないタグの数
var countEmptyHref = 0;    // hrefが空のタグの数
var countInvalidHref = 0;  // hrefが無効（#だけ、または#から始まる）のタグの数
var countDotHref = 0;      // hrefがドットで始まるタグの数

// すべての<a>タグに対してループ処理
for (var i = 0; i < links.length; i++) {
    // 各<a>タグのhref属性の値を取得
    var hrefValue = links[i].getAttribute('href');

    // href属性が存在しない場合、黄色でボーダーをつける
    if (hrefValue === null) {
        links[i].style.border = '2px solid yellow';
        countNoHref++; // 該当の<a>タグの数をカウント
    }
    // hrefが空の場合、青色でボーダーをつける
    else if (hrefValue == '') {
        links[i].style.border = '2px solid blue';
        countEmptyHref++; // 該当の<a>タグの数をカウント
    }
    // hrefが#だけ、または#から始まる場合、赤色でボーダーをつける
    else if (hrefValue == '#' || hrefValue.startsWith('#')) {
        links[i].style.border = '2px solid red';
        countInvalidHref++; // 該当の<a>タグの数をカウント
    }
    // hrefがドットで始まる場合、緑色でボーダーをつける
    else if (hrefValue.startsWith('.')) {
        links[i].style.border = '2px solid green';
        countDotHref++; // 該当の<a>タグの数をカウント
    }
}

// 各状態の<a>タグの数をアラートで表示
alert("href属性が存在しないaタグの数: " + countNoHref + 
    "\nhrefが空のaタグの数: " + countEmptyHref + 
    "\nhrefが無効（#だけ、または#から始まる）なaタグの数: " + countInvalidHref +
    "\nhrefがドットで始まるaタグの数: " + countDotHref);

});
jQuery(function ($) {
  // この中であればWordpressでも「$」が使用可能になる

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
      $("body").css({ height: "", overflow: "" }); // もしoverflowがhiddenなら、bodyのスタイルを元に戻す
    } else {
      // そうでなければ
      $("body").css({ height: "100%", overflow: "hidden" }); // bodyにheight: 100%とoverflow: hiddenを設定し、スクロールを無効にする
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

  // mv-swiper
  $(function () {
    var swiper = new Swiper(".js-mv-swiper", {
      loop: true, // 無限ループさせる
      speed: 4000,
      effect: "fade",
      autoplay: {
        delay: 1000, // 次のスライドに切り替わるまでのミリ秒
        disableOnInteraction: false, // ユーザーが操作したときに自動再生を止める。falseがオススメ
      },
    });
  });

  // campaign-swiper
  $(function () {
    var swiper = new Swiper(".js-campaign-swiper", {
      loop: true, // クルクル回ってる
      slidesPerView: 1.21, // 1画面にいくつ表示させるか
      breakpoints: {
        400: {
          slidesPerView: 1.4,
          spaceBetween: 30, // slider間の余白
        },
        500: {
          slidesPerView: 1.7,
          spaceBetween: 30, // slider間の余白
        },
        600: {
          slidesPerView: 2.0,
          spaceBetween: 30, // slider間の余白
        },
        768: {
          slidesPerView: 2.89,
          spaceBetween: 40, // slider間の余白
        },
        1280: {
          slidesPerView: 3.48,
          spaceBetween: 40,
        },
      },
      spaceBetween: 24,
      speed: 2000,
      autoplay: {
        delay: 1000,
        disableOnInteraction: false,
      },
      // Navigation arrows
      navigation: {
        prevEl: ".campaign-swiper__prev",
        nextEl: ".campaign-swiper__next",
      },
    });
  });

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
        $(this)
          .delay(200)
          .animate({ width: "100%" }, speed, function () {
            image.css("opacity", "1");
            $(this).css({ left: "0", right: "auto" });
            $(this).animate({ width: "0%" }, speed);
          });
        counter = 1;
      }
    });
  });

  // ページトップボタン
  $(function () {
    const pageTop = $(".js-pagetop");
    pageTop.hide();
    $(window).scroll(function () {
      if ($(this).scrollTop() > 100) {
        pageTop.fadeIn();
      } else {
        pageTop.fadeOut();
      }
    });
    pageTop.click(function () {
      $("body,html").animate(
        {
          scrollTop: 0,
        },
        500
      );
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
          bottom: footHeight + 18,
        });
      } else {
        $(".js-pagetop").css({
          position: "fixed",
          bottom: "35px",
        });
      }
    });
  });

  // ブログアーカイブ
  $(function () {
    // タイトルをクリックすると
    $(".js-blog-archive-accordion__title").on("click", function () {
      // クリックしたタイトル以外のopenクラスを外す(－から＋にする)
      $(".js-blog-archive-accordion__title")
        .not(this)
        .removeClass("toggle-is-open");
      // クリックしたタイトル以外のコンテンツを閉じる
      $(".js-blog-archive-accordion__title").not(this).next().slideUp(300);
      // クリックしたタイトルにopenクラスを付け外しして＋と－を切り替える
      $(this).toggleClass("toggle-is-open");
      // クリックしたタイトルの次の要素(コンテンツ)を開閉
      $(this).next().slideToggle(300);
    });
  });

  // FAQのドロワー
  $(".js-nav-open").click(function () {
    $(this).toggleClass("is-active");
    $(this).next("nav").slideToggle();
  });

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
    // 変数を要素をセット
    var $filter = $(".js-tab [data-tab]"),
      $item = $(".js-container [data-item]");
    // カテゴリをクリックしたら
    $filter.click(function (e) {
      // デフォルトの動作をキャンセル
      e.preventDefault();
      var $this = $(this);
      // クリックしたカテゴリにクラスを付与
      $filter.removeClass("is-tab-open");
      $this.addClass("is-tab-open");
      // クリックした要素のdata属性を取得
      var $filterItem = $this.attr("data-tab");
      // データ属性が all なら全ての要素を表示
      if ($filterItem == "all") {
        $item
          .removeClass("is-tab-open")
          .fadeOut()
          .promise()
          .done(function () {
            $item.addClass("is-tab-open").fadeIn();
          });
        // all 以外の場合は、クリックした要素のdata属性の値を同じ値のアイテムを表示
      } else {
        $item
          .removeClass("is-tab-open")
          .fadeOut()
          .promise()
          .done(function () {
            $item
              .filter('[data-item = "' + $filterItem + '"]')
              .addClass("is-tab-open")
              .fadeIn();
          });
      }
    });
  });

  // $(function () {
  //   // 変数を要素をセット
  //   var $filter = $(".js-tab [data-tab]"),
  //     $item = $(".js-container [data-item]");
  //   // カテゴリをクリックしたら
  //   $filter.click(function (e) {
  //     // デフォルトの動作をキャンセル
  //     e.preventDefault();
  //     var $this = $(this);
  //     // クリックしたカテゴリにクラスを付与
  //     $filter.removeClass("is-tab-open");
  //     $this.addClass("is-tab-open");
  //     // クリックした要素のdata属性を取得
  //     var $filterItem = $this.attr("data-tab");
  //     // データ属性が all なら全ての要素を表示
  //     if ($filterItem == "all") {
  //       $item
  //         .removeClass("is-tab-open")
  //         .fadeOut()
  //         .promise()
  //         .done(function () {
  //           $item.addClass("is-tab-open").fadeIn();
  //         });
  //       // all 以外の場合は、クリックした要素のdata属性の値を同じ値のアイテムを表示
  //     } else {
  //       $item
  //         .removeClass("is-tab-open")
  //         .fadeOut()
  //         .promise()
  //         .done(function () {
  //           $item
  //             .filter('[data-item = "' + $filterItem + '"]')
  //             .addClass("is-tab-open")
  //             .fadeIn();
  //         });
  //     }
  //   });
  // });

  $(function () {
    $(".js-contact-form").validate({
      rules: {
        text: {
          required: true,
        },
      },
      errorPlacement: function (error, element) {
        element.addClass("is-error");
        document.querySelector(".page-contact__error-message").style.display =
          "block";
      },
      success: function (error, element) {
        document.querySelector(".page-contact__error-message").style.display =
          "none";
        $(element).removeClass("is-error");
      },
    });
  });

  $(".information-tab__item").on("click", function () {
    $(".information-item").removeClass("is-tab-open");
    $($(this).children("a").attr("href")).addClass("is-tab-open");
    return false;
  });
});

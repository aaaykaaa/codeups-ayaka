<?php get_header(); ?>
<main>
    <div class="page-mv sub-page-mv">
        <div class="page-mv__inner">
            <div class="page-mv__text-box">
            <h1 class="page-mv__title">price</h1>
            </div>
            <picture class="page-mv__img">
            <source
                media="(min-width: 768px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-price_mv.jpeg"
            />
            <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-price_mv-sp.jpeg"
                alt="pricepageのmain画像"
            />
            </picture>
        </div>
    </div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

    <section class="page-price sub-price sub">
        <div class="page-price__inner inner">
            <div class="page-price__content">
            <div class="page-price__table">
                <div class="page-price__table-item">
                <div class="page-price__head">
                    <h2 class="page-price__title"><span>ライセンス講習</span></h2>
                </div>
                <div class="page-price__body">
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">
                        オープンウォーター<br class="u-mobile" />ダイバーコース
                    </h3>
                    <p class="page-price__price">&yen;50,000</p>
                    </div>
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">
                        アドバンスド<br class="u-mobile" />オープンウォーターコース
                    </h3>
                    <p class="page-price__price">&yen;60,000</p>
                    </div>
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">レスキュー＋EFRコース</h3>
                    <p class="page-price__price">&yen;70,000</p>
                    </div>
                </div>
                </div>
                <div class="page-price__table-item">
                <div class="page-price__head">
                    <h2 class="page-price__title"><span>体験ダイビング</span></h2>
                </div>
                <div class="page-price__body">
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">
                        ビーチ体験ダイビング<br class="u-mobile" />(半日)
                    </h3>
                    <p class="page-price__price">&yen;7,000</p>
                    </div>
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">
                        ビーチ体験ダイビング<br class="u-mobile" />(1日)
                    </h3>
                    <p class="page-price__price">&yen;14,000</p>
                    </div>
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">
                        ボート体験ダイビング<br class="u-mobile" />(半日)
                    </h3>
                    <p class="page-price__price">&yen;10,000</p>
                    </div>
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">
                        ボート体験ダイビング<br class="u-mobile" />(1日)
                    </h3>
                    <p class="page-price__price">&yen;18,000</p>
                    </div>
                </div>
                </div>
                <div class="page-price__table-item">
                <div class="page-price__head">
                    <h2 class="page-price__title"><span>ファンダイビング</span></h2>
                </div>
                <div class="page-price__body">
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">
                        ビーチダイビング<br class="u-mobile" />(2ダイブ)
                    </h3>
                    <p class="page-price__price">&yen;14,000</p>
                    </div>
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">
                        ボートダイビング<br class="u-mobile" />(2ダイブ)
                    </h3>
                    <p class="page-price__price">&yen;18,000</p>
                    </div>
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">
                        スペシャルダイビング<br class="u-mobile" />(2ダイブ)
                    </h3>
                    <p class="page-price__price">&yen;24,000</p>
                    </div>
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">
                        ナイトダイビング<br class="u-mobile" />(1ダイブ)
                    </h3>
                    <p class="page-price__price">&yen;10,000</p>
                    </div>
                </div>
                </div>
                <div class="page-price__table-item">
                <div class="page-price__head">
                    <h2 class="page-price__title">
                    <span>スペシャルダイビング</span>
                    </h2>
                </div>
                <div class="page-price__body">
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">
                        貸切ダイビング<br class="u-mobile" />(2ダイブ)
                    </h3>
                    <p class="page-price__price">&yen;24,000</p>
                    </div>
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">
                        1日ダイビング<br class="u-mobile" />(3ダイブ)
                    </h3>
                    <p class="page-price__price">&yen;32,000</p>
                    </div>
                    <div class="page-price__body-item">
                    <h3 class="page-price__course">
                        ナイトダイビング<br class="u-mobile" />(2ダイブ)
                    </h3>
                    <p class="page-price__price">&yen;14,000</p>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
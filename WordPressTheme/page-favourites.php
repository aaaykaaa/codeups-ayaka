<?php get_header(); ?>
<main>
    <div class="page-mv sub-page-mv">
        <div class="page-mv__inner">
            <div class="page-mv__text-box">
                <h1 class="page-mv__title">favourites</h1>
            </div>
            <picture class="page-mv__img">
                <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv4.jpg"/>
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv-sp4.jpg" alt="私のお気に入りページのメイン画像"/>
            </picture>
        </div>
    </div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

    <section class="page-favourites sub-favourites sub">
        <div class="page-favourites__inner inner">
            <ul class="page-favourites__tab favourites-tab">
                <li class="favourites-tab__item tab1 js-tab-menu is-open" data-tab="beef">
                    <a href="#tab1" class="favourites-tab__button favourites-tab__button--tab1"><span>白ワイン<br class="u-mobile" />×焼肉</span></a>
                </li>
                <li class="favourites-tab__item tab2 js-tab-menu"  data-tab="cheese">
                    <a href="#tab2" class="favourites-tab__button favourites-tab__button--p18 favourites-tab__button--tab2"><span>白ワイン<br class="u-mobile" />×チーズ</span></a>
                </li>
                <li class="favourites-tab__item tab3 js-tab-menu" data-tab="seafood">
                    <a href="#tab3" class="favourites-tab__button favourites-tab__button--tab3"><span>白ワイン<br class="u-mobile" />×海鮮</span></a>
                </li>
            </ul>
            <div class="page-favourites__items">
                <div class="page-favourites__item favourites-item favourites-item--flex-rev js-tab-content is-open" id="tab1" data-tab="beef">
                    <figure class="favourites-item__img favourites-item__img--page js-colorbox">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/favourites1.jpg" alt="白ワイン×焼肉の画像"/>
                    </figure>
                    <div class="favourites-item__body favourites-item__body--page">
                        <p class="favourites-item__text">
                        焼肉と言えば赤ワインのイメージですが、実は白ワインも絶品のペアリングです。<br>特に柑橘系の酸味が効いた白ワインは、脂っこさをさっぱりとリセットし、肉本来の旨味を引き立てます。<br>脂身の多いカルビや、甘辛いタレとの相性も抜群。意外性のあるこの組み合わせで、焼肉がさらに奥深い味わいに変わります。
                        </p>
                    </div>
                </div>
                <div class="page-favourites__item favourites-item favourites-item--flex-rev js-tab-content" id="tab2" data-tab="cheese">
                    <figure class="favourites-item__img favourites-item__img--page js-colorbox">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/wine.jpg" alt="白ワイン×チーズの画像"/>
                    </figure>
                    <div class="favourites-item__body favourites-item__body--page">
                        <p class="favourites-item__text">
                        赤ワインが定番と思われがちなチーズですが、実は白ワインとの組み合わせも絶品です。<br>特にクリーミーなブリーチーズや、ハチミツをかけたカマンベールには、フルーティーな白ワインが相性抜群。<br>爽やかな酸味が、濃厚なチーズを軽やかに引き立てます。<br>一口ごとに広がる新しい味わいをぜひお試しください。
                        </p>
                    </div>
                </div>
                <div class="page-favourites__item favourites-item favourites-item--flex-rev js-tab-content" id="tab3" data-tab="seafood">
                    <figure class="favourites-item__img favourites-item__img--page js-colorbox">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/favourites3.jpg" alt="白ワイン×海鮮の画像"/>
                    </figure>
                    <div class="favourites-item__body favourites-item__body--page">
                        <p class="favourites-item__text">
                        海鮮と白ワインのペアリングは、まるで地中海の風を感じるような爽やかさ！<br>白身魚やエビ、ホタテなど、繊細な味わいの海鮮料理と、フルーティーな白ワインの酸味が見事に調和します。<br>特にスパークリングワインなら、炭酸が旨味を引き立ててくれるのでおすすめです。
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
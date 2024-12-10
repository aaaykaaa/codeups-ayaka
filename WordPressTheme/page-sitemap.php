<?php get_header(); ?>
<main>
    <div class="page-mv sub-page-mv">
        <div class="page-mv__inner">
            <div class="page-mv__text-box">
            <h1 class="page-mv__title">site <span>map</span></h1>
            </div>
            <picture class="page-mv__img">
            <source
                media="(min-width: 768px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv1.jpg"
            />
            <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv-sp1.jpg"
                alt="サイトマップページのメイン画像"
            />
            </picture>
        </div>
    </div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

    <div class="site-map sub-site-map">
        <div class="site-map__inner inner">
            <div class="site-map__nav">
                <nav class="global-nav">
                    <div class="global-nav__inner">
                        <div class="global-nav__items global-nav__items--sitemap">
                            <div class="global-nav__item-sp global-nav__item-sp--sitemap">
                                <ul class="global-nav__item-pc">
                                    <li class="global-nav__parent global-nav__parent--black">
                                        <a href="<?php echo esc_url(home_url('/campaign/')); ?>">キャンペーン</a>
                                        <ul>
                                            <li class="global-nav__child global-nav__child--black">
                                                <a href="<?php echo esc_url(home_url('/campaign/')); ?>">スペシャルギフト</a>
                                            </li>
                                            <li class="global-nav__child global-nav__child--black">
                                                <a href="<?php echo esc_url(home_url('/campaign/')); ?>">定番ギフト</a>
                                            </li>
                                            <li class="global-nav__child global-nav__child--black">
                                                <a href="<?php echo esc_url(home_url('/campaign/')); ?>">家のみバルギフト</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="global-nav__parent global-nav__parent--black">
                                        <a href="<?php echo esc_url(home_url('/concept/')); ?>">コンセプト</a>
                                    </li>
                                </ul>
                                <ul class="global-nav__item-pc">
                                    <li class="global-nav__parent global-nav__parent--black">
                                        <a href="<?php echo esc_url(home_url('/favourites/')); ?>">私のお気に入り</a>
                                        <ul>
                                            <li class="global-nav__child global-nav__child--black">
                                                <a href="<?php echo esc_url(home_url('/favourites/')); ?>">白ワイン×焼肉</a>
                                            </li>
                                            <li class="global-nav__child global-nav__child--black">
                                                <a href="<?php echo esc_url(home_url('/favourites/')); ?>">白ワイン×チーズ</a>
                                            </li>
                                            <li class="global-nav__child global-nav__child--black">
                                                <a href="<?php echo esc_url(home_url('/favourites/')); ?>">白ワイン×海鮮</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="global-nav__parent global-nav__parent--black">
                                        <a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
                                    </li>
                                </ul>
                                </div>
                                <div class="global-nav__item-sp global-nav__item-sp--sitemap">
                                <ul class="global-nav__item-pc">
                                    <li class="global-nav__parent global-nav__parent--black">
                                        <a href="<?php echo esc_url(home_url('/voice/')); ?>">お客様の声</a>
                                    </li>
                                    <li class="global-nav__parent global-nav__parent--black">
                                        <a href="<?php echo esc_url(home_url('/price/')); ?>">料金一覧</a>
                                        <ul>
                                            <li class="global-nav__child global-nav__child--black">
                                                <a href="<?php echo esc_url(home_url('/price/')); ?>">季節限定ギフト</a>
                                            </li>
                                            <li class="global-nav__child global-nav__child--black">
                                                <a href="<?php echo esc_url(home_url('/price/')); ?>">定番ギフト</a>
                                            </li>
                                            <li class="global-nav__child global-nav__child--black">
                                                <a href="<?php echo esc_url(home_url('/price/')); ?>">家のみバルギフト</a>
                                            </li>
                                            <li class="global-nav__child global-nav__child--black">
                                                <a href="<?php echo esc_url(home_url('/price/')); ?>">スペシャルギフト</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <ul class="global-nav__item-pc">
                                    <li class="global-nav__parent global-nav__parent--black">
                                        <a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
                                    </li>
                                    <li class="global-nav__parent global-nav__parent--black">
                                        <a href="<?php echo esc_url(home_url('/privacypolicy/')); ?>">プライバシー<br class="u-mobile"/>ポリシー</a>
                                    </li>
                                    <li class="global-nav__parent global-nav__parent--black">
                                        <a href="<?php echo esc_url(home_url('/terms/')); ?>">利用規約</a>
                                    </li>
                                    <li class="global-nav__parent global-nav__parent--black">
                                        <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
                                    </li>
                                    <li class="global-nav__parent global-nav__parent--black">
                                        <a href="<?php echo esc_url(home_url('/sitemap/')); ?>">サイトマップ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
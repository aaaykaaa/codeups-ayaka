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
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-bg_mv.jpeg"
            />
            <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-bg_mv-sp.jpeg"
                alt="sitemappageのmain画像"
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
                        <a href="./page-campaign.html">キャンペーン</a>
                        <ul>
                            <li class="global-nav__child global-nav__child--black">
                            <a href="#">ライセンス取得</a>
                            </li>
                            <li class="global-nav__child global-nav__child--black">
                            <a href="#">貸切体験ダイビング</a>
                            </li>
                            <li class="global-nav__child global-nav__child--black">
                            <a href="#">ナイトダイビング</a>
                            </li>
                        </ul>
                        </li>
                        <li class="global-nav__parent global-nav__parent--black">
                        <a href="./page-about.html">私たちについて</a>
                        </li>
                    </ul>
                    <ul class="global-nav__item-pc">
                        <li class="global-nav__parent global-nav__parent--black">
                        <a href="./page-information.html">ダイビング情報</a>
                        <ul>
                            <li class="global-nav__child global-nav__child--black">
                            <a href="#">ライセンス講習</a>
                            </li>
                            <li class="global-nav__child global-nav__child--black">
                            <a href="#">体験ダイビング</a>
                            </li>
                            <li class="global-nav__child global-nav__child--black">
                            <a href="#">ファンダイビング</a>
                            </li>
                        </ul>
                        </li>
                        <li class="global-nav__parent global-nav__parent--black">
                        <a href="./page-blog.html">ブログ</a>
                        </li>
                    </ul>
                    </div>
                    <div class="global-nav__item-sp global-nav__item-sp--sitemap">
                    <ul class="global-nav__item-pc">
                        <li class="global-nav__parent global-nav__parent--black">
                        <a href="./page-voice.html">お客様の声</a>
                        </li>
                        <li class="global-nav__parent global-nav__parent--black">
                        <a href="./page-price.html">料金一覧</a>
                        <ul>
                            <li class="global-nav__child global-nav__child--black">
                            <a href="#">ライセンス講習</a>
                            </li>
                            <li class="global-nav__child global-nav__child--black">
                            <a href="#">体験ダイビング</a>
                            </li>
                            <li class="global-nav__child global-nav__child--black">
                            <a href="#">ファンダイビング</a>
                            </li>
                        </ul>
                        </li>
                    </ul>
                    <ul class="global-nav__item-pc">
                        <li class="global-nav__parent global-nav__parent--black">
                        <a href="./page-faq.html">よくある質問</a>
                        </li>
                        <li class="global-nav__parent global-nav__parent--black">
                        <a href="#"
                            >プライバシー<br class="u-mobile" />ポリシー</a
                        >
                        </li>
                        <li class="global-nav__parent global-nav__parent--black">
                        <a href="./page-terms.html">利用規約</a>
                        </li>
                        <li class="global-nav__parent global-nav__parent--black">
                        <a href="./page-contact.html">お問い合わせ</a>
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
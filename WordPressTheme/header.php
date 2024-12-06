<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="noindex" />
    <?php wp_head(); ?>
</head>
    <body <?php body_class(); ?> >
        <?php wp_body_open(); ?>
        <header class="header">
            <div class="header__inner">
            <?php $tag = is_front_page() ? 'h1' : 'div'; ?>
            <<?php echo $tag; ?> class="header__logo">
                <a href="<?php echo esc_url(home_url()); ?>" class="header__logoLink">
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="codeupsのロゴ"/>
                </a>
            </<?php echo $tag; ?>>

            <!-- ローディングアニメーション※トップページのみ -->
            <?php if ( is_front_page() ): ?>
            <div class="loader js-loader">
                <div class="loader__title mv-title mv-title--green js-loader-title">
                    <p class="mv-title__mainTitle mv-title__mainTitle--green">DIVING</p>
                    <p class="mv-title__subTitle mv-title__subTitle--green">into the ocean</p>
                </div>
                <div class="loader__images">
                    <div class="loader__left-img js-loader-left">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-left.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-left.jpg" alt="ローディング画面用の泳いでいるウミガメ" width="187" height="667" decoding="async">
                        </picture>
                    </div>
                    <div class="loader__right-img js-loader-right">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-right.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-right.jpg" alt="ローディング画面用の泳いでいるウミガメ" width="187" height="667" decoding="async">
                        </picture>
                    </div>
                </div>
            </div>
            <?php endif; ?>

                <div class="header__drawer hamburger js-hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <nav class="header__pc-nav pc-nav">
                    <ul class="pc-nav__items">
                    <li class="pc-nav__item">
                        <a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="pc-nav__itemLink">Campaign<span>キャンペーン</span></a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="pc-nav__itemLink">About us<span>私たちについて</span></a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo esc_url(home_url('/information/')); ?>" class="pc-nav__itemLink">Information<span>ダイビング情報</span></a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="pc-nav__itemLink">Blog<span>ブログ</span></a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="pc-nav__itemLink">Voice<span>お客様の声</span></a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo esc_url(home_url('/price/')); ?>" class="pc-nav__itemLink">Price<span>料金一覧</span></a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo esc_url(home_url('/faq/')); ?>" class="pc-nav__itemLink">FAQ<span>よくある質問</span></a>
                    </li>
                    <li class="pc-nav__item">
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="pc-nav__itemLink">Contact<span>お問合せ</span></a>
                    </li>
                    </ul>
                </nav>
                <nav class="header__nav global-nav js-global-nav">
                    <div class="global-nav__inner">
                    <div class="global-nav__items global-nav__items--drawer">
                        <div class="global-nav__item-sp global-nav__item-sp--drawer">
                        <ul class="global-nav__item-pc">
                            <li class="global-nav__parent">
                            <a href="<?php echo esc_url(home_url('/campaign/')); ?>">キャンペーン</a>
                            <ul>
                                <li class="global-nav__child">
                                <a href="<?php echo esc_url(home_url('/campaign/')); ?>">ライセンス取得</a>
                                </li>
                                <li class="global-nav__child">
                                <a href="<?php echo esc_url(home_url('/campaign/')); ?>">貸切体験ダイビング</a>
                                </li>
                                <li class="global-nav__child">
                                <a href="<?php echo esc_url(home_url('/campaign/')); ?>">ナイトダイビング</a>
                                </li>
                            </ul>
                            </li>
                            <li class="global-nav__parent">
                            <a href="<?php echo esc_url(home_url('/about/')); ?>">私たちについて</a>
                            </li>
                        </ul>
                        <ul class="global-nav__item-pc">
                            <li class="global-nav__parent">
                            <a href="<?php echo esc_url(home_url('/information/')); ?>">ダイビング情報</a>
                            <ul>
                                <li class="global-nav__child">
                                <a href="<?php echo esc_url(home_url('/information/')); ?>?id=license">ライセンス講習</a>
                                </li>
                                <li class="global-nav__child">
                                <a href="<?php echo esc_url(home_url('/information/')); ?>?id=experienceDiving">体験ダイビング</a>
                                </li>
                                <li class="global-nav__child">
                                <a href="<?php echo esc_url(home_url('/information/')); ?>?id=fanDiving">ファンダイビング</a>
                                </li>
                            </ul>
                            </li>
                            <li class="global-nav__parent">
                            <a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
                            </li>
                        </ul>
                        </div>
                        <div class="global-nav__item-sp global-nav__item-sp--drawer">
                        <ul class="global-nav__item-pc">
                            <li class="global-nav__parent">
                            <a href="<?php echo esc_url(home_url('/voice/')); ?>">お客様の声</a>
                            </li>
                            <li class="global-nav__parent">
                            <a href="<?php echo esc_url(home_url('/price/')); ?>">料金一覧</a>
                            <ul>
                                <li class="global-nav__child">
                                <a href="<?php echo esc_url(home_url('/price/')); ?>">ライセンス講習</a>
                                </li>
                                <li class="global-nav__child">
                                <a href="<?php echo esc_url(home_url('/price/')); ?>">体験ダイビング</a>
                                </li>
                                <li class="global-nav__child">
                                <a href="<?php echo esc_url(home_url('/price/')); ?>">ファンダイビング</a>
                                </li>
                            </ul>
                            </li>
                        </ul>
                        <ul class="global-nav__item-pc">
                            <li class="global-nav__parent">
                            <a href="<?php echo esc_url(home_url('/faq/')); ?>">よくある質問</a>
                            </li>
                            <li class="global-nav__parent">
                            <a href="<?php echo esc_url(home_url('/privacypolicy/')); ?>">プライバシー<br class="u-mobile" />ポリシー</a>
                            </li>
                            <li class="global-nav__parent">
                            <a href="<?php echo esc_url(home_url('/terms/')); ?>">利用規約</a>
                            </li>
                            <li class="global-nav__parent">
                            <a href="<?php echo esc_url(home_url('/contact/')); ?>">お問い合わせ</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </nav>
            </div>
        </header>
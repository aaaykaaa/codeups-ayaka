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
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="ロゴの画像"/>
                </a>
            </<?php echo $tag; ?>>

            <!-- ローディングアニメーション※トップページのみ -->
            <?php if ( is_front_page() ): ?>
            <div class="loader js-loader">
                <div class="loader__title mv-title mv-title--green js-loader-title">
                    <p class="mv-title__mainTitle mv-title__mainTitle--green">afeemour</p>
                    <p class="mv-title__subTitle mv-title__subTitle--green">Sips & Flavors</p>
                </div>
                <div class="loader__images">
                    <div class="loader__left-img js-loader-left">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-left.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-left.jpg" alt="ローディング画像" width="187" height="667" decoding="async">
                        </picture>
                    </div>
                    <div class="loader__right-img js-loader-right">
                        <picture>
                            <source srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-right.jpg" media="(min-width: 768px)">
                            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/loading-right.jpg" alt="ローディング画像" width="187" height="667" decoding="async">
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
                            <a href="<?php echo esc_url(home_url('/concept/')); ?>" class="pc-nav__itemLink">concept<span>コンセプト</span></a>
                        </li>
                        <li class="pc-nav__item">
                            <a href="<?php echo esc_url(home_url('/favourites/')); ?>" class="pc-nav__itemLink">favourites<span>私のお気に入り</span></a>
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
                                                <a href="<?php echo esc_url(home_url('/campaign/')); ?>">スペシャルギフト</a>
                                            </li>
                                            <li class="global-nav__child">
                                                <a href="<?php echo esc_url(home_url('/campaign/')); ?>">定番ギフト</a>
                                            </li>
                                            <li class="global-nav__child">
                                                <a href="<?php echo esc_url(home_url('/campaign/')); ?>">家のみバルギフト</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="global-nav__parent">
                                        <a href="<?php echo esc_url(home_url('/concept/')); ?>">コンセプト</a>
                                    </li>
                                </ul>
                                <ul class="global-nav__item-pc">
                                    <li class="global-nav__parent">
                                        <a href="<?php echo esc_url(home_url('/favourites/')); ?>">私のお気に入り</a>
                                        <ul>
                                            <li class="global-nav__child">
                                                <a href="<?php echo esc_url(home_url('/favourites/')); ?>?id=beef">白ワイン×焼肉</a>
                                            </li>
                                            <li class="global-nav__child">
                                                <a href="<?php echo esc_url(home_url('/favourites/')); ?>?id=seafood">白ワイン×海鮮</a>
                                            </li>
                                            <li class="global-nav__child">
                                                <a href="<?php echo esc_url(home_url('/favourites/')); ?>?id=cheese">白ワイン×チーズ</a>
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
                                                <a href="<?php echo esc_url(home_url('/price/')); ?>">季節限定ギフト</a>
                                            </li>
                                            <li class="global-nav__child">
                                                <a href="<?php echo esc_url(home_url('/price/')); ?>">定番ギフト</a>
                                            </li>
                                            <li class="global-nav__child">
                                                <a href="<?php echo esc_url(home_url('/price/')); ?>">家のみバルギフト</a>
                                            </li>
                                            <li class="global-nav__child">
                                                <a href="<?php echo esc_url(home_url('/price/')); ?>">スペシャルギフト</a>
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
                                    <li class="global-nav__parent">
                                        <a href="<?php echo esc_url(home_url('/sitemap/')); ?>">サイトマップ</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </header>
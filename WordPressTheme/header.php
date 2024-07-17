<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="robots" content="noindex" />
    <?php wp_head(); ?>
</head>
<?php
$home = esc_url( home_url( '/' ) );
$campaign = esc_url( home_url( '/campaign/' ) );
$about = esc_url( home_url( '/about/' ) );
$information = esc_url( home_url( '/information/' ) );
$blog = esc_url( home_url( '/blog/' ) );
$voice = esc_url( home_url( '/voice/' ) );
$price = esc_url( home_url( '/price/' ) );
$faq = esc_url( home_url( '/faq/' ) );
$contact = esc_url( home_url( '/contact/' ) );
$privacypolicy = esc_url( home_url( '/privacypolicy/' ) );
$terms = esc_url( home_url( '/terms/' ) );
; ?>
    <body <?php body_class(); ?> >
        <?php wp_body_open(); ?>
        <header class="header">
            <div class="header__inner">
            <h1 class="header__logo">
                <a href="<?php echo $home; ?>" class="header__logoLink">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-white.svg" alt="codeupsのロゴ"/>
                </a>
            </h1>
            <div class="header__drawer hamburger js-hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="header__pc-nav pc-nav">
                <ul class="pc-nav__items">
                <li class="pc-nav__item">
                    <a href="<?php echo $campaign; ?>" class="pc-nav__itemLink">Campaign<span>キャンペーン</span></a>
                </li>
                <li class="pc-nav__item">
                    <a href="<?php echo $about; ?>" class="pc-nav__itemLink">About us<span>私たちについて</span></a>
                </li>
                <li class="pc-nav__item">
                    <a href="<?php echo $information; ?>" class="pc-nav__itemLink">Information<span>ダイビング情報</span></a>
                </li>
                <li class="pc-nav__item">
                    <a href="<?php echo $blog; ?>" class="pc-nav__itemLink">Blog<span>ブログ</span></a>
                </li>
                <li class="pc-nav__item">
                    <a href="<?php echo $voice; ?>" class="pc-nav__itemLink">Voice<span>お客様の声</span></a>
                </li>
                <li class="pc-nav__item">
                    <a href="<?php echo $price; ?>" class="pc-nav__itemLink">Price<span>料金一覧</span></a>
                </li>
                <li class="pc-nav__item">
                    <a href="<?php echo $faq; ?>" class="pc-nav__itemLink">FAQ<span>よくある質問</span></a>
                </li>
                <li class="pc-nav__item">
                    <a href="<?php echo $contact; ?>" class="pc-nav__itemLink">Contact<span>お問合せ</span></a>
                </li>
                </ul>
            </nav>
            <nav class="header__nav global-nav js-global-nav">
                <div class="global-nav__inner">
                <div class="global-nav__items global-nav__items--drawer">
                    <div class="global-nav__item-sp global-nav__item-sp--drawer">
                    <ul class="global-nav__item-pc">
                        <li class="global-nav__parent">
                        <a href="<?php echo $campaign; ?>">キャンペーン</a>
                        <ul>
                            <li class="global-nav__child">
                            <a href="#">ライセンス取得</a>
                            </li>
                            <li class="global-nav__child">
                            <a href="#">貸切体験ダイビング</a>
                            </li>
                            <li class="global-nav__child">
                            <a href="#">ナイトダイビング</a>
                            </li>
                        </ul>
                        </li>
                        <li class="global-nav__parent">
                        <a href="<?php echo $about; ?>">私たちについて</a>
                        </li>
                    </ul>
                    <ul class="global-nav__item-pc">
                        <li class="global-nav__parent">
                        <a href="<?php echo $information; ?>">ダイビング情報</a>
                        <ul>
                            <li class="global-nav__child">
                            <a href="./page-information.html?tab=license">ライセンス講習</a>
                            </li>
                            <li class="global-nav__child">
                            <a href="./page-information.html?tab=experienceDiving">体験ダイビング</a>
                            </li>
                            <li class="global-nav__child">
                            <a href="./page-information.html?tab=fanDiving">ファンダイビング</a>
                            </li>
                        </ul>
                        </li>
                        <li class="global-nav__parent">
                        <a href="<?php echo $blog; ?>">ブログ</a>
                        </li>
                    </ul>
                    </div>
                    <div class="global-nav__item-sp global-nav__item-sp--drawer">
                    <ul class="global-nav__item-pc">
                        <li class="global-nav__parent">
                        <a href="<?php echo $voice; ?>">お客様の声</a>
                        </li>
                        <li class="global-nav__parent">
                        <a href="<?php echo $price; ?>">料金一覧</a>
                        <ul>
                            <li class="global-nav__child">
                            <a href="#">ライセンス講習</a>
                            </li>
                            <li class="global-nav__child">
                            <a href="#">体験ダイビング</a>
                            </li>
                            <li class="global-nav__child">
                            <a href="#">ファンダイビング</a>
                            </li>
                        </ul>
                        </li>
                    </ul>
                    <ul class="global-nav__item-pc">
                        <li class="global-nav__parent">
                        <a href="<?php echo $faq; ?>">よくある質問</a>
                        </li>
                        <li class="global-nav__parent">
                        <a href="<?php echo $privacypolicy; ?>">プライバシー<br class="u-mobile" />ポリシー</a>
                        </li>
                        <li class="global-nav__parent">
                        <a href="<?php echo $terms; ?>">利用規約</a>
                        </li>
                        <li class="global-nav__parent">
                        <a href="<?php echo $contact; ?>">お問い合わせ</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </nav>
            </div>
        </header>
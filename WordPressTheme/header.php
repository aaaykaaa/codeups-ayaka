<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="format-detection" content="telephone=no" />
        <meta name="robots" content="noindex" />
        <!-- ogp -->
        <!-- <meta property="og:title" content="" />
        <meta property="og:type" content="" />
        <meta property="og:url" content="" />
        <meta property="og:image" content="" />
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" /> -->
        <!-- ファビコン -->
        <!-- <link rel="”icon”" href=""/> -->
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="header">
            <div class="header__inner">
            <h1 class="header__logo">
                <a href="./index.html" class="header__logoLink">
                <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-white.svg"
                    alt="codeupsのロゴ"
                />
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
                    <a href="./page-campaign.html" class="pc-nav__itemLink"
                    >Campaign<span>キャンペーン</span></a
                    >
                </li>
                <li class="pc-nav__item">
                    <a href="./page-about.html" class="pc-nav__itemLink"
                    >About us<span>私たちについて</span></a
                    >
                </li>
                <li class="pc-nav__item">
                    <a href="./page-information.html" class="pc-nav__itemLink"
                    >Information<span>ダイビング情報</span></a
                    >
                </li>
                <li class="pc-nav__item">
                    <a href="./page-blog.html" class="pc-nav__itemLink"
                    >Blog<span>ブログ</span></a
                    >
                </li>
                <li class="pc-nav__item">
                    <a href="./page-voice.html" class="pc-nav__itemLink"
                    >Voice<span>お客様の声</span></a
                    >
                </li>
                <li class="pc-nav__item">
                    <a href="./page-price.html" class="pc-nav__itemLink"
                    >Price<span>料金一覧</span></a
                    >
                </li>
                <li class="pc-nav__item">
                    <a href="./page-faq.html" class="pc-nav__itemLink"
                    >FAQ<span>よくある質問</span></a
                    >
                </li>
                <li class="pc-nav__item">
                    <a href="./page-contact.html" class="pc-nav__itemLink"
                    >Contact<span>お問合せ</span></a
                    >
                </li>
                </ul>
            </nav>
            <nav class="header__nav global-nav js-global-nav">
                <div class="global-nav__inner">
                <div class="global-nav__items global-nav__items--drawer">
                    <div class="global-nav__item-sp global-nav__item-sp--drawer">
                    <ul class="global-nav__item-pc">
                        <li class="global-nav__parent">
                        <a href="./page-campaign.html">キャンペーン</a>
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
                        <a href="./page-about.html">私たちについて</a>
                        </li>
                    </ul>
                    <ul class="global-nav__item-pc">
                        <li class="global-nav__parent">
                        <a href="./page-information.html">ダイビング情報</a>
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
                        <a href="./page-blog.html">ブログ</a>
                        </li>
                    </ul>
                    </div>
                    <div class="global-nav__item-sp global-nav__item-sp--drawer">
                    <ul class="global-nav__item-pc">
                        <li class="global-nav__parent">
                        <a href="./page-voice.html">お客様の声</a>
                        </li>
                        <li class="global-nav__parent">
                        <a href="./page-price.html">料金一覧</a>
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
                        <a href="./page-faq.html">よくある質問</a>
                        </li>
                        <li class="global-nav__parent">
                        <a href="./page-privacypolicy.html"
                            >プライバシー<br class="u-mobile" />ポリシー</a
                        >
                        </li>
                        <li class="global-nav__parent">
                        <a href="./page-terms.html">利用規約</a>
                        </li>
                        <li class="global-nav__parent">
                        <a href="./page-contact.html">お問い合わせ</a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
            </nav>
            </div>
        </header>
<?php if(!is_page('contact') && !is_404('contact')): ?>
<section class="contact top-contact">
    <div class="contact__inner inner">
        <div class="contact__boxes contact-boxes">
        <div class="contact-boxes__box contact-box">
            <div class="contact-box__left">
            <a href="<?php echo esc_url(home_url()); ?>" class="contact-box__logo">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo-color.svg" alt="codeupsのロゴ"/>
            </a>
            <div class="contact-box__access">
                <div class="contact-box__address">
                <address>
                    <p>神奈川県湘南市1−1</p>
                    <p>TEL:0120-000-0000</p>
                </address>
                <p>営業時間:9:00-18:00</p>
                <p>定休日:毎週火曜日</p>
                </div>
                <div class="contact-box__map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3255.838073284555!2d139.4768477118252!3d35.31000477259551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60184ef97613a5af%3A0x679611b7d80b7d4f!2z5paw5rGf44OO5bO25rC05peP6aSo!5e0!3m2!1sja!2sjp!4v1733544611567!5m2!1sja!2sjp" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            </div>
            <div class="contact-box__right">
            <div class="contact-box__heading">
                <div class="section-heading">
                <p class="section-heading__englishTitle section-heading__englishTitle-big">contact</p>
                <h2 class="section-heading__japaneseTitle section-heading__japaneseTitle-contact"
                >お問い合わせ</h2>
                </div>
                <p class="contact-box__text">ご予約・お問い合わせはコチラ</p>
            </div>
            <div class="contact-box__btn">
                <a href="<?php echo esc_url(home_url('contact')); ?>" class="button"><span>Contact us</span></a>
            </div>
            </div>
        </div>
        </div>
    </div>
</section>
<?php endif; ?>
</main>
    <div class="<?php echo is_404('404') ? 'footer' : 'footer top-footer'; ?>">
            <div class="footer__inner inner">
                <div class="footer__head">
                    <div class="footer__logo">
                        <a href="<?php echo esc_url(home_url()); ?>">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/logo.svg" alt="codeupsのロゴ"/>
                        </a>
                    </div>
                    <div class="footer__sns">
                    <a href="https://www.facebook.com" class="footer__sns-icon" target="_blank">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sns-facebook_icon.svg" alt="フェイスブック"/>
                    </a>
                    <a href="https://www.instagram.com" class="footer__sns-icon" target="_blank">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/sns-instagram_icon.svg" alt="インスタグラム"/>
                    </a>
                    </div>
                </div>
                <nav class="footer__nav global-nav">
                    <div class="global-nav__inner">
                    <div class="global-nav__items">
                        <div class="global-nav__item-sp">
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
                                <a href="<?php echo esc_url(home_url('/information/')); ?>">ライセンス講習</a>
                                </li>
                                <li class="global-nav__child">
                                <a href="<?php echo esc_url(home_url('/information/')); ?>">体験ダイビング</a>
                                </li>
                                <li class="global-nav__child">
                                <a href="<?php echo esc_url(home_url('/information/')); ?>">ファンダイビング</a>
                                </li>
                            </ul>
                            </li>
                            <li class="global-nav__parent">
                            <a href="<?php echo esc_url(home_url('/blog/')); ?>">ブログ</a>
                            </li>
                        </ul>
                        </div>
                        <div class="global-nav__item-sp">
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
                            <li class="global-nav__parent">
                            <a href="<?php echo esc_url(home_url('/sitemap/')); ?>">サイトマップ</a>
                            </li>
                        </ul>
                        </div>
                    </div>
                    </div>
                </nav>
            </div>
            <div class="footer__copyright">
                <small >Copyright &copy; 2021 - 2023 CodeUps LLC. All Rights Reserved.</small>
            </div>
        </footer>
        <a href="<?php echo esc_url(home_url()); ?>" class="pagetop js-pagetop"></a>
        <?php wp_footer(); ?>
    </body>
</html>

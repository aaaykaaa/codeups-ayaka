<?php get_header(); ?>
<main>
    <div class="page-mv sub-page-mv">
        <div class="page-mv__inner">
            <div class="page-mv__text-box">
            <h1 class="page-mv__title">contact</h1>
            </div>
            <picture class="page-mv__img">
            <source
                media="(min-width: 768px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv1.jpg"
            />
            <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv-sp1.jpg"
                alt="contactpageのmain画像"
            />
            </picture>
        </div>
    </div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

    <div class="page-contact sub">
        <div class="page-contact__inner inner">
            <div class="page-contact__error-message">
                <p>※必須項目が入力されていません。<br class="u-mobile"/>入力してください。</p>
            </div>
            <div class="page-contact__form contact-form js-contact-form mt40">
                <?php echo do_shortcode('[contact-form-7 id="55a3e18" title="お問い合わせ"]'); ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
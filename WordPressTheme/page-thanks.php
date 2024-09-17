<?php 
/*
Template Name: お問い合わせ(送信完了)
*/
get_header(); ?>
<main>
    <div class="page-mv sub-page-mv">
        <div class="page-mv__inner">
            <div class="page-mv__text-box">
            <h1 class="page-mv__title">contact</h1>
            </div>
            <picture class="page-mv__img">
            <source
                media="(min-width: 768px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-contact_mv.jpeg"
            />
            <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-contact_mv-sp.jpeg"
                alt="contactpageのmain画像"
            />
            </picture>
        </div>
    </div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-contact-thanks sub-contact-thanks sub">
    <div class="page-contact-thanks__inner inner">
        <div class="page-contact-thanks__texts">
        <h2 class="page-contact-thanks__title">お問い合わせ内容を送信完了しました。</h2>
        <p class="page-contact-thanks__text">このたびは、お問い合わせ頂き<br class="u-mobile" />誠にありがとうございます。<br />お送り頂きました内容を確認の上、<br class="u-mobile" />3営業日以内に折り返しご連絡させて頂きます。<br />また、ご記入頂いたメールアドレスへ、<br class="u-mobile"/>自動返信の確認メールをお送りしております。</p>
        </div>
    </div>
</section>


</main>
<?php get_footer(); ?>
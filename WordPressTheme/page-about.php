<?php get_header(); ?>
<main>
<div class="page-mv sub-page-mv">
    <div class="page-mv__inner">
        <div class="page-mv__text-box">
            <h1 class="page-mv__title">about us</h1>
        </div>
        <picture class="page-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-about_mv.jpeg"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-about_mv-sp.jpeg" alt="aboutpageのmain画像"/>
        </picture>
    </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<div class="page-about sub-about sub">
    <div class="page-about__inner inner">
        <div class="page-about__content">
            <div class="about-content">
                <div class="about-content__inner">
                    <figure class="about-content__img">
                    <div class="about-content__img-small u-desktop">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-left.jpeg" class="about-content__img2" alt="私たちについて1"/>
                    </div>
                    <div class="about-content__img-big about-content__img-big--sp">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-right.jpeg" class="about-content__img1" alt="私たちについて2"/>
                    </div>
                    </figure>
                    <div class="about-content__body">
                        <div class="about-content__body-left about-content__body-left--sp">
                            <p class="about-content__title about-content__title--white">Dive into<br />the Ocean</p>
                        </div>
                        <div class="about-content__body-right">
                            <p class="about-content__text">ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="gallery sub-gallery">
    <div class="gallery__inner inner">
        <div class="gallery__heading">
        <div class="section-heading">
            <p class="section-heading__englishTitle">gallery</p>
            <h2 class="section-heading__japaneseTitle">フォト</h2>
        </div>
        </div>
        <div class="gallery__area gallery-area">
        <div class="gallery-area__img js-about-modal-trigger">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery1.jpg" class="gallery-area__img1" alt="ギャラリー画像1"/>
        </div>
        <div class="gallery-area__img js-about-modal-trigger">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery2.jpg" class="gallery-area__img2" alt="ギャラリー画像2"/>
        </div>
        <div class="gallery-area__img js-about-modal-trigger">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery3.jpg" class="gallery-area__img3" alt="ギャラリー画像3"/>
        </div>
        <div class="gallery-area__img js-about-modal-trigger">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery4.jpg" class="gallery-area__img4" alt="ギャラリー画像4"/>
        </div>
        <div class="gallery-area__img js-about-modal-trigger">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery5.jpg" class="gallery-area__img5" alt="ギャラリー画像5"/>
        </div>
        <div class="gallery-area__img js-about-modal-trigger">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/gallery6.jpg" class="gallery-area__img6" alt="ギャラリー画像6"/>
        </div>
        </div>
    </div>
    </section>
    <div class="page-about-modal js-about-modal"></div>

<?php get_footer(); ?>
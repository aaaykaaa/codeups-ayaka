<?php get_header(); ?>
<main>
<div class="page-mv sub-page-mv">
    <div class="page-mv__inner">
        <div class="page-mv__text-box">
            <h1 class="page-mv__title">about us</h1>
        </div>
        <picture class="page-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv2.jpg"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv-sp2.jpg" alt="aboutpageのmain画像"/>
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
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-left.jpg" class="about-content__img2" alt="私たちについて1"/>
                    </div>
                    <div class="about-content__img-big about-content__img-big--sp">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-right.jpg" class="about-content__img1" alt="私たちについて2"/>
                    </div>
                    </figure>
                    <div class="about-content__body">
                        <div class="about-content__body-left about-content__body-left--sp">
                            <p class="about-content__title about-content__title--white">Sips & Flavors<br />Marriage</p>
                        </div>
                        <div class="about-content__body-right">
                        <p class="about-content__text">お酒と料理がお互いを引き立て合う組み合わせで、より贅沢かつ豊かなひとときを楽しまれてはいかがでしょうか。</p>
                        <p class="about-content__text">ルールや形式にとらわれず、ご自宅でも気軽に楽しめるペアリングを通して、ご自分の好きな組み合わせを見つけてみてください。<br>洗練された組み合わせが、普段とは違う特別な食事になるよう、当サイトがお手伝いいたします。</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    // カスタムフィールドのグループ「gallery」を取得
    $gallery_images = SCF::get('gallery');
    // 画像データが存在し、かつ有効な画像IDが1つ以上存在するかを確認
    $has_valid_image = false;

    if (!empty($gallery_images)) :
        foreach ($gallery_images as $image) :
            if (isset($image['gallery_pic']) && !empty($image['gallery_pic'])) :
                $has_valid_image = true;
                break; // 有効な画像が見つかったらループを抜ける
            endif;
        endforeach;
    endif;

    // 有効な画像がある場合にのみセクションを表示
    if ($has_valid_image) :
?>
    <section class="gallery sub-gallery">
        <div class="gallery__inner inner">
            <div class="gallery__heading">
                <div class="section-heading">
                    <p class="section-heading__englishTitle">gallery</p>
                    <h2 class="section-heading__japaneseTitle">フォト</h2>
                </div>
            </div>
            <div class="gallery__area gallery-area">
                <?php
                    // 画像データをループで表示
                    foreach ($gallery_images as $image) :
                        // グループ内の「gallery_pic」フィールドにある画像IDを取得
                        $image_id = isset($image['gallery_pic']) ? $image['gallery_pic'] : '';

                        // 画像IDが存在する場合のみ画像を表示
                        if ($image_id) :
                            $image_url = wp_get_attachment_image_url($image_id, 'full'); // フル解像度の画像URLを取得
                            if ($image_url) :
                                ?>
                                <div class="gallery-area__img js-about-modal-trigger">
                                    <img src="<?php echo esc_url($image_url); ?>" class="gallery-area__img1" alt="ギャラリー画像"/>
                                </div>
                            <?php
                            endif;
                        endif;
                    endforeach;
                ?>
            </div>
        </div>
    </section>
<?php endif; ?>


<div class="page-about-modal js-about-modal"></div>

<?php get_footer(); ?>
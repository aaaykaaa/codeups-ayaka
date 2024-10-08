<?php get_header(); ?>
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
<main>
    <div class="mv">
        <div class="mv__inner">
            <div class="mv__title mv-title">
                <p class="mv-title__mainTitle">DIVING</p>
                <p class="mv-title__subTitle">into the ocean</p>
            </div>
            <div class="mv__swiper mv-swiper swiper js-mv-swiper">
                <div class="swiper-wrapper mv-swiper__wrapper">
                    <?php
                        $mvImages = SCF::get('mvImages');
                        if ($mvImages && is_array($mvImages)) :
                            foreach ($mvImages as $image) :
                            if (!empty($image['mvImage-sp']) && !empty($image['mvImage-pc'])) :
                                $mvImageSP = wp_get_attachment_image_url($image['mvImage-sp'], 'full');
                                $mvImagePC = wp_get_attachment_image_url($image['mvImage-pc'], 'full');
                    ?>
                    <div class="swiper-slide mv-swiper__slide">
                        <picture class="mv-swiper__img">
                            <source media="(min-width: 768px)" srcset="<?php echo esc_url($mvImagePC); ?>"/>
                            <img src="<?php echo esc_url($mvImageSP); ?>" alt="DIVING into the oceanのメイン画像"/>
                        </picture>
                    </div>
                    <?php endif; endforeach; endif; ?>
                </div>
            </div>
        </div>
    </div>

    <?php
        $args = array(
            'post_type' => 'campaign',          //どこのページから抽出するか
            'posts_per_page' => -1,
            // 'no_found_rows' => true        //ページャーを使う時はfalseに。
        );
        $the_query = new WP_Query($args); if ($the_query->have_posts()) :
    ?>
<section class="campaign top-campaign">
    <div class="campaign__inner inner">
        <div class="campaign__heading">
            <div class="section-heading">
                <p class="section-heading__englishTitle">campaign</p>
                <h2 class="section-heading__japaneseTitle">キャンペーン</h2>
            </div>
        </div>
        <div class="campaign__swiper campaign-swiper">
            <div class="swiper-container campaign-swiper__container js-campaign-swiper">
                <div class="swiper-wrapper">
                    <?php while ($the_query->have_posts()) : $the_query->the_post();?>
                    <div class="swiper-slide campaign-swiper__card">
                        <div class="campaign-card">
                            <div class="campaign-card__inner">
                                <figure class="campaign-card__img">
                                <?php if(get_the_post_thumbnail()): ?>
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像"/>
                                    <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="画像がありません">
                                    <?php endif; ?>
                                </figure>
                                <div class="campaign-card__body">
                                    <p class="campaign-card__tag"><?php echo get_the_terms(get_the_ID(), 'campaign_category')[0]->name; ?></p>
                                    <h3 class="campaign-card__title"><?php the_title(); ?></h3>
                                    <p class="campaign-card__detail">全部コミコミ(お一人様)</p>
                                    <?php
                                        $campaignPrices = get_field('campaign_prices');
                                    ?>
                                    <div class="campaign-card__prices">
                                        <p class="campaign-card__price-cost">&yen;<?php echo number_format($campaignPrices['price-cost']); ?></p>
                                        <p class="campaign-card__price-low">&yen;<?php echo number_format($campaignPrices['price-low']); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php endwhile; wp_reset_postdata(); endif; ?>
                </div>
            </div>
        </div>
        <div class="swiper-pagination campaign-swiper__pagination js-campaign-swiper__pagination"></div>
        <div class="swiper-button-prev campaign-swiper__prev"></div>
        <div class="swiper-button-next campaign-swiper__next"></div>
        <div class="campaign__btn">
            <a href="<?php echo $campaign; ?>" class="button"><span>View more</span></a>
        </div>
    </div>
</section>

<section class="about top-about">
    <div class="about__inner inner">
        <div class="about__heading">
            <div class="section-heading">
                <p class="section-heading__englishTitle">about us</p>
                <h2 class="section-heading__japaneseTitle">私たちについて</h2>
            </div>
        </div>
        <div class="about__content about-content">
            <div class="about-content__inner">
                <figure class="about-content__img">
                    <div class="about-content__img-small">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-left.jpeg" class="about-content__img2" alt="私たちについて1"/>
                    </div>
                    <div class="about-content__img-big">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-right.jpeg" class="about-content__img1" alt="私たちについて2"/>
                    </div>
                </figure>
                <div class="about-content__body">
                    <div class="about-content__body-left">
                        <p class="about-content__title">Dive into<br />the Ocean</p>
                    </div>
                    <div class="about-content__body-right">
                        <p class="about-content__text">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。
                        </p>
                        <div class="about-content__btn">
                        <a href="<?php echo $about; ?>" class="button"><span>View more</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="information top-information">
    <div class="information__inner inner">
        <div class="information__heading">
            <div class="section-heading">
                <p class="section-heading__englishTitle">information</p>
                <h2 class="section-heading__japaneseTitle">ダイビング情報</h2>
            </div>
        </div>
        <div class="information__item information-item">
            <figure class="information-item__img js-colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information1.jpeg" alt="ダイビング情報"/>
            </figure>
            <div class="information-item__body">
                <h3 class="information-item__title">ライセンス講習</h3>
                <p class="information-item__text">当店はダイビングライセンス（Cカード）世界最大の教育機関PADIの「正規店」として店舗登録されています。<br />正規登録店として、安心安全に初めての方でも安心安全にライセンス取得をサポート致します。</p>
                <div class="information-item__btn">
                    <a href="<?php echo $information; ?>" class="button"><span>View more</span></a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
    $args = array(
        'post_type' => 'post',              //どこのページから抽出するか
        'posts_per_page' => 3
    );
    $the_query = new WP_Query($args); if ($the_query->have_posts()):
?>
<section class="blog top-blog">
    <div class="blog__inner inner">
        <div class="blog__heading">
            <div class="section-heading">
                <p class="section-heading__englishTitle section-heading__englishTitle--white">blog</p>
                <h2 class="section-heading__japaneseTitle section-heading__japaneseTitle--white">ブログ</h2>
            </div>
        </div>
        <div class="blog__cards blog-cards">
            <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                <div class="blog-card__inner">
                    <figure class="blog-card__img">
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像"/>
                    </figure>
                    <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                    <h3 class="blog-card__title"><?php the_title(); ?></h3>
                    <p class="blog-card__text"><?php echo wp_trim_words( get_the_content(), 86, '' ); ?></p>
                </div>
            </a>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <div class="blog__btn">
            <a href="<?php echo $blog; ?>" class="button"><span>View more</span></a>
        </div>
    </div>
</section>

<?php
    //$argsのプロパティを変えていく
    $args = array(
        'post_type' => 'voice',
        'posts_per_page' => 2,
        'no_found_rows' => true,  //ページャーを使う時はfalseに。
    );
    $the_query = new WP_Query($args); if ($the_query->have_posts()):
?>
    <section class="voice top-voice">
    <div class="voice__inner inner">
        <div class="voice__heading">
            <div class="section-heading">
                <p class="section-heading__englishTitle">voice</p>
                <h2 class="section-heading__japaneseTitle">お客様の声</h2>
            </div>
        </div>
        <div class="voice__cards voice-cards">
        <?php while ($the_query->have_posts()): $the_query->the_post(); ?>
            <div class="voice-cards__item voice-card">
                <div class="voice-card__inner">
                    <div class="voice-card__head">
                        <div class="voice-card__description">
                        <?php
                        $voiceMeta = get_field('voice_meta');
                        $voiceAge = $voiceMeta['voice_age'];
                        $voiceGender = $voiceMeta['voice_gender'];
                    ?>
                            <div class="voice-card__meta">
                                <p class="voice-card__age"><?php echo $voiceAge; ?>(<?php echo $voiceGender[0]; ?>)</p>
                                <p class="voice-card__tag"><?php echo get_the_terms(get_the_ID(), 'voice_category')[0]->name; ?></p>
                            </div>
                        <h3 class="voice-card__title">ここにタイトルが入ります。ここにタイトル</h3>
                        </div>
                        <figure class="voice-card__img js-colorbox">
                            <?php if(get_the_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像"/>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="画像がありません">
                            <?php endif; ?>
                        </figure>
                    </div>
                <p class="voice-card__text"><?php the_field('voice_text'); ?></p>
                </div>
            </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <div class="voice__btn">
        <a href="<?php echo $voice; ?>" class="button"><span>View more</span></a>
        </div>
    </div>
    </section>

    <section class="price top-price">
        <div class="price__inner inner">
            <div class="price__heading">
                <div class="section-heading">
                    <p class="section-heading__englishTitle">price</p>
                    <h2 class="section-heading__japaneseTitle">料金一覧</h2>
                </div>
            </div>
            <div class="price__content">
                <picture class="price__img js-colorbox">
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price.jpeg"/>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.jpeg" alt="料金一覧" />
                </picture>
                <div class="price__lists price-lists">
                    <div class="price-lists__price-list price-list">
                        <h3 class="price-list__menu">ライセンス講習</h3>
                        <dl class="price-list__menu-detail">
                            <?php
                                $license = SCF::get('license', 213);
                                foreach ($license as $fields):
                            ?>
                            <div class="price-list__course">
                                <dt><?php echo $fields['licenseMenu']; ?></dt>
                                <dd><?php echo $fields['licensePrice']; ?></dd>
                            </div>
                            <?php endforeach; ?>
                        </dl>
                    </div>
                    <div class="price-lists__price-list price-list">
                        <h3 class="price-list__menu">体験ダイビング</h3>
                        <dl class="price-list__menu-detail">
                            <?php
                                $diving = SCF::get('diving', 213);
                                foreach ($diving as $fields):
                            ?>
                            <div class="price-list__course">
                                <dt><?php echo $fields['divingMenu']; ?></dt>
                                <dd><?php echo $fields['divingPrice']; ?></dd>
                            </div>
                            <?php endforeach; ?>
                        </dl>
                    </div>
                    <div class="price-lists__price-list price-list">
                        <h3 class="price-list__menu">ファンダイビング</h3>
                        <dl class="price-list__menu-detail">
                            <?php
                                $fundiving = SCF::get('fun', 213);
                                foreach ($fundiving as $fields):
                            ?>
                            <div class="price-list__course">
                                <dt><?php echo $fields['funMenu']; ?></dt>
                                <dd><?php echo $fields['funPrice']; ?></dd>
                            </div>
                            <?php endforeach; ?>
                        </dl>
                    </div>
                    <div class="price-lists__price-list price-list">
                        <h3 class="price-list__menu">スペシャルダイビング</h3>
                        <dl class="price-list__menu-detail">
                            <?php
                                $specialDiving = SCF::get('special',213);
                                foreach ($specialDiving as $fields):
                            ?>
                            <div class="price-list__course">
                                <dt><?php echo $fields['specialMenu']; ?></dt>
                                <dd><?php echo $fields['specialPrice']; ?></dd>
                            </div>
                            <?php endforeach; ?>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="price__btn">
                <a href="<?php echo $price; ?>" class="button"><span>View more</span></a>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
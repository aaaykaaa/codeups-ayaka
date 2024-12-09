<?php get_header(); ?>
<main>
    <div class="mv">
        <div class="mv__inner">
            <div class="mv__title mv-title">
                <p class="mv-title__mainTitle">afeemour</p>
                <p class="mv-title__subTitle">Sips & Flavors</p>
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
                                    <div class="campaign-card__prices campaign-card__prices--page">
                                        <p class="campaign-card__price-cost">
                                            <?php echo isset($campaignPrices['price-cost']) && is_numeric($campaignPrices['price-cost']) ? "&yen;" . number_format((float)$campaignPrices['price-cost']) : ''; ?>
                                        </p>
                                        <p class="campaign-card__price-low">
                                            <?php echo isset($campaignPrices['price-low']) && is_numeric($campaignPrices['price-low']) ? "&yen;" . number_format((float)$campaignPrices['price-low']) : ''; ?>
                                        </p>
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
            <a href="<?php echo esc_url(home_url('/campaign/')); ?>" class="button"><span>View more</span></a>
        </div>
    </div>
</section>

<section class="about top-about">
    <div class="about__inner inner">
        <div class="about__heading">
            <div class="section-heading">
                <p class="section-heading__englishTitle">concept</p>
                <h2 class="section-heading__japaneseTitle">お酒と味わいのマリアージュ</h2>
            </div>
        </div>
        <div class="about__content about-content">
            <div class="about-content__inner">
                <figure class="about-content__img">
                    <div class="about-content__img-small">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-left.jpg" class="about-content__img2" alt="私たちについて1"/>
                    </div>
                    <div class="about-content__img-big">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aboutus-right.jpg" class="about-content__img1" alt="私たちについて2"/>
                    </div>
                </figure>
                <div class="about-content__body">
                    <div class="about-content__body-left">
                        <p class="about-content__title">Sips & Flavors<br />Marriage</p>
                    </div>
                    <div class="about-content__body-right">
                        <p class="about-content__text">お酒と料理がお互いを引き立て合う組み合わせで、より贅沢かつ豊かなひとときを楽しまれてはいかがでしょうか。</p>
                        <p class="about-content__text">ルールや形式にとらわれず、ご自宅でも気軽に楽しめるペアリングを通して、ご自分の好きな組み合わせを見つけてみてください。<br>洗練された組み合わせが、普段とは違う特別な食事になるよう、当サイトがお手伝いいたします。</p>
                        <div class="about-content__btn">
                        <a href="<?php echo esc_url(home_url('/about/')); ?>" class="button"><span>View more</span></a>
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
                <p class="section-heading__englishTitle">favourites</p>
                <h2 class="section-heading__japaneseTitle">わたしのお気に入り</h2>
            </div>
        </div>
        <div class="information__item information-item">
            <figure class="information-item__img js-colorbox">
                <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/information1.jpg" alt="ダイビング情報"/>
            </figure>
            <div class="information-item__body">
                <h3 class="information-item__title">白ワイン×焼肉</h3>
                <p class="information-item__text">
                日常のお酒と料理も、少しの工夫で驚きの味わい体験に変わります。<br>たとえば、濃厚なチーズに日本酒、焼肉に白ワイン、甘口ワインにスパイシーな料理を合わせると、味の奥行きがグッと広がり、新しい魅力が顔を覗かせます。<br>異なる味同士が引き立て合うことで、思わぬ相性や旨味が発見でき、味覚だけでなく心も躍る特別なひとときを楽しめるのが、ちょっと変わったペアリングの面白さです。
                </p>
                <div class="information-item__btn">
                    <a href="<?php echo esc_url(home_url('/information/')); ?>" class="button"><span>View more</span></a>
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
                    <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <h3 class="blog-card__title"><?php the_title(); ?></h3>
                    <p class="blog-card__text"><?php echo wp_trim_words( get_the_content(), 86, '' ); ?></p>
                </div>
            </a>
            <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <div class="blog__btn">
            <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="button"><span>View more</span></a>
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
                                <p class="voice-card__age"><?php echo $voiceAge; ?><?php echo $voiceGender[0]; ?></p>
                                <p class="voice-card__tag"><?php echo get_the_terms(get_the_ID(), 'voice_category')[0]->name; ?></p>
                            </div>
                        <h3 class="voice-card__title"><?php the_title(); ?></h3>
                        </div>
                        <figure class="voice-card__img js-colorbox">
                            <?php if(get_the_post_thumbnail()): ?>
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像"/>
                            <?php else: ?>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="画像がありません">
                            <?php endif; ?>
                        </figure>
                    </div>
                <p class="voice-card__text">
                <?php
                    $voice_text = get_field("voice_text");
                    if (mb_strlen($voice_text) > 173) {
                        echo mb_substr($voice_text, 0, 173, 'UTF-8') . '...';
                    } else {
                        echo $voice_text;
                    }
                ?>
                </p>
                </div>
            </div>
        <?php endwhile; endif; wp_reset_postdata(); ?>
        </div>
        <div class="voice__btn">
        <a href="<?php echo esc_url(home_url('/voice/')); ?>" class="button"><span>View more</span></a>
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
                    <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/price.jpg"/>
                    <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/price-sp.jpg" alt="料金一覧" />
                </picture>
                <div class="price__lists price-lists">
                    <div class="price-lists__price-list price-list">
                        <h3 class="price-list__menu">季節限定ギフト※冬季</h3>
                        <dl class="price-list__menu-detail">
                            <?php
                                $limit = SCF::get('limit', 213);
                                foreach ($limit as $fields):
                            ?>
                            <div class="price-list__course">
                                <dt><?php echo $fields['limitMenu']; ?></dt>
                                <dd><?php echo $fields['limitPrice']; ?></dd>
                            </div>
                            <?php endforeach; ?>
                        </dl>
                    </div>
                    <div class="price-lists__price-list price-list">
                        <h3 class="price-list__menu">定番ギフト</h3>
                        <dl class="price-list__menu-detail">
                            <?php
                                $standard = SCF::get('standard', 213);
                                foreach ($standard as $fields):
                            ?>
                            <div class="price-list__course">
                                <dt><?php echo $fields['standardMenu']; ?></dt>
                                <dd><?php echo $fields['standardPrice']; ?></dd>
                            </div>
                            <?php endforeach; ?>
                        </dl>
                    </div>
                    <div class="price-lists__price-list price-list">
                        <h3 class="price-list__menu">家のみバルギフト</h3>
                        <dl class="price-list__menu-detail">
                            <?php
                                $homeBal = SCF::get('homeBal', 213);
                                foreach ($homeBal as $fields):
                            ?>
                            <div class="price-list__course">
                                <dt><?php echo $fields['homeBalMenu']; ?></dt>
                                <dd><?php echo $fields['homeBalPrice']; ?></dd>
                            </div>
                            <?php endforeach; ?>
                        </dl>
                    </div>
                    <div class="price-lists__price-list price-list">
                        <h3 class="price-list__menu">スペシャルギフト</h3>
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
                <a href="<?php echo esc_url(home_url('/price/')); ?>" class="button"><span>View more</span></a>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
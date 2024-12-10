<?php get_header(); ?>
<div class="page-mv sub-page-mv">
    <div class="page-mv__inner">
        <div class="page-mv__text-box">
            <h1 class="page-mv__title">campaign</h1>
        </div>
        <picture class="page-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv4.jpg"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv-sp4.jpg" alt="キャンペーンカテゴリーページのメイン画像"/>
        </picture>
    </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<?php if ( have_posts() ) : ?>
<section class="page-campaign sub-campaign sub">
    <div class="page-campaign inner">
        <!-- タグの表示 -->
        <?php
            $queried_object = get_queried_object();
            $current_term_id = is_a($queried_object, 'WP_Term') ? $queried_object->term_id : null;
        ?>

        <ul class="page-campaign__tabs tabs">
            <li class="tabs__tab tab <?php echo (is_post_type_archive('campaign') && !$current_term_id) ? 'is-open' : ''; ?>">
                <a href="<?php echo get_post_type_archive_link('campaign'); ?>">ALL</a>
            </li>
            <?php
                $campaignTerms = get_terms('campaign_category', array('hide_empty' => false));
                foreach ($campaignTerms as $campaignTerm) :
            ?>
                <li class="tabs__tab tab <?php echo ($campaignTerm->term_id == $current_term_id) ? 'is-open' : ''; ?>">
                    <a href="<?php echo get_term_link($campaignTerm, 'campaign_category'); ?>">
                        <?php echo esc_html($campaignTerm->name); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>


        <!-- cards -->
        <ul class="page-campaign__cards campaign-cards campaign-cards--2col js-container" id="choice">
                <?php while (have_posts()): the_post(); ?>
                <!-- card -->
                <li class="page-campaign__card campaign-card">
                    <div class="campaign-card__inner">
                        <figure class="campaign-card__img">
                        <?php if(get_the_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像"/>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="画像がありません">
                        <?php endif; ?>
                        </figure>
                        <div class="campaign-card__body campaign-card__body--page">
                            <p class="campaign-card__tag"><?php echo get_the_terms(get_the_ID(), 'campaign_category')[0]->name; ?></p>
                            <h2 class="campaign-card__title campaign-card__title--page"><?php the_title(); ?></h2>
                            <p class="campaign-card__detail campaign-card__detail--page">全部コミコミ(お一人様)</p>
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
                            <?php
                                $campaignContent = get_field('campaign_content');
                                $campaignDate = get_field('campaign_date');
                            ?>
                            <div class="campaign-card__wrap u-desktop">
                                <p class="campaign-card__text"><?php echo $campaignContent['text']; ?></p>
                                <div class="campaign-card__content">
                                    <p class="campaign-card__date"><?php echo $campaignDate['start_date']; ?><?php echo $campaignDate['end_date']; ?></p>
                                    <p class="contact-box__text">
                                        ご注文・お問い合わせはコチラ
                                    </p>
                                    <?php
                                        $contact = esc_url( home_url( '/contact/' ) );
                                    ?>
                                    <div class="campaign-card__btn">
                                        <a href="<?php echo $contact; ?>" class="button"><span>Contact us</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ループ終了 -->
                <?php endwhile; ?>
            </ul>
        </div>
        <div class="page-campaign__pagination pagination">
            <?php wp_pagenavi(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
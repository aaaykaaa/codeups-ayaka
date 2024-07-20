<?php get_header(); ?>
<div class="page-mv sub-page-mv">
    <div class="page-mv__inner">
        <div class="page-mv__text-box">
        <h1 class="page-mv__title">campaign</h1>
        </div>
        <picture class="page-mv__img">
        <source
            media="(min-width: 768px)"
            srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-campaign_mv.jpeg"
        />
        <img
            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-campaign_mv-sp.jpeg"
            alt="campaignpageのmain画像"
        />
        </picture>
    </div>
    </div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<?php if (have_posts()): while (have_posts()): the_post(); ?>
    <section class="page-campaign sub-campaign sub">
        <div class="page-campaign inner">

        <!-- タグの表示 -->
            <ul class="page-campaign__tabs tabs">
                <li class="tabs__tab tab is-open"><a href="#">ALL</a></li>
                <li class="tabs__tab tab"><a href="#">ライセンス講習</a></li>
                <li class="tabs__tab tab"><a href="#">ファンダイビング</a></li>
                <li class="tabs__tab tab"><a href="#">体験ダイビング</a></li>
            </ul>
            <!-- cards -->
            <ul class="page-campaign__cards campaign-cards campaign-cards--2col js-container" id="choice">
                <!-- card -->
                <li class="page-campaign__card campaign-card" data-item="tab01">
                    <div class="campaign-card__inner">
                        <figure class="campaign-card__img">
                        <?php if(get_the_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像"/>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="画像がありません">
                        <?php endif; ?>
                        </figure>
                        <div class="campaign-card__body campaign-card__body--page">
                            <p class="campaign-card__tag">ライセンス講習</p>
                            <h2 class="campaign-card__title campaign-card__title--page"><?php the_title(); ?></h2>
                            <p class="campaign-card__detail campaign-card__detail--page">全部コミコミ(お一人様)</p>
                            <?php
                                $campaignPrices = get_field('campaign_prices');
                            ?>
                            <div class="campaign-card__prices campaign-card__prices--page">
                                <p class="campaign-card__price-cost">&yen;<?php echo number_format($campaignPrices['price-cost']); ?></p>
                                <p class="campaign-card__price-low">&yen;<?php echo number_format($campaignPrices['price-low']); ?></p>
                            </div>
                            <?php
                                $campaignContent = get_field('campaign_content');
                                $date = campaignContent['date'];
                            ?>
                            <div class="campaign-card__wrap u-desktop">
                                <p class="campaign-card__text"><?php echo $campaignContent['text']; ?></p>
                                <div class="campaign-card__content">
                                    <p class="campaign-card__date"><?php echo $date['start-date']; ?>-<?php echo $date['end-date']; ?></p>
                                    <p class="contact-box__text">
                                        ご予約・お問い合わせはコチラ
                                    </p>
                                    <div class="campaign-card__btn">
                                        <a href="./page-contact.html" class="button"
                                        ><span>Contact us</span></a
                                        >
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- ループ終了 -->
            </ul>
        </div>
        <div class="page-campaign__pagination pagination">
            <ol class="pagination__area">
            <li class="pagination__prev">
                <a href="#">＜</a>
            </li>
            <li class="current">
                <a href="#">1</a>
            </li>
            <li>
                <a href="#">2</a>
            </li>
            <li>
                <a href="#">3</a>
            </li>
            <li>
                <a href="#">4</a>
            </li>
            <li class="u-desktop">
                <a href="#">5</a>
            </li>
            <li class="u-desktop">
                <a href="#">6</a>
            </li>
            <li class="pagination__next">
                <a href="#">＞</a>
            </li>
        </ol>
    </div>
</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>
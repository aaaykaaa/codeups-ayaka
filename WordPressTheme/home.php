<?php get_header(); ?>
<main>
    <div class="page-mv sub-page-mv">
        <div class="page-mv__inner">
        <div class="page-mv__text-box">
            <h1 class="page-mv__title">blog</h1>
        </div>
        <picture class="page-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-blog_mv.jpeg"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-blog_mv-sp.jpeg" alt="blogpageのmain画像"/>
        </picture>
        </div>
    </div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

    <div class="two-columns sub-two-columns sub">
    <div class="two-columns__inner inner">
    <div class="two-columns__container">
        <div class="two-columns__main main-content">
        <div class="main-content__cards blog-cards blog-cards--2col">
            <?php if (have_posts()): while (have_posts()): the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                <div class="blog-card__inner">
                    <figure class="blog-card__img">
                        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog1.jpeg" alt="ブログ1"/>
                    </figure>
                    <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                    <h2 class="blog-card__title"><?php the_title(); ?></h2>
                    <p class="blog-card__text">
                        ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。ここにテキストが入ります。<br />ここにテキストが入ります。ここにテキストが入ります。ここにテキスト
                    </p>
                </div>
            </a>
            <?php endwhile; endif; ?>
        </div>
        <div class="main-content__pagination pagination">
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
        </div>
        <aside class="two-columns__aside aside">
        <div class="aside__inner">
            <section class="aside-blog-ranking">
            <div class="aside-blog-ranking__heading">
                <div class="aside-heading">
                <h2 class="aside-heading__title">人気記事</h2>
                </div>
            </div>
            <div class="aside-blog-ranking__blog-cards blog-cards blog-cards--1col">
                <a href="#" class="blog-cards__item blog-card">
                <div class="blog-card__wrapper">
                    <figure class="blog-card__img blog-card__img--ranking">
                    <img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog4.jpeg"
                        alt="ブログ4"
                    />
                    </figure>
                    <div class="blog-card__body">
                    <time
                        class="blog-card__date blog-card__date--ranking"
                        datetime="2023-11-27"
                        >2023/11/17</time
                    >
                    <h3 class="blog-card__title blog-card__title--ranking">
                        ライセンス取得
                    </h3>
                    </div>
                </div>
                </a>
                <a href="#" class="blog-cards__item blog-card">
                <div class="blog-card__wrapper">
                    <figure class="blog-card__img blog-card__img--ranking">
                    <img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog2.jpeg"
                        alt="ブログ2"
                    />
                    </figure>
                    <div class="blog-card__body">
                    <time
                        class="blog-card__date blog-card__date--ranking"
                        datetime="2023-11-27"
                        >2023/11/17</time
                    >
                    <h3 class="blog-card__title blog-card__title--ranking">
                        ウミガメと泳ぐ
                    </h3>
                    </div>
                </div>
                </a>
                <a href="#" class="blog-cards__item blog-card">
                <div class="blog-card__wrapper">
                    <figure class="blog-card__img blog-card__img--ranking">
                    <img
                        src="<?php echo get_theme_file_uri(); ?>/assets/images/common/blog3.jpeg"
                        alt="ブログ3"
                    />
                    </figure>
                    <div class="blog-card__body">
                    <time
                        class="blog-card__date blog-card__date--ranking"
                        datetime="2023-11-27"
                        >2023/11/17</time
                    >
                    <h3 class="blog-card__title blog-card__title--ranking">
                        カクレクマノミ
                    </h3>
                    </div>
                </div>
                </a>
            </div>
            </section>

            <section class="aside-review-rating">
            <div class="aside-review-rating__heading">
                <div class="aside-heading">
                <h2 class="aside-heading__title">口コミ</h2>
                </div>
            </div>
            <div class="aside-review-rating__voice-card voice-card voice-card--aside">
                <figure
                class="voice-card__img voice-card__img--rating js-colorbox"
                >
                <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/aside-review-rating.jpeg"
                    alt="お客様の声1"
                />
                </figure>
                <div class="voice-card__wrapper">
                <div class="voice-card__meta voice-card__meta--rating">
                    <p class="voice-card__age voice-card__age--rating">
                    30代(カップル)
                    </p>
                </div>
                <h3 class="voice-card__title voice-card__title--rating">
                    ここにタイトルが入ります。ここにタイトル
                </h3>
                </div>
                <div class="aside-review-rating__btn">
                <a href="#" class="button"><span>View more</span></a>
                </div>
            </div>
            </section>

            <section class="aside-campaign">
            <div class="aside-campaign__heading">
                <div class="aside-heading">
                <h2 class="aside-heading__title">キャンペーン</h2>
                </div>
            </div>
            <div class="aside-campaign__cards campaign-cards">
                <div class="campaign-cards__card campaign-card">
                <figure class="campaign-card__img campaign-card__img--aside">
                    <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign1.jpg"
                    alt="キャンペーン1"
                    />
                </figure>
                <div class="campaign-card__body campaign-card__body--aside">
                    <h3 class="campaign-card__title campaign-card__title--aside">ライセンス取得</h3>
                    <p class="campaign-card__detail campaign-card__detail--aside">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__prices campaign-card__prices--aside">
                    <p class="campaign-card__price-cost campaign-card__price-cost--aside">&yen;56,000</p>
                    <p class="campaign-card__price-low campaign-card__price-low--aside">&yen;46,000</p>
                    </div>
                </div>
                </div>
                <div class="campaign-cards__card campaign-card">
                <figure class="campaign-card__img campaign-card__img--aside">
                    <img
                    src="<?php echo get_theme_file_uri(); ?>/assets/images/common/campaign2.jpg"
                    alt="キャンペーン2"
                    />
                </figure>
                <div class="campaign-card__body campaign-card__body--aside">
                    <h3 class="campaign-card__title campaign-card__title--aside">貸切体験ダイビング</h3>
                    <p class="campaign-card__detail campaign-card__detail--aside">全部コミコミ(お一人様)</p>
                    <div class="campaign-card__prices campaign-card__prices--aside">
                    <p class="campaign-card__price-cost campaign-card__price-cost--aside">&yen;24,000</p>
                    <p class="campaign-card__price-low campaign-card__price-low--aside">&yen;18,000</p>
                    </div>
                </div>
                </div>
            </div>
            <div class="aside-campaign__btn">
                <a href="./page-campaign.html" class="button"
                ><span>View more</span></a
                >
            </div>
            </section>

            <section class="aside-blog-archive">
            <div class="aside-blog-archive__heading">
                <div class="aside-heading">
                <h2 class="aside-heading__title">アーカイブ</h2>
                </div>
            </div>
            <div class="aside-blog-archive__blog-archive-accordion">
                <div class="blog-archive-accordion">
                <div class="blog-archive-accordion__container">
                    <div class="blog-archive-accordion__item">
                    <h3 class="blog-archive-accordion__title js-blog-archive-accordion__title is-open">2023</h3>
                    <div class="blog-archive-accordion__content">
                        <a href="#" class="blog-archive-accordion__title">3月</a>
                        <a href="#" class="blog-archive-accordion__title">2月</a>
                        <a href="#" class="blog-archive-accordion__title">1月</a>
                    </div>
                    </div>
                    <div class="blog-archive-accordion__item">
                    <h3 class="blog-archive-accordion__title js-blog-archive-accordion__title">2022</h3>
                    </div>
                </div>
                </div>
            </div>
            </section>
        </div>
        </aside>
    </div>
    </div>
    </div>
<?php get_footer(); ?>
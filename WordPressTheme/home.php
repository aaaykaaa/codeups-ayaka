<?php get_header(); ?>
<main>
    <div class="page-mv sub-page-mv">
        <div class="page-mv__inner">
        <div class="page-mv__text-box">
            <h1 class="page-mv__title">blog</h1>
        </div>
        <picture class="page-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv3.jpg"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv-sp3.jpg" alt="ブログページのメイン画像"/>
        </picture>
        </div>
    </div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

    <div class="two-columns sub-two-columns sub">
        <div class="two-columns__inner inner">
            <div class="two-columns__container">
                <div class="two-columns__main main-content">
                <?php if ( have_posts() ) : ?>
                    <div class="main-content__cards blog-cards blog-cards--2col">
                    <?php while(have_posts()): the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                            <div class="blog-card__inner">
                                <figure class="blog-card__img">
                                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像"/>
                                </figure>
                                <time class="blog-card__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                                <h2 class="blog-card__title"><?php the_title(); ?></h2>
                                <p class="blog-card__text"><?php echo wp_trim_words( get_the_content(), 86, '' ); ?></p>
                            </div>
                        </a>
                        <?php endwhile; ?>
                    </div>
                    <?php endif; ?>
                    <div class="main-content__pagination pagination">
                        <?php wp_pagenavi(); ?>
                    </div>
                </div>
                <div class="two-columns__aside">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        </div>
    </div>
<?php get_footer(); ?>
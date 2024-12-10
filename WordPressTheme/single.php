<?php get_header(); ?>
<main>
    <div class="page-mv sub-page-mv">
        <div class="page-mv__inner">
            <div class="page-mv__text-box">
                <p class="page-mv__title">blog</p>
            </div>
            <picture class="page-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv3.jpg"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv-sp3.jpg" alt="ブログ詳細ページのメイン画像"/>
            </picture>
        </div>
    </div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<div class="two-columns sub-two-columns sub">
    <div class="two-columns__inner inner">
        <div class="two-columns__container">
            <div class="two-columns__main main-content">
                <?php if (have_posts()): while (have_posts()): the_post(); ?>
                    <div class="main-content__blog-archive blog-archive">
                        <time class="blog-archive__date" datetime="<?php the_time('c'); ?>"><?php the_time('Y.m.d'); ?></time>
                        <h1 class="blog-archive__title"><?php  the_title(); ?></h1>
                        <?php if(get_the_post_thumbnail()): ?>
                        <figure class="blog-archive__img">
                            <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像"/>
                        </figure>
                        <?php endif; ?>
                        <div class="blog-archive__entry">
                            <?php the_content(); ?>
                        </div>
                    </div>
                    <div class="main-content__pagination-short pagination">
                        <ol class="pagination__area">
                        <?php
                            $prev = get_previous_post();
                            if ( ! empty( $prev ) ) {
                                $prev_url = esc_url( get_permalink( $prev->ID ) );
                            }
                            $next = get_next_post();
                            if ( ! empty( $next ) ) {
                                $next_url = esc_url( get_permalink( $next->ID ) );
                            }
                        ?>
                            <?php if ( ! empty( $prev ) ) : ?>
                            <li class="pagination__prev">
                                <a href="<?php echo $prev_url; ?>">＜</a>
                            </li>
                            <?php endif; ?>
                            <?php if ( ! empty( $next ) ) : ?>
                            <li class="pagination__next">
                                <a href="<?php echo $next_url; ?>">＞</a>
                            </li>
                            <?php endif; ?>
                        </ol>
                    </div>
                <?php endwhile; endif; ?>
            </div>

            <!-- sidebar -->
            <div class="two-columns__aside">
                <?php get_sidebar(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
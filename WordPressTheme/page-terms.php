<?php get_header(); ?>
<div class="page-mv sub-page-mv">
    <div class="page-mv__inner">
        <div class="page-mv__text-box">
            <h1 class="page-mv__title">privacy<span>p</span>olicy</h1>
        </div>
        <picture class="page-mv__img">
            <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-bg_mv.jpeg"/>
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-bg_mv-sp.jpeg" alt="privacypolicypageのmain画像"/>
        </picture>
    </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<section class="page-terms sub-terms sub">
<?php if (have_posts()) : ?>
    <div class="page-terms__inner inner">
    <?php while (have_posts()) : the_post(); ?>
        <div class="page-terms__text">
            <h2><?php the_title() ?></h2>
            <?php the_content() ?>
        </div>
        <?php endwhile; ?>
    </div>
<?php endif; ?>
</section>

<?php get_footer(); ?>
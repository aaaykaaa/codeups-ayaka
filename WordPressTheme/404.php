<?php get_header(); ?>
<main>
    <div class="page-404 sub-404">
        <div class="page-404__inner inner">

        <!-- パンくず -->
        <?php get_template_part('parts/breadcrumb'); ?>

            <div class="page-404__content">
                <h1 class="page-404__title">404</h1>
                <p class="page-404__text">
                    申し訳ありません。<br />お探しのページが見つかりません。
                </p>
            </div>
            <div class="page-404__btn">
                <a href="<?php echo esc_url(home_url()); ?>" class="button button--wtite"><span>Page TOP</span></a>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>
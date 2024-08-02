<?php get_header(); ?>
<div class="page-mv sub-page-mv">
    <div class="page-mv__inner">
        <div class="page-mv__text-box">
        <h1 class="page-mv__title">voice</h1>
        </div>
        <picture class="page-mv__img">
        <source media="(min-width: 768px)" srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-voice_mv.jpeg"/>
        <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-voice_mv-sp.jpeg" alt="voicepageのmain画像"/>
        </picture>
    </div>
</div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

<?php if ( have_posts() ) : ?>
<section class="page-voice sub-voice sub">
    <div class="page-voice inner">
        <!-- タブ切り替え -->
        <ul class="page-voice__tabs tabs">
            <li class="tabs__tab tab is-open"><a href="<?php echo get_post_type_archive_link('voice'); ?>">ALL</a></li>
            <?php $voiceTerms = get_terms('voice_category', array('hide_empty'=>false)); ?>
            <?php foreach($voiceTerms as $voiceTerm) : ?>
                <li class="tabs__tab tab"><a href="<?php echo get_term_link($voiceTerm, '$voice_category');?>"><?php echo $voiceTerm->name;?></a></li>
            <?php endforeach; ?>
        </ul>
        <ul class="page-voice__cards voice-cards js-container" id="choice">
            <!-- ループ開始 -->
            <?php while (have_posts()): the_post(); ?>
            <li class="page-voice__card voice-card">
                <div class="voice-card__inner">
                <div class="voice-card__head">
                    <div class="voice-card__description">
                    <?php
                        $voiceMeta = get_field('voice_meta');
                    ?>
                    <div class="voice-card__meta">
                        <p class="voice-card__age"><?php echo $voiceMeta['voice_age']; ?>()</p>
                        <p class="voice-card__tag"><?php echo get_the_terms(get_the_ID(), 'voice_category')[0]->name; ?></p>
                    </div>
                    <h2 class="voice-card__title">
                    <?php the_title(); ?>
                    </h2>
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
                <?php the_field('voice_text'); ?>
                </p>
                </div>
            </li>
            <!-- ループ終了 -->
            <?php endwhile; ?>
        </ul>
        <div class="page-voice__pagination pagination">
        <?php wp_pagenavi(); ?>
        </div>
    </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>
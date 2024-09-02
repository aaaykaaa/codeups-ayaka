<?php get_header(); ?>
<main>
    <div class="page-mv sub-page-mv">
        <div class="page-mv__inner">
            <div class="page-mv__text-box">
            <h1 class="page-mv__title">price</h1>
            </div>
            <picture class="page-mv__img">
            <source
                media="(min-width: 768px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-price_mv.jpeg"
            />
            <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-price_mv-sp.jpeg"
                alt="pricepageのmain画像"
            />
            </picture>
        </div>
    </div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

    <section class="page-price sub-price sub">
        <div class="page-price__inner inner">
            <div class="page-price__content">
            <div class="page-price__table">
                <div class="page-price__table-item">
                    <div class="page-price__head">
                        <h2 class="page-price__title"><span>ライセンス講習</span></h2>
                    </div>
                    <div class="page-price__body">
                        <?php
                            $license = SCF::get('license');
                            foreach ($license as $fields):
                        ?>
                        <div class="page-price__body-item">
                            <h3 class="page-price__course"><?php echo $fields['menu']; ?></h3>
                            <p class="page-price__price"><?php echo $fields['price']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="page-price__table-item">
                    <div class="page-price__head">
                        <h2 class="page-price__title"><span>体験ダイビング</span></h2>
                    </div>
                    <div class="page-price__body">
                        <?php
                            $diving = SCF::get('diving');
                            foreach ($diving as $fields):
                        ?>
                        <div class="page-price__body-item">
                            <h3 class="page-price__course"><?php echo $fields['menu']; ?></h3>
                            <p class="page-price__price"><?php echo $fields['price']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="page-price__table-item">
                    <div class="page-price__head">
                        <h2 class="page-price__title"><span>ファンダイビング</span></h2>
                    </div>
                    <div class="page-price__body">
                        <?php
                            $fundiving = SCF::get('fundiving');
                            foreach ($fundiving as $fields):
                        ?>
                        <div class="page-price__body-item">
                            <h3 class="page-price__course"><?php echo $fields['menu']; ?></h3>
                            <p class="page-price__price"><?php echo $fields['price']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="page-price__table-item">
                    <div class="page-price__head">
                        <h2 class="page-price__title"><span>スペシャルダイビング</span></h2>
                    </div>
                    <div class="page-price__body">
                        <?php
                            $specialDiving = SCF::get('specialDiving');
                            foreach ($specialDiving as $fields):
                        ?>
                        <div class="page-price__body-item">
                            <h3 class="page-price__course"><?php echo $fields['menu']; ?></h3>
                            <p class="page-price__price"><?php echo $fields['price']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
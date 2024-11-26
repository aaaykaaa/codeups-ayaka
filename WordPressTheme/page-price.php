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
                <?php
                    $license = SCF::get('license');

                    // フィールドの中身が空でない要素を抽出
                    $filteredLicense = array_filter($license, function($fields) {
                        // licenseMenuとlicensePriceが空でないかチェック
                        return !empty($fields['licenseMenu']) && !empty($fields['licensePrice']);
                    });

                    // フィルタリングされた結果に要素がある場合のみ表示
                    if (is_array($filteredLicense) && count($filteredLicense) > 0):
                    ?>
                        <div class="page-price__table-item">
                            <div class="page-price__head">
                                <h2 class="page-price__title"><span>ライセンス講習</span></h2>
                            </div>
                            <div class="page-price__body">
                                <?php foreach ($filteredLicense as $fields): ?>
                                    <div class="page-price__body-item">
                                        <h3 class="page-price__course"><?php echo $fields['licenseMenu']; ?></h3>
                                        <p class="page-price__price"><?php echo $fields['licensePrice']; ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                <?php endif; ?>

                <?php
                    // 体験ダイビングのデータを取得
                    $diving = SCF::get('diving');

                    // フィールドの中身が空でない要素を抽出
                    $filteredDiving = array_filter($diving, function($fields) {
                        // divingMenuとdivingPriceが空でないかチェック
                        return !empty($fields['divingMenu']) && !empty($fields['divingPrice']);
                    });

                    // フィルタリングされた結果に要素がある場合のみ表示
                    if (is_array($filteredDiving) && count($filteredDiving) > 0):
                ?>
                    <div class="page-price__table-item">
                        <div class="page-price__head">
                            <h2 class="page-price__title"><span>体験ダイビング</span></h2>
                        </div>
                        <div class="page-price__body">
                            <?php foreach ($filteredDiving as $fields): ?>
                                <div class="page-price__body-item">
                                    <h3 class="page-price__course"><?php echo $fields['divingMenu']; ?></h3>
                                    <p class="page-price__price"><?php echo $fields['divingPrice']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php
                    // ファンダイビングのデータを取得
                    $fundiving = SCF::get('fun');

                    // フィールドの中身が空でない要素を抽出
                    $filteredFundiving = array_filter($fundiving, function($fields) {
                        // funMenuとfunPriceが空でないかチェック
                        return !empty($fields['funMenu']) && !empty($fields['funPrice']);
                    });

                    // フィルタリングされた結果に要素がある場合のみ表示
                    if (is_array($filteredFundiving) && count($filteredFundiving) > 0):
                ?>
                    <div class="page-price__table-item">
                        <div class="page-price__head">
                            <h2 class="page-price__title"><span>ファンダイビング</span></h2>
                        </div>
                        <div class="page-price__body">
                            <?php foreach ($filteredFundiving as $fields): ?>
                                <div class="page-price__body-item">
                                    <h3 class="page-price__course"><?php echo $fields['funMenu']; ?></h3>
                                    <p class="page-price__price"><?php echo $fields['funPrice']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php
                    // スペシャルダイビングのデータを取得
                    $specialDiving = SCF::get('special');

                    // フィールドの中身が空でない要素を抽出
                    $filteredSpecialDiving = array_filter($specialDiving, function($fields) {
                        // specialMenuとspecialPriceが空でないかチェック
                        return !empty($fields['specialMenu']) && !empty($fields['specialPrice']);
                    });

                    // フィルタリングされた結果に要素がある場合のみ表示
                    if (is_array($filteredSpecialDiving) && count($filteredSpecialDiving) > 0):
                ?>
                    <div class="page-price__table-item">
                        <div class="page-price__head">
                            <h2 class="page-price__title"><span>スペシャルダイビング</span></h2>
                        </div>
                        <div class="page-price__body">
                            <?php foreach ($filteredSpecialDiving as $fields): ?>
                                <div class="page-price__body-item">
                                    <h3 class="page-price__course"><?php echo $fields['specialMenu']; ?></h3>
                                    <p class="page-price__price"><?php echo $fields['specialPrice']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>
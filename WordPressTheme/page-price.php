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
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv2.jpg"
            />
            <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv-sp2.jpg"
                alt="料金一覧ページのメイン画像"
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
                    $limit = SCF::get('limit');

                    // フィールドの中身が空でない要素を抽出
                    $filteredLimit = array_filter($limit, function($fields) {
                        // limitMenuとlimitPriceが空でないかチェック
                        return !empty($fields['limitMenu']) && !empty($fields['limitPrice']);
                    });

                    // フィルタリングされた結果に要素がある場合のみ表示
                    if (is_array($filteredLimit) && count($filteredLimit) > 0):
                    ?>
                        <div class="page-price__table-item">
                            <div class="page-price__head">
                                <h2 class="page-price__title"><span>季節限定ギフト※冬季</span></h2>
                            </div>
                            <div class="page-price__body">
                                <?php foreach ($filteredLimit as $fields): ?>
                                    <div class="page-price__body-item">
                                        <h3 class="page-price__course"><?php echo $fields['limitMenu']; ?></h3>
                                        <p class="page-price__price"><?php echo $fields['limitPrice']; ?></p>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                <?php endif; ?>

                <?php
                    // 体験ダイビングのデータを取得
                    $standard = SCF::get('standard');

                    // フィールドの中身が空でない要素を抽出
                    $filteredStandard = array_filter($standard, function($fields) {
                        // standardMenuとstandardPriceが空でないかチェック
                        return !empty($fields['standardMenu']) && !empty($fields['standardPrice']);
                    });

                    // フィルタリングされた結果に要素がある場合のみ表示
                    if (is_array($filteredStandard) && count($filteredStandard) > 0):
                ?>
                    <div class="page-price__table-item">
                        <div class="page-price__head">
                            <h2 class="page-price__title"><span>定番ギフト</span></h2>
                        </div>
                        <div class="page-price__body">
                            <?php foreach ($filteredStandard as $fields): ?>
                                <div class="page-price__body-item">
                                    <h3 class="page-price__course"><?php echo $fields['standardMenu']; ?></h3>
                                    <p class="page-price__price"><?php echo $fields['standardPrice']; ?></p>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <?php
                    // ファンダイビングのデータを取得
                    $homeBal = SCF::get('homeBal');

                    // フィールドの中身が空でない要素を抽出
                    $filteredHomeBal = array_filter($homeBal, function($fields) {
                        // funMenuとfunPriceが空でないかチェック
                        return !empty($fields['homeBalMenu']) && !empty($fields['homeBalPrice']);
                    });

                    // フィルタリングされた結果に要素がある場合のみ表示
                    if (is_array($filteredHomeBal) && count($filteredHomeBal) > 0):
                ?>
                    <div class="page-price__table-item">
                        <div class="page-price__head">
                            <h2 class="page-price__title"><span>家のみバルギフト</span></h2>
                        </div>
                        <div class="page-price__body">
                            <?php foreach ($filteredHomeBal as $fields): ?>
                                <div class="page-price__body-item">
                                    <h3 class="page-price__course"><?php echo $fields['homeBalMenu']; ?></h3>
                                    <p class="page-price__price"><?php echo $fields['homeBalPrice']; ?></p>
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
                            <h2 class="page-price__title"><span>スペシャルギフト</span></h2>
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
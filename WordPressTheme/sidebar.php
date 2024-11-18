<aside class="two-columns__aside aside">
    <div class="aside__inner">
        <!-- 人気記事 -->
        <section class="aside-blog-ranking">
            <div class="aside-blog-ranking__heading">
                <div class="aside-heading">
                <h2 class="aside-heading__title">人気記事</h2>
                </div>
            </div>
            <div class="aside-blog-ranking__blog-cards blog-cards blog-cards--1col">
            <?php
                $loopcounter = 0;
                $args = array(
                'post_type' => 'post',
                'meta_key'=> 'post_views_count',
                'orderby' => 'meta_value_num',
                'order' => 'DESC',
                'posts_per_page' => 3
                );
                $the_query = new WP_Query($args);
                if($the_query->have_posts()):
                while($the_query->have_posts()): $the_query->the_post();
                $loopcounter++;
            ?>
                <a href="<?php the_permalink(); ?>" class="blog-cards__item blog-card">
                    <div class="blog-card__wrapper">
                        <figure class="blog-card__img blog-card__img--ranking">
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>のアイキャッチ画像"/>
                        </figure>
                        <div class="blog-card__body">
                            <time class="blog-card__date blog-card__date--ranking" datetime="<?php the_time('c'); ?>"><?php the_time('Y/m/d'); ?></time>
                            <h3 class="blog-card__title blog-card__title--ranking"><?php the_title(); ?></h3>
                        </div>
                    </div>
                </a>
            <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </section>

        <!-- 口コミ -->
        <section class="aside-review-rating">
            <div class="aside-review-rating__heading">
                <div class="aside-heading">
                    <h2 class="aside-heading__title">口コミ</h2>
                </div>
            </div>
            <?php
                //$argsのプロパティを変えていく
                $args = array(
                    'post_type' => 'voice',
                    'posts_per_page' => 1,
                    'no_found_rows' => true,  //ページャーを使う時はfalseに。
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post();
            ?>
            <div class="aside-review-rating__voice-card voice-card voice-card--aside">
                <figure class="voice-card__img voice-card__img--rating js-colorbox">
                <?php if(get_the_post_thumbnail()): ?>
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像"/>
                    <?php else: ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="画像がありません">
                    <?php endif; ?>
                </figure>
                <div class="voice-card__wrapper">
                    <?php
                        $voiceMeta = get_field('voice_meta');
                        $voiceAge = $voiceMeta['voice_age'];
                        $voiceGender = $voiceMeta['voice_gender'];
                    ?>
                    <div class="voice-card__meta voice-card__meta--rating">
                        <p class="voice-card__age voice-card__age--rating"><?php echo $voiceAge; ?>(<?php echo $voiceGender[0]; ?>)</p>
                    </div>
                <h3 class="voice-card__title voice-card__title--rating"><?php the_title(); ?></h3>
                </div>
                <div class="aside-review-rating__btn">
                    <a href="<?php echo get_post_type_archive_link('voice'); ?>" class="button"><span>View more</span></a>
                </div>
            </div>
            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </section>

        <!-- キャンペーン -->
        <section class="aside-campaign">
            <div class="aside-campaign__heading">
                <div class="aside-heading">
                    <h2 class="aside-heading__title">キャンペーン</h2>
                </div>
            </div>
            <div class="aside-campaign__cards campaign-cards">
            <?php
                //$argsのプロパティを変えていく
                $args = array(
                    'post_type' => 'campaign',
                    'posts_per_page' => 2,
                    'no_found_rows' => true,  //ページャーを使う時はfalseに。
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                while ($the_query->have_posts()) : $the_query->the_post(); ?>
                <!-- ループ開始 -->
                <div class="campaign-cards__card campaign-card">
                    <figure class="campaign-card__img campaign-card__img--aside">
                    <?php if(get_the_post_thumbnail()): ?>
                        <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>の画像"/>
                        <?php else: ?>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/common/noimage.png" alt="画像がありません">
                        <?php endif; ?>
                    </figure>
                    <div class="campaign-card__body campaign-card__body--aside">
                        <h3 class="campaign-card__title campaign-card__title--aside"><?php the_title(); ?></h3>
                        <p class="campaign-card__detail campaign-card__detail--aside">全部コミコミ(お一人様)</p>
                        <?php
                            $campaignPrices = get_field('campaign_prices');
                        ?>
                        <div class="campaign-card__prices campaign-card__prices--aside">
                            <p class="campaign-card__price-cost campaign-card__price-cost--aside">&yen;<?php echo number_format($campaignPrices['price-cost']); ?></p>
                            <p class="campaign-card__price-low campaign-card__price-low--aside">&yen;<?php echo number_format($campaignPrices['price-low']); ?></p>
                        </div>
                    </div>
                </div>
                <!-- ループ終了 -->
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
            <div class="aside-campaign__btn">
                <a href="<?php echo get_post_type_archive_link('campaign'); ?>" class="button"><span>View more</span></a>
            </div>
        </section>

        <!-- アーカイブ -->
        <section class="aside-blog-archive">
            <div class="aside-blog-archive__heading">
                <div class="aside-heading">
                    <h2 class="aside-heading__title">アーカイブ</h2>
                </div>
            </div>
            <div class="aside-blog-archive__blog-archive-accordion">
                <div class="blog-archive-accordion">
                    <div class="blog-archive-accordion__container">
                        <div class="blog-archive-accordion">
                            <?php
                            global $wpdb;
                            // 年ごとのデータを取得
                            $years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
                            // 最初の年だけ "is-open" クラスを追加するためのフラグ
                            $first_year = true;
                            if ($years) {
                                foreach ($years as $year) {
                                    // 各年に対応する月を取得
                                    $months = $wpdb->get_col(
                                        $wpdb->prepare(
                                            "SELECT DISTINCT MONTH(post_date)
                                            FROM $wpdb->posts
                                            WHERE post_status = 'publish'
                                            AND post_type = 'post'
                                            AND YEAR(post_date) = %d
                                            ORDER BY post_date DESC",
                                            $year
                                        )
                                    );
                            ?>
                            <div class="blog-archive-accordion__item">
                                <!-- 年のタイトル。最初の年にだけ "is-open" クラスを付与 -->
                                <h3 class="blog-archive-accordion__title js-blog-archive-accordion__title<?php echo $first_year ? ' is-open' : ''; ?>"><?php echo $year; ?></h3>
                                <?php if (!empty($months)) : ?>
                                    <ul class="blog-archive-accordion__content<?php echo $first_year ? '' : ' is-closed'; ?>">
                                        <?php foreach ($months as $month) : ?>
                                            <li>
                                                <a href="<?php echo get_month_link($year, $month); ?>" class="blog-archive-accordion__title">
                                                    <?php echo date_i18n('F', mktime(0, 0, 0, $month, 1, $year)); // 月の名前を表示 ?>
                                                </a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php else : ?>
                                    投稿がない場合のメッセージ
                                    <p>表示する投稿がありません。</p>
                                <?php endif; ?>
                            </div>
                            <?php
                                    // 一度ループが終わったら $first_year を false にして、次の年には "is-open" を付与しない
                                    $first_year = false;
                                }
                            } else {
                                echo '<p>表示する投稿がありません。</p>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</aside>
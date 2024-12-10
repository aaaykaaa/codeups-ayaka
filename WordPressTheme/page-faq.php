<?php get_header(); ?>
<main>
    <div class="page-mv sub-page-mv">
        <div class="page-mv__inner">
            <div class="page-mv__text-box">
            <h1 class="page-mv__title"><span>faq</span></h1>
            </div>
            <picture class="page-mv__img">
            <source
                media="(min-width: 768px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv2.jpg"
            />
            <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/pageMv-sp2.jpg"
                alt="よくある質問ページのメイン画像"
            />
            </picture>
        </div>
    </div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

    <section class="page-faq sub-faq sub">
        <div class="page-faq__inner inner">
            <div class="page-faq__content faq-items">
            <?php
                $faq = SCF::get('faq');
                foreach ($faq as $fields):
                    echo (empty($fields['question']) || empty($fields['answer'])) ? '' : '
                        <div class="faq-items__item faq-item">
                            <h2 class="faq-item__title js-nav-open">' . $fields['question'] . '</h2>
                            <nav>
                                <ul>
                                    <li class="faq-item__text">' . $fields['answer'] . '</li>
                                </ul>
                            </nav>
                        </div>
                    ';
                endforeach;
            ?>
            </div>
        </div>
    </section>

<?php get_footer(); ?>
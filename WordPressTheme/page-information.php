<?php get_header(); ?>
<main>
    <div class="page-mv sub-page-mv">
    <div class="page-mv__inner">
        <div class="page-mv__text-box">
        <h1 class="page-mv__title">information</h1>
        </div>
        <picture class="page-mv__img">
        <source
            media="(min-width: 768px)"
            srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-information_mv.jpeg"
        />
        <img
            src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-information_mv-sp.jpeg"
            alt="informationpageのmain画像"
        />
        </picture>
    </div>
    </div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

    <section class="page-information sub-information sub">
    <div class="page-information__inner inner">
        <ul class="page-information__tab information-tab">
        <li class="information-tab__item tab1 js-tab-menu is-open" data-tab="license">
            <a href="#tab1" class="information-tab__button information-tab__button--tab1"><span>ライセンス<br class="u-mobile" />講習</span></a>
        </li>
        <li class="information-tab__item tab2 js-tab-menu"  data-tab="fanDiving">
            <a href="#tab2" class="information-tab__button information-tab__button--p18 information-tab__button--tab2"><span>ファン<br class="u-mobile" />ダイビング</span></a>
        </li>
        <li class="information-tab__item tab3 js-tab-menu" data-tab="experienceDiving">
            <a href="#tab3" class="information-tab__button information-tab__button--tab3"><span>体験<br class="u-mobile" />ダイビング</span></a>
        </li>
        </ul>
        <div class="page-information__items">
        <div class="page-information__item information-item information-item--flex-rev js-tab-content is-open" id="tab1" data-tab="license">
            <figure class="information-item__img information-item__img--page js-colorbox">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-information1.jpeg" alt="ライセンス講習の画像"/>
            </figure>
            <div class="information-item__body information-item__body--page">
            <h2 class="information-item__title information-item__title--page">ライセンス講習</h2>
            <p class="information-item__text">
                泳げない人も、ちょっと水が苦手な人も、ダイビングを「安全に」楽しんでいただけるよう、スタッフがサポートいたします！スキューバダイビングを楽しむためには最低限の知識とスキルが要求されます。知識やスキルと言ってもそんなに難しい事ではなく、安全に楽しむ事を目的としたものです。プロダイバーの指導のもと知識とスキルを習得しCカードを取得して、ダイバーになろう！
            </p>
            </div>
        </div>
        <div class="page-information__item information-item information-item--flex-rev js-tab-content" id="tab2" data-tab="fanDiving">
            <figure class="information-item__img information-item__img--page js-colorbox">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-information2.jpeg" alt="ファンダイビングの画像"/>
            </figure>
            <div class="information-item__body information-item__body--page">
            <h2 class="information-item__title">ファンダイビング</h2>
            <p class="information-item__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
            </p>
            </div>
        </div>
        <div class="page-information__item information-item information-item--flex-rev js-tab-content" id="tab3" data-tab="experienceDiving">
            <figure class="information-item__img information-item__img--page js-colorbox">
            <img src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-information3.jpeg" alt="体験ダイビングの画像"/>
            </figure>
            <div class="information-item__body information-item__body--page">
            <h2 class="information-item__title">体験ダイビング</h2>
            <p class="information-item__text">
                ブランクダイバー、ライセンスを取り立ての方も安心！沖縄本島を代表する「青の洞窟」（真栄田岬）やケラマ諸島などメジャーなポイントはモチロンのこと、最北端「辺戸岬」や最南端の「大渡海岸」等もご用意！
            </p>
            </div>
        </div>
        </div>
    </div>
    </section>
<?php get_footer(); ?>
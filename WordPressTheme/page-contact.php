<?php get_header(); ?>
<main>
    <div class="page-mv sub-page-mv">
        <div class="page-mv__inner">
            <div class="page-mv__text-box">
            <h1 class="page-mv__title">contact</h1>
            </div>
            <picture class="page-mv__img">
            <source
                media="(min-width: 768px)"
                srcset="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-contact_mv.jpeg"
            />
            <img
                src="<?php echo get_theme_file_uri(); ?>/assets/images/common/page-contact_mv-sp.jpeg"
                alt="contactpageのmain画像"
            />
            </picture>
        </div>
    </div>

<!-- パンくず -->
<?php get_template_part('parts/breadcrumb'); ?>

    <div class="page-contact sub">
        <div class="page-contact__inner inner">
            <div class="page-contact__error-message">
            <p>
                ※必須項目が入力されていません。<br
                class="u-mobile"
                />入力してください。
            </p>
            </div>
            <form
            action="/"
            class="page-contact__form contact-form js-contact-form mt40"
            method="post"
            >
            <div class="contact-form__item">
                <div class="contact-form__head"><span class="must">お名前</span></div>
                <div class="contact-form__data">
                <input
                    type="text"
                    name="text"
                    placeholder="沖縄　太郎"
                    required
                />
                </div>
            </div>
            <div class="contact-form__item">
                <div class="contact-form__head">
                <span class="must">メールアドレス</span>
                </div>
                <div class="contact-form__data">
                <input type="email" placeholder="aaa000@ggmail.com" />
                </div>
            </div>
            <div class="contact-form__item">
                <div class="contact-form__head">
                <span class="must">電話番号</span>
                </div>
                <div class="contact-form__data">
                <input type="tel" placeholder="000-0000-0000" />
                </div>
            </div>
            <div class="contact-form__item">
                <div class="contact-form__head">
                <span class="must">お問合せ項目</span>
                </div>
                <div class="contact-form__data contact-form__checkbox-wrap">
                <label for="checkbox1">
                    <input type="checkbox" id="checkbox1" required />
                    <span>ダイビング講習について</span>
                </label>
                <label for="checkbox2">
                    <input type="checkbox" id="checkbox2" required />
                    <span>ファンデイビングについて</span>
                </label>
                <label for="checkbox3">
                    <input type="checkbox" id="checkbox3" required />
                    <span>体験ダイビングについて</span>
                </label>
                </div>
            </div>
            <div class="contact-form__item">
                <div class="contact-form__head"><span>キャンペーン</span></div>
                <div class="contact-form__data">
                <div class="contact-form__select-wrap">
                    <select>
                    <option disabled selected>キャンペーン内容を選択</option>
                    <option>ライセンス取得</option>
                    <option>貸切体験ダイビング</option>
                    <option>ナイトダイビング</option>
                    <option>貸切ファンダイビング</option>
                    </select>
                </div>
                </div>
            </div>
            <div class="contact-form__item">
                <div class="contact-form__head">
                <span class="must">お問合せ内容</span>
                </div>
                <div class="contact-form__data"><textarea required></textarea></div>
            </div>
            <div class="contact-form__item contact-form__item--privacy">
                <!-- <div class="contact-form__head"><span class="must">お問い合わせ項目</span></div> -->
                <div class="contact-form__data contact-form__checkbox-privacy">
                <label for="privacy">
                    <input type="checkbox" id="privacy" />
                    <span>個人情報の取り扱いについて同意のうえ送信します。</span>
                </label>
                </div>
            </div>
            <div class="contact-form__btn">
                <button type="submit" class="button button--send"><span>Send</span></button>
            </div>
            </form>
        </div>
    </div>
</main>
<?php get_footer(); ?>
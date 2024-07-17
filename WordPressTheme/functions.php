<?php
function my_theme_enqueue_styles_scripts() {
    // Google Fonts
    wp_enqueue_style('google-font-gotu', 'https://fonts.googleapis.com/css2?family=Gotu&display=swap', array(), null);
    wp_enqueue_style('google-font-lato', 'https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap', array(), null);
    wp_enqueue_style('google-font-noto-sans-jp', 'https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&display=swap', array(), null);

    // Swiper CSS
    wp_enqueue_style('swiper-css', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), null);

    // Theme CSS
    wp_enqueue_style('style-css', get_theme_file_uri('/assets/css/style.css'), array(), null);

    // jQuery
    wp_enqueue_script('jquery', 'https://code.jquery.com/jquery-3.6.0.js', array(), null, true);

    // Swiper JS
    wp_enqueue_script('swiper-js', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array(), null, true);

    // Inview
    wp_enqueue_script('inview', get_theme_file_uri('/assets/js/jquery.inview.min.js'), array(), null, true);

    // jQuery Validate
    wp_enqueue_script('jquery-validate', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js', array(), null, true);
    wp_enqueue_script('jquery-validate-additional-methods', 'https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/additional-methods.min.js', array(), null, true);

    // Custom JS
    wp_enqueue_script('custom-script', get_theme_file_uri('/assets/js/script.js'), array(), null, true);
}

add_action('wp_enqueue_scripts', 'my_theme_enqueue_styles_scripts');

function my_setup() {
	add_theme_support( 'post-thumbnails' ); /* アイキャッチ */
	add_theme_support( 'automatic-feed-links' ); /* RSSフィード */
	add_theme_support( 'title-tag' ); /* タイトルタグ自動生成 */
	add_theme_support(
		'html5',
		array( /* HTML5のタグで出力 */
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		)
	);
}
add_action( 'after_setup_theme', 'my_setup' );
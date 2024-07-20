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

function Change_menulabel() {
    global $menu;
    global $submenu;
    $name = 'ブログ';
    $menu[5][0] = $name;
    $submenu['edit.php'][5][0] = $name.'一覧';
    $submenu['edit.php'][10][0] = '新規'.$name.'追加';
    }
    function Change_objectlabel() {
    global $wp_post_types;
    $name = 'ブログ';
    $labels = &$wp_post_types['post']->labels;
    $labels->name = $name;
    $labels->singular_name = $name;
    $labels->add_new = _x('追加', $name);
    $labels->add_new_item = $name.'の新規追加';
    $labels->edit_item = $name.'の編集';
    $labels->new_item = '新規'.$name;
    $labels->view_item = $name.'を表示';
    $labels->search_items = $name.'を検索';
    $labels->not_found = $name.'が見つかりませんでした';
    $labels->not_found_in_trash = 'ゴミ箱に'.$name.'は見つかりませんでした';
    }
add_action( 'init', 'Change_objectlabel' );
add_action( 'admin_menu', 'Change_menulabel' );
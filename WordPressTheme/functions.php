<?php

//////////////////////////////////////////////////
// header.php
//////////////////////////////////////////////////
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

//////////////////////////////////////////////////
// ALL
//////////////////////////////////////////////////

// アイキャッチ画像の指定
function my_setup() {
    add_theme_support( 'post-thumbnails' );       // アイキャッチ
    add_theme_support( 'automatic-feed-links' );  // RSSフィード
    add_theme_support( 'title-tag' );             // タイトルタグ自動生成
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

//////////////////////////////////////////////////
// home.php、single.php、date.php
//////////////////////////////////////////////////

// 投稿の名前を「ブログ」に変更する
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

// ブログの「カテゴリー」と「タグ」の非表示
function my_unregister_taxonomies() {
    global $wp_taxonomies;
    // 「カテゴリー」の非表示
    if (!empty($wp_taxonomies['category']->object_type)) {
        foreach ($wp_taxonomies['category']->object_type as $i => $object_type) {
            if ($object_type == 'post') {
                unset($wp_taxonomies['category']->object_type[$i]);
            }
        }
    }
    // 「タグ」の非表示
    if (!empty($wp_taxonomies['post_tag']->object_type)) {
        foreach ($wp_taxonomies['post_tag']->object_type as $i => $object_type) {
            if ($object_type == 'post') {
                unset($wp_taxonomies['post_tag']->object_type[$i]);
            }
        }
    }
    return true;
}
add_action('init', 'my_unregister_taxonomies');

//アーカイブの表示件数変更
function change_posts_per_page($query) {
    if ( is_admin() || ! $query->is_main_query() )
        return;
    // カスタム投稿タイプ 'campaign' の指定
    if ( $query->is_archive('campaign') ) {       //カスタム投稿タイプを指定
        $query->set( 'posts_per_page', '4' );     //表示件数を指定
    }
    // カスタム投稿タイプ 'voice' の指定
    if ( $query->is_post_type_archive('voice') ) {//カスタム投稿タイプを指定
      $query->set( 'posts_per_page', '6' );       //表示件数を指定
    }
}
add_action( 'pre_get_posts', 'change_posts_per_page' );

//////////////////////////////////////////////////
// sidebar.php
//////////////////////////////////////////////////

// 人気記事を表示させるための記述
function is_bot() {                               //クローラーのアクセス判別
    $ua = $_SERVER['HTTP_USER_AGENT'];
    $bot = array(
        "googlebot",
        "msnbot",
        "yahoo"
    );
    foreach( $bot as $bot ) {
        if (stripos( $ua, $bot ) !== false){
            return true;
        }
    }
    return false;
}

function set_post_views() {                       //アクセス数を保存
    if(!is_user_logged_in() && !is_bot()) {
        if(is_single()) {
        $post_id = get_the_ID();
        $count_key = 'post_views_count';
        $count = get_post_meta($post_id, $count_key, true);
        if(empty($count)) {
            delete_post_meta($post_id, $count_key);
            add_post_meta($post_id, $count_key, 1);
            } else {
            $count = $count + 1;
            update_post_meta($post_id, $count_key, $count);
            }
        }
    }
}
add_action('wp_head', 'set_post_views');

// 管理画面のカラムを追加(view数)
function manage_posts_columns($columns) {
    $columns['post_views_count'] = 'view数';
    $columns['thumbnail'] = 'サムネイル';
    return $columns;
}
add_filter('manage_posts_columns', 'manage_posts_columns');
    function add_column($column_name, $post_id) { // アクセス数を出力
    if ($column_name === 'post_views_count') {    // View数呼び出し
        $pv = get_post_meta($post_id, 'post_views_count', true);
    }
    if ($column_name === 'thumbnail') {           // サムネイル呼び出し
        $thumb = get_the_post_thumbnail($post_id, array(100, 100), 'thumbnail');
    }
    if (isset($pv) && $pv) {                      // ない場合は「なし」を表示する
        echo attribute_escape($pv);
    } elseif (isset($thumb) && $thumb) {
        echo $thumb;
    } else {
        echo __('None');
    }
}
add_action('manage_posts_custom_column', 'add_column', 10, 2);

//////////////////////////////////////////////////
// page-contact.php
//////////////////////////////////////////////////

// Contact Form 7で自動挿入されるPタグ、brタグを削除
add_filter('wpcf7_autop_or_not', 'wpcf7_autop_return_false');
function wpcf7_autop_return_false() {
  return false;
}

//Contact Form 7 セレクトボックスの選択肢をカスタム投稿のタイトルから自動生成
//関数の作成
function job_selectlist($tag, $unused){
    //セレクトボックスの名前が'select-job'かどうか
    if ($tag['name'] != 'campaign-1') {
        return $tag;
    }

    //get_posts()でセレクトボックスの中身を作成する
    $args = array(                                //クエリの作成
        'post_type' => 'campaign',                //カスタム投稿タイプを指定
        'posts_per_page' => -1,                   // すべての投稿を取得
        'orderby' => 'title',
        'order' => 'ASC',                         //並び順⇒セレクトボックス内の表示順
        'post_status' => 'publish'                //公開済みのページのみ取得
    );
    $job_posts = get_posts($args);                //クエリをget_posts()に入れる
    if (!$job_posts) {                            //クエリがなければ戻す
        return $tag;
    }
    foreach ($job_posts as $job_post) {           //セレクトボックスにforeachで入れる
        $tag['raw_values'][] = $job_post->post_title;
        $tag['values'][] = $job_post->post_title;
        $tag['labels'][] = $job_post->post_title;
    }

    return $tag;
}
add_filter('wpcf7_form_tag', 'job_selectlist', 10, 2);


//////////////////////////////////////////////////
// page-thanks.php
//////////////////////////////////////////////////

// Contact Form 7の送信ボタンをクリックした後のサンクスページへの遷移先設定
add_action( 'wp_footer', 'add_origin_thanks_page' );
function add_origin_thanks_page() {
    $thanks = home_url('/thanks/');
    echo <<< EOC
        <script>
        var thanksPage = {
            163: '{$thanks}',
        };
        document.addEventListener( 'wpcf7mailsent', function( event ) {
            location = thanksPage[event.detail.contactFormId];
        }, false );
        </script>
    EOC;
}

//////////////////////////////////////////////////
// 管理画面
//////////////////////////////////////////////////

// 固定ページのエディターを非表示にする
function my_custom_init() {
    remove_post_type_support('page', 'editor');
  }
  add_action('init', 'my_custom_init');

  // 管理画面のメニューの並び順をカスタマイズ
function customize_menu_order($menu_order) {
    if (!$menu_order) return true;
    return array(
        'index.php',                              // ダッシュボード
        'edit.php?post_type=campaign',            // キャンペーン
        'edit.php',                               // ブログ（投稿）
        'edit.php?post_type=voice',               // お客様の声
        'edit.php?post_type=page',                // 固定ページ
        'wpcf7',                                  // お問い合わせ
        'upload.php',                             // メディア
        'themes.php',                             // 外観
        'plugins.php',                            // プラグイン
        'users.php',                              // ユーザー
        'tools.php',                              // ツール
        'options-general.php',                    // 設定
        'ai1wm_export',                           // All-in-One WP Migration
        'edit.php?post_type=scf',                 // Smart Custom Fields（カスタムフィールドの例）
        'edit.php?post_type=acf',                 // ACF
        'admin.php?page=seo-pack',                // SEO PACK
        'admin.php?page=cptui_main_menu',         // CPT UI
    );
}
add_filter('custom_menu_order', '__return_true');
add_filter('menu_order', 'customize_menu_order');

// 管理画面のメニューから非表示にする
function remove_menus() {
    remove_menu_page ('edit-comments.php'); // コメント
    remove_menu_page ('users.php'); // ユーザー
    remove_menu_page ('tools.php'); // ツール
}
add_action( 'admin_menu', 'remove_menus' );

?>
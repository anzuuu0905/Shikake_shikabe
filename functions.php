<?php
	
/* ================================
	url変数に
================================ */
$info = [
    'home_url' => home_url(),
    'themes' => "/wp-content/themes/shikabe2022",
    'stylesheet_url' => get_stylesheet_directory_uri(),
    'host' => $_SERVER['HTTP_HOST']
];

/* =========================================
	WordPress本体のjquery.jsを読み込まない
========================================= */
function add_files() {
	wp_deregister_script('jquery');
 
	// jQueryの読み込み
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/1.12.3/jquery.min.js', "", "", false );
}
add_action( 'wp_enqueue_scripts', 'add_files' );


/* ================================
	画像パス置き換え
================================ */
function replacement_content($content){
  $replace = array(
  '../../assets/' => '/wp-content/themes/shikabe2022/assets/',
  '../assets/' => '/wp-content/themes/shikabe2022/assets/'
  );
  $content = str_replace(array_keys($replace), $replace, $content);
  return $content;
}
add_filter('the_content', 'replacement_content');

/* ================================
	自動挿入停止
================================ */
//add_action('init', function() {
//remove_filter('the_excerpt', 'wpautop');
//remove_filter('the_content', 'wpautop');
//});
//add_filter('tiny_mce_before_init', function($init) {
//$init['wpautop'] = false;
//$init['apply_source_formatting'] = true;
//return $init;
//});

/* ================================
	pタグ、brタグの自動挿入制御
================================ */
remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );

function custom_tiny_mce_before_init( $init_array ) {
  global $allowedposttags;

  $init_array['valid_elements'] = '*[*]'; //すべてのタグを許可(削除されないように)
  $init_array['extended_valid_elements'] = '*[*]'; //すべてのタグを許可(削除されないように)
  $init_array['valid_children'] = '+a[' . implode( '|', array_keys( $allowedposttags ) ) . ']'; //aタグ内にすべてのタグを入れられるように
  $init_array['indent'] = true; //インデントを有効に
  $init_array['wpautop'] = false; //テキストやインライン要素を自動的にpタグで囲む機能を無効に
  $init_array['force_p_newlines'] = false; //改行したらpタグを挿入する機能を無効に

  return $init_array;
}
add_filter( 'tiny_mce_before_init', 'custom_tiny_mce_before_init' );

add_action('admin_init',function(){
    add_editor_style();
});

/* ================================
	画像サイズ自動挿入禁止
================================ */
add_filter( 'wp_img_tag_add_width_and_height_attr', '__return_false' );

/* ================================
	アイキャッチ画像
================================ */
add_theme_support( 'post-thumbnails', array( 'post','archives' ));

/* ================================
	新着アイコン
================================ */
get_template_part('functions/new_icon');

/* ================================
	新着アイコン
================================ */
get_template_part('functions/make_comment');

/* ================================
	タグアーカイブ
================================ */
//WPタグのアーカイブページにカスタム投稿タイプも表示させる
function add_post_tag_archive( $wp_query ) {
  if ($wp_query->is_main_query() && $wp_query->is_tag()) {
    $wp_query->set( 'post_type', array('post','archives'));
  }
}
add_action( 'pre_get_posts', 'add_post_tag_archive' , 10 , 1);

/* ================================
	投稿者アーカイブ
================================ */
function cpt_pre_get_posts($query) {
  if(is_admin() || !$query->is_main_query()) {
    return;
  }
  if($query->is_author()) {
    $query->set('post_type', array('post', 'archives'));
  }
}
add_action('pre_get_posts', 'cpt_pre_get_posts');

/* ================================
	表示件数
================================ */
function mobile_pre_get_posts( $query ) {
    if ( ! is_admin() && wp_is_mobile() && $query->is_main_query() ) {
        $query->set( 'posts_per_page', 8 );
    }
}
add_action( 'pre_get_posts', 'mobile_pre_get_posts' );

/* ================================
	エディタ用css
================================ */
add_editor_style('editor.css');


/* ================================
	wp-captionのカスタマイズ
================================ */
add_shortcode('caption', 'custom_caption_shortcode');

function custom_caption_shortcode($attr, $content = null) {
    if ( ! isset( $attr['caption'] ) ) {
        if ( preg_match( '#((?:<a [^>]+>s*)?<img [^>]+>(?:s*</a>)?)(.*)#is', $content, $matches ) ) {
            $content = $matches[1];
            $attr['caption'] = trim( $matches[2] );
        }
    }

    $output = apply_filters('img_caption_shortcode', '', $attr, $content);
    if ( $output != '' )
        return $output;

    extract(shortcode_atts(array(
        'id'    => '',
        'align' => 'alignnone',
        'width' => '',
        'caption' => ''
    ), $attr, 'caption'));

    if ( 1 > (int) $width || empty($caption) )
        return $content;

    if ( $id ) $id = 'id="' . esc_attr($id) . '" ';

    return '<div ' . $id . 'class="wp-caption ' . esc_attr($align) . '">' . do_shortcode( $content ) . '<p class="wp-caption-text">' . $caption . '</p></div>';
}

/* ================================
	ダッシュボードカスタマイズ
================================ */
add_action( 'admin_menu', 'remove_menus' );
function remove_menus(){
    remove_menu_page( 'edit.php' ); //投稿メニュー
}

/* ================================
	プロフィール改行
================================ */
remove_filter('pre_user_description', 'wp_filter_kses');

/* ================================
	ログイン画面
================================ */
get_template_part('functions/login');

/* ================================
	 PHPの読み込み
================================ */
function my_php_Include($params = array()) {
extract(shortcode_atts(array('file' => 'default'), $params));
ob_start();
include(STYLESHEETPATH . "/$file.php");
return ob_get_clean();
}
add_shortcode('call_php', 'my_php_Include');


/* ================================
	キーワードが空欄の場合
================================ */
function set_redirect_template(){
  if (isset($_GET['s']) && empty($_GET['s'])) {
    include(TEMPLATEPATH . '/none.php');
  exit;
  }
}
add_action('template_redirect', 'set_redirect_template');


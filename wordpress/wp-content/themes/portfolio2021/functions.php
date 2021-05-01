<?php
/**
 * Functions
 *
 * @package WordPress
 */

  add_theme_support( 'post-thumbnails' );

// add_action('init', function(){
// register_post_type('news', [    // 投稿タイプ名(post_type)の定義
// 'label' =>  '新着情報',        // 管理画面での表示名
// 'public' => true,            // 管理画面で表示するかどうか（初期設定はfalseなので必ず記載）
// 'menu_position' => 5         // 管理画面での表示位置(5は元々ある投稿の下)
// ]);
// });

/**
 * CSS読み込み
 *
 * @return void
 */
function add_stylesheet() {
	wp_enqueue_style( 'font-en', 'https://fonts.googleapis.com/css2?family=Roboto&display=swap', array(), '1.0', false );
	wp_enqueue_style( 'style', get_template_directory_uri() . '/assets/css/style.css', array(), '1.0', false );
	wp_enqueue_style( 'slick-css', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css', array(), '1.0', false );
	wp_enqueue_style( 'fontawesome', 'https://use.fontawesome.com/releases/v5.13.0/css/all.css', array(), '1.0', false );
}
add_action( 'wp_enqueue_scripts', 'add_stylesheet' );

/**
 * JS読込
 *
 * @return void
 */
function add_script() {
	wp_enqueue_script( 'google-manager', 'https://www.googletagmanager.com/gtag/js?id=G-8291HZ1PTQ', array(), '1.0', false );
	wp_enqueue_script( 'jQuery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '1.0', true );
	wp_enqueue_script( 'swiper-js', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/5.4.5/js/swiper.min.js', array(), '1.0', true );
	wp_enqueue_script( 'slick-js', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js', array(), '1.0', true );
	wp_enqueue_script( 'lazysizes', 'https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.0/lazysizes.min.js', array(), '1.0', true );
	wp_enqueue_script( 'theme-common', get_template_directory_uri() . '/assets/js/common.js', array(), '1.0', true );
	wp_enqueue_script( 'gtag', get_template_directory_uri() . '/assets/js/gtag.js', array(), '1.0', false );
}
add_action( 'wp_enqueue_scripts', 'add_script' );

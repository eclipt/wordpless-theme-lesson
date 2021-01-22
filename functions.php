<?php 
function sakura_theme_setup(){
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'sakura_theme_setup');

add_theme_support('post-thumbnails');
add_image_size( 'category-thumb', 600, 9999 ); 
// スタイルシートのリンクを取得する、引数にpc-cssという名前、
function sakura_theme_link() {
    wp_enqueue_style ('pc-css', get_template_directory_uri() . '/css/style_pc/css');
// wp_enqueue_script関数Java scriptを呼び出す時に使う
    wp_enqueue_script('common', get_template_directory_uri() . '/js/common.js', array(),'1.0.0', true );
}
// アクションフック,wp_enqueue_script関数を使う際に一緒にsakura_theme_linkという関数を呼び出す
add_action('wp_enque_scripts', 'sakura_theme_link');
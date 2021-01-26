<?php 
function sakura_theme_setup(){
    add_theme_support('post-thumbnails');

}

add_action('after_setup_theme', 'sakura_theme_setup');

add_theme_support('post-thumbnails');
add_image_size( 'category-thumb', 600, 9999 ); 

// スタイルシートのリンクを取得する、引数にpc-cssという名前、
function sakura_theme_link() {
    wp_enqueue_style ('common-css', get_template_directory_uri() . '/css/style.css');
    wp_enqueue_style ('sp-css', get_template_directory_uri() . '/css/style_sp/css', array(), '1.0.0', 'screen and ( max-width:768px)');
    wp_enqueue_style ('pc-css', get_template_directory_uri() . '/css/style_pc/css', array(), '1.0.0', 'screen and ( min-width:769px)');
    wp_enqueue_style ('drawer-css', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css');


// wp_enqueue_script関数Java scriptを呼び出す時に使う
    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(),'1.0.0', true );
    wp_enqueue_script('iscroll', 'https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js', array('jquery'),'1.0.0', true );
    wp_enqueue_script('drawer-css', 'https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js', array('jquery','iscroll'),'1.0.0', true );
    wp_enqueue_script('common', get_template_directory_uri() . '/js/common.js', array('jquery','iscroll','drawer-js'),'1.0.0', true );
}
// アクションフック,wp_enqueue_script関数を使う際に一緒にsakura_theme_linkという関数を呼び出す
add_action('wp_enque_scripts', 'sakura_theme_link');


function sakura_theme_init(){
     register_post_type(
         'daily', [
              "labels" => [
                  "name" => "日報"              
         ],
         "public" => true,
         "menu_icon" => 'dashicons-buddicons-activity',
         "menu_position" => 3,
         'show_in_rest' => true,
        ]);
}
add_action('init','sakura_theme_init');
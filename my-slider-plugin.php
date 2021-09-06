<?php
/*
Plugin Name: My Slider Plugin
Description:めざせスライダープラグイン！
Version: Ver.1.0
Author: 玄米
*/

$now_post_id = get_the_ID();
function title_list_func($now_post_id){
    return get_the_title();
}
add_shortcode('thetitle','title_list_func');

// 1.メニュー作成用のコードの関数をつくる
function my_slider_menu(){
    add_menu_page("テスト設定画面","My Slider", "manage_options","setting");
    add_submenu_page( "setting", "ひみつ", "scret", "manage_options", "setting", 'slider_setting_page'); 
}
//2.管理画面に追加するフック(読み込むタイミング、何の関数)
add_action('admin_menu','my_slider_menu');

//3.メニューのhtmlを表示する関数
function slider_setting_page(){
    echo '<div class="test">';
    echo '<p>てすと</p>';
    echo '</div>';
}


// Codexの例
// /** 上のテキストのステップ2 */
// add_action( 'admin_menu', 'my_plugin_menu' );

// /** ステップ1 */
// function my_plugin_menu() {
// 	add_options_page( 'My Plugin Options', 'My Plugin', 'manage_options', 'my-unique-identifier', 'my_plugin_options' );
// }

// /** ステップ3 */
// function my_plugin_options() {
// 	if ( !current_user_can( 'manage_options' ) )  {
// 		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
// 	}
// 	echo '<div class="wrap">';
// 	echo '<p>オプション用のフォームをここに表示する。</p>';
// 	echo '</div>';
// }
?>
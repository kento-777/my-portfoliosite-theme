<?php
function mytheme_setup() {
  add_theme_support( 'post-thumbnails' );
}
add_action( 'after_setup_theme', 'mytheme_setup' ); 
// メディアフォルダのパスを取得するショートコード
function getmediaurl($atts, $content = null) {
$wp_upload_dir = wp_upload_dir();
return $wp_upload_dir['baseurl'];
}
add_shortcode('mediaurl', 'getmediaurl');
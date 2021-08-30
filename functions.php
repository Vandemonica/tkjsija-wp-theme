<?php
add_theme_support('post-thumbnails');


function Truncate($text, $len){
  return mb_strimwidth(wp_strip_all_tags( $text ), 0, $len, '...');
}


function send_email(){
  $_SESSION['asd'] = 'asd';
}

do_action('wp_insert_post', 'send_email');
?>
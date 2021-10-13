<?php
// utilities
function Truncate($text, $len){
  return mb_strimwidth(wp_strip_all_tags( $text ), 0, $len, '...');
}






//  theme backend
add_theme_support('post-thumbnails');


function create_pages(){
  global $user_ID;
  
  if( get_page_by_title('about') == NULL ){
    $new_post = array(
        'post_title' => 'about',
        'post_content' => '',
        'post_status' => 'publish',
        'post_date' => date('Y-m-d H:i:s'),
        'post_author' => $user_ID,
        'post_type' => 'page'
    );
    $post_id = wp_insert_post($new_post);
  }
}




add_action('init','create_pages');
?>
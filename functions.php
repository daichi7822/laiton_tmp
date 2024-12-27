<?php
add_action( 'init', 'create_post_type' );

function create_post_type() {

  register_post_type(
    'gallery',
    array(
      'label' => 'ギャラリー',
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'menu_position' => 5,
      'supports' => array(
        'title',
        'editor',
        'thumbnail',
        'revisions',
      ),
    )
  );

}
// function sortpost($query) {
//   if(is_admin() || !$query->is_main_query()){
//     return;
//   }
//   if($query->is_post_type_archive('gallerys')){
//     echo 'alert('.json_encode($query).')';
//     $alert = "<script type='text/javascript'>console.log('');</script>";
//     //ASC:昇順、DESC:降順
//     $query->set('order', 'ASC');
//     //orderbyで何順に並べ替えるか指定
//     $query->set('orderby', 'rand');
//     return;
//   }
// }
// add_action('pre_get_posts', 'sortpost');

?>
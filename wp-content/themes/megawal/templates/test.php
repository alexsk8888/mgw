<?php

/*
Template Name: ЕУЫЕ
*/
get_header();
get_template_part( 'template-parts/content', 'page' );
?>

   <main  class="post-main">
   

   <?php

$fedb = carbon_get_post_meta( $post->ID, 'feedback' );
if(!empty($fedb)){

foreach ( $fedb as $item ): 
   echo ' 
    <li data-h4="'.$item['name'].'" data-p="<p>'.$item['feedback_text'].'</p> " data-img="'. wp_get_attachment_url( $item['image']) .'">
    ' .wp_get_attachment_image( $item['image'], 'post-thumbnail', true, array( 'alt' => $item['alt'])). '
    ' .wp_get_attachment_image( $item['image_viol'], 'post-thumbnail', true, array( 'alt' => $item['alt_viol'])). '

    </li>
     '; 
   endforeach;
}
             ?>
</main>
 <?php
 get_sidebar();
 get_footer();
 

 ?>

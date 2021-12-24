<?php


get_header();
echo '<div class="content_post_page"><h1>';
the_title();
echo '</h1>';
get_template_part( 'template-parts/content', 'page' );
$post_cb_field = carbon_get_post_meta( $post->ID, 'post_cb_field' );
echo '</div>';
if(!empty($post_cb_field)){
    echo ' <div class="post_page_image">
        <div class="images-boxes">';
$sert_counter=0;
    foreach ( $post_cb_field as $item ): 
        echo'
        <div class="images-box">
        <div class="close_sert"></div>'
      
         . wp_get_attachment_image($item['image'], 'post-thumbnail', '', array( 'class' => 'one_sert', 'alt' => $item['alt'])). ' 
         <div class="zoom">Увеличить</div>
         </div>';
     
    endforeach;
    echo'
    
    <div class="images_bcgr"></div></div></div>';
}


?>

 
</ul>
</main>
 <?php
 get_sidebar();
 get_footer();
 

 ?>


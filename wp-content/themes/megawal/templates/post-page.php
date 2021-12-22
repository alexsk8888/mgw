<?php

/*
Template Name: Post page
*/
get_header();
get_template_part( 'template-parts/content', 'page' );
?>

   <main  class="post-main">
   
<ul class="portfolio_list">
   <?php

$my_posts = get_posts( array(
	'numberposts' => 100,
	'category_name' => 'portfolio',
	'orderby'     => 'date',
	'order'       => 'DESC',
	'post_type'   => 'post',
	'suppress_filters' => true, 
) );

foreach( $my_posts as $post ){
	setup_postdata( $post );
    ?>
    <li class="post_box">
        <div class="title_post_box">
    <h2><a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2></div><div class="image_post_box">

    <a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
    <?php

    $post_cb_field = carbon_get_post_meta( $post->ID, 'post_cb_field' );
    if(!empty($post_cb_field)){

        foreach ( $post_cb_field as $item ): 
           
           echo wp_get_attachment_image($item['image'], array(279, 289), '', array( 'class' => 'one_sert', 'alt' => $item['alt']));
           break;
        endforeach;
    }

//    the_title();
//    the_content();
echo '</a></div></li>';
}

wp_reset_postdata(); // сброс

?>
</ul>
</main>
 <?php
 get_sidebar();
 get_footer();
 

 ?>


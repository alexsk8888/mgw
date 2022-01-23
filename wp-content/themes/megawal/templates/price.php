<?php

/*
Template Name: price page
*/
get_header();
?>
<main id="primary"  class="bro-ceninaofis">
<?php 
echo '<div class="content_post_page">
<div class="bro-container">
<h1 class ="price_post_page">';
the_title();
echo '</h1>


<div class="bro-card">';
 if ( have_posts() ) : ?>
    <?php
    /* Start the Loop */
    while ( have_posts() ) :
        the_post();


        get_template_part( 'template-parts/content', get_post_type() );

    endwhile;

    the_posts_navigation();

else :

    get_template_part( 'template-parts/content', 'none' );

endif;
?></div>
</div>
</main><!-- #main -->


<?php
function get_image_sizes( $unset_disabled = true ) {
	$wais = & $GLOBALS['_wp_additional_image_sizes'];

	$sizes = array();

	foreach ( get_intermediate_image_sizes() as $_size ) {
		if ( in_array( $_size, array('thumbnail', 'medium', 'medium_large', 'large') ) ) {
			$sizes[ $_size ] = array(
				'width'  => get_option( "{$_size}_size_w" ),
				'height' => get_option( "{$_size}_size_h" ),
				'crop'   => (bool) get_option( "{$_size}_crop" ),
			);
		}
		elseif ( isset( $wais[$_size] ) ) {
			$sizes[ $_size ] = array(
				'width'  => $wais[ $_size ]['width'],
				'height' => $wais[ $_size ]['height'],
				'crop'   => $wais[ $_size ]['crop'],
			);
		}

		// size registered, but has 0 width and height
		if( $unset_disabled && ($sizes[ $_size ]['width'] == 0) && ($sizes[ $_size ]['height'] == 0) )
			unset( $sizes[ $_size ] );
	}

	return $sizes;
}
echo "<pre>";
print_r( get_image_sizes() );
echo"</pre>";
get_sidebar();
get_footer();




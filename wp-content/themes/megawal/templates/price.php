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
get_sidebar();
get_footer();




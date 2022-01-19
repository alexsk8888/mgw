<?php

/*
Template Name: Vacansii page
*/
get_header();
?>
<main  class="bro-ceninaofis">
<?php 
echo '<div class="content_post_page">
<div class="bro-vacansii">
<div class="bro-container">
<h1>';
the_title();
echo '</h1>';

$vakants = carbon_get_post_meta( $post->ID, 'vakants' );
if(!empty($vakants)){

        foreach ( $vakants as $item ){ 
            echo'

                <div class="bro-vacansii-card">
                        <h2>' . $item['prof'].'</h2>
                        <div class="bro-line"></div>
                        <h3><img src="' . get_template_directory_uri() . '/assets/image/i1.png">Средняя з/п: <span>' . $item['zp'].'</span></h3>
                        <div class="bro-line"></div>
                        <h3>' . $item['prof'].' должен знать и уметь:</h3>
                        <ul>';
                        foreach ( $item['skils'] as $item2 ){ 
                            echo'
                            <li>' . $item2['skil'].'</li>';
                        }
                        echo'
                        </ul>
                        <div class="bro-line"></div>
                        <h3>* Дополнительную информацию узнаете при собеседовании</h3>
                        <div class="bro-form">
                        '. do_shortcode('[contact-form-7 id="794" title="Vacant"]') .'
                        </div>
                        </div>';
                    }
?>
</div>
</div>

</main><!-- #main -->
<?php
get_sidebar();
get_footer();





}
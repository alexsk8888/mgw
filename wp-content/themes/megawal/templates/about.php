
<?php

/*
Template Name: About
*/

 get_header();
  get_template_part( 'template-parts/content', 'page' );

?>      
<main class = "about_page">  
    <div class = "about_content">  
            <span class= "about_page_title">
                <h2>            
<?php
                    the_title();
?>   
                </h2>
            </span>
       <div class="first_about_block">
             <div class="ab_first_txt">
                 <p>
<?php
                echo carbon_get_post_meta($post->ID, 'about1_text');
?>
                </p>
            </div>
<?php
        echo wp_get_attachment_image(carbon_get_post_meta($post->ID, 'about1_image'), 'post-thumbnail', '', array( 'class' => 'abouut_img1', 'alt' => carbon_get_post_meta($post->ID, 'about1_alt')));
?>
       </div>

        <div class="second_about_block">
        
            <div class="ab_direction">
                <div class="direction_text">
                 
<?php
                echo '<h2>' .__("Сейчас в «МЕГАВОЛ» действуют следующие направления:").'</h2>';
?>
                     
<?php
                  echo   carbon_get_post_meta($post->ID, 'direction_about').'
                  
                </div>
            </div>'.
            wp_get_attachment_image(carbon_get_post_meta($post->ID, 'direction_image'), 'post-thumbnail', '', array( 'class' => 'ab_direction_img', 'alt' => carbon_get_post_meta($post->ID, 'direction_alt'))) ;
?>
        </div>

        <div class="third_about_block">
    
            <div class="family_text">
<?php
    echo 
                '<h2>'. __("«МЕГАВОЛ» – это одна большая семья.") .'</h2>
                <p>'.
                carbon_get_post_meta($post->ID, 'family_about') .
                '</p>
            </div>'.
            wp_get_attachment_image(carbon_get_post_meta($post->ID, 'family_image'), 'post-thumbnail', '', array( 'class' => 'family_img', 'alt' => carbon_get_post_meta($post->ID, 'family_alt')));
     
    echo

        '</div>
          <div class="fourd_about_block">
                    <div class="proizv_text">
                        <h2>'. __("Про производство").'</h2>
                        <p>'. carbon_get_post_meta($post->ID, 'proizv_about') .'</p>
                    </div>'.
                    wp_get_attachment_image(carbon_get_post_meta($post->ID, 'proizv_image'), 'post-thumbnail', '', array( 'class' => 'proizv_img', 'alt' => carbon_get_post_meta($post->ID, 'proizv_title'))) .
          '</div>';

    echo '
          <div class="fifth_mission_block"> 
                    <div class="about_mission_text"> 
                        <h2>'. __("Миссия компании:") . '</h2>
                        <p>'. carbon_get_post_meta($post->ID, 'mission_about') .'</p>
                    </div>'.
                    wp_get_attachment_image(carbon_get_post_meta($post->ID, 'mission_image'), 'post-thumbnail', '', array( 'class' => 'mission_img', 'alt' => carbon_get_post_meta($post->ID, 'mission_alt'))) .
          '</div>';

$comand = carbon_get_post_meta( $post->ID, 'command' );
if(!empty($comand)){

    echo ' <div class="comand">
                <span class= "about_page_title">
                    <h3 class="comand_h2">' . __('Наша команда') . '</h3>
                </span>
                <ul class="comand-boxes">';
                    $sert_counter=0;
                    foreach ( $comand as $item ): 
                        echo'
                            <li class="comand-box">'.
                                    wp_get_attachment_image($item['photo'], 'post-thumbnail', '', array( 'class' => 'people', 'alt' => $item['alt'])). 
                               '<h3>' . $item['name'].'</h3>
                                <h4>' . $item['prof'] .'</h4>
                            </li>';
                    endforeach;
    echo ' 
                 </ul>
            </div>';
}

    $sert = carbon_get_post_meta( $post->ID, 'sert' );
    if(!empty($sert)){
    echo '
            <div class="sertification">
                <h3 class="about_h2">' . __('Сертификаты качества') . '</h3>
                <div class="images-boxes">';
                    $sert_counter=0;
                    foreach ( $sert as $item ): 
    echo'
                        <div class="images-box">
                            <div class="close_sert"></div>'
                                . wp_get_attachment_image($item['image'], 'post-thumbnail', '', array( 'class' => 'one_sert', 'alt' => $item['alt'])). ' 
                            <div class="zoom">Увеличить</div>
                        </div>';
                    endforeach;
                    }
    echo'            
                        <div class="images_bcgr"></div>
                </div>
            </div>
    </div>
</main>';
 get_sidebar();
 get_footer();
 

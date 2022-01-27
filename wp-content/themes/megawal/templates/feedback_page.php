<?php

/*
Template Name: Feedback
*/
get_header();
get_template_part( 'template-parts/content', 'page' );
?>

   <main  class="post-main">
   
   <div class="bro-klientiionzivi">
   <div class="bro-container">
      <h2><?php _e('Клиенты и отзывы');?></h2>
      <div class="bro-klientiionzivi-logo">
         <ul>
         <?php

$fedb = carbon_get_post_meta( $post->ID, 'feedback' );
if(!empty($fedb)){

foreach ( $fedb as $item ): 
   echo ' 
    <li data-h4="'.$item['name'].'" data-p="<p>'.$item['feedback_text'].'</p> " data-img="'. wp_get_attachment_url( $item['image']) .'">
    ' .wp_get_attachment_image( $item['image'], 'post-thumbnail', true, array( 'alt' => $item['alt'], 'class' => "heigh-auto")). '
    ' .wp_get_attachment_image( $item['image_viol'], 'post-thumbnail', true, array( 'alt' => $item['alt_viol'], 'class' => "heigh-auto")). '

    </li>
     '; 
   endforeach;
}
             ?>
           <div class="bro-klientiionzivi-logo-center" style="display: none;">
               <img src="" alt="">
               <div class="bro-klientiionzivi-logo-center-text">
                  <h4></h4>
                  <p></p>
                  <a href="#" class="topopup fancybox.ajax btn btn-yellow"><?php _e('Заказать бесплатный расчет стоимости');?> </a>
               </div>
            </div>
         </ul>
      </div>
      <div class="bro-klientiionzivi-blagpisma">

         
            <?php

$sps = carbon_get_post_meta( $post->ID, 'pasibki' );
if(!empty($sps)){
    echo '  <h2>'.
            __('Благодарственные письма наших клиентов').'
         </h2><ul>';
foreach ( $sps as $item ): 
   echo '
    <li>'.
   wp_get_attachment_image( $item['image_sps'], 'post-thumbnail', true, array( 'alt' => $item['alt_sps'], 'class' => "heigh-auto")). '
    <div>
   <h4>'.wpautop($item['text_sps']).'</h4>
   <span>'.wpautop($item['alt_sps']).'</span>
   </div>
    </li>
     '; 
   endforeach;
}
             ?>

         </ul>
      </div>
   </div>
   <div class="bro-zakazatrashot">
      <h3>
      <?php _e('Заказать бесплатный расчет стоимости');?>
             </h3>
      <a href="http://xn--80aebh7abs.xn--p1ai/wp-content/themes/megawal/popups/modal-callback.html" class="topopup fancybox.ajax btn btn-yellow"><?php _e('Заказать');?> </a>
   </div>
</div>
</main>
 <?php
 get_sidebar();
 get_footer();
 

 ?>


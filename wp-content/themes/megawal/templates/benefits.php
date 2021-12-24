<?php

/*
Template Name: benefits
*/
get_header();


$benefits = carbon_get_post_meta( $post->ID, 'benefits' );
$i=1;
$mas_benefit= array();

foreach ($benefits as $benefit){
   if(!empty($benefit)){
   $mas_benefit[$i]['image']=$benefit['benefits_image'];
   $mas_benefit[$i++]['text']=$benefit['benefits_text'];
   }
}

?>
<div class="bro-priemushestva">
   <div class="bro-container">
      <h2 class="benefits_title">
      <?php echo __("Преимущества и выгоды");
      ?>
      </h2>
      <div class="bro-row">
                     <div class="bro-col3">
                           <div class="bro-priemushestva-item bro-priemushestva-item1" style="background-image: url( 
                           <?php echo wp_get_attachment_image_url( $mas_benefit[1]['image'], 'full' )?>
                           )">
                           <?php echo $mas_benefit[1]['text'] ?>
                           </div>
                     </div>
                     <div class="bro-col06">
                           <div class="bro-priemushestva-item bro-priemushestva-item1" style="background-image: url( 
                           <?php echo wp_get_attachment_image_url( $mas_benefit[2]['image'], 'full' )?>
                           )">
                               <?php echo $mas_benefit[2]['text'] ?>
                           </div>

                           <div class="bro-priemushestva-item bro-priemushestva-item2" style="background-image: url( 
                           <?php echo wp_get_attachment_image_url( $mas_benefit[3]['image'], 'full' )?>
                           )">
                               <?php echo $mas_benefit[3]['text'] ?>
                           </div>
                      </div>
      </div>
      <div class="bro-row">
                     <div class="bro-priemushestva-item bro-priemushestva-item1" style="background-image: url( 
                     <?php echo wp_get_attachment_image_url( $mas_benefit[4]['image'], 'full' )?>
                     )">
                         <?php echo $mas_benefit[4]['text'] ?>
                     </div>
      </div>
      <div class="bro-row">
         <div class="bro-col06">
         
                     <div class="bro-priemushestva-item bro-priemushestva-item1" style="background-image: url( 
                     <?php echo wp_get_attachment_image_url( $mas_benefit[5]['image'], 'full' )?>
                     )">
                        <?php echo $mas_benefit[5]['text'] ?>
                     </div>


                     <div class="bro-priemushestva-item bro-priemushestva-item2" style="background-image: url( 
                     <?php echo wp_get_attachment_image_url( $mas_benefit[6]['image'], 'full' )?>
                     )">
                       <?php echo $mas_benefit[6]['text'] ?>
                     </div>

         </div>

         <div class="bro-col3">

                     <div class="bro-priemushestva-item bro-priemushestva-item1" style="background-image: url( 
                     <?php echo wp_get_attachment_image_url( $mas_benefit[7]['image'], 'full' )?>
                     )">
                        <?php echo $mas_benefit[7]['text'] ?>
                     </div>
         </div>
      </div>
      <div class="bro-row">

                     <div class="bro-priemushestva-item bro-priemushestva-item1" style="background-image: url( 
                        <?php echo wp_get_attachment_image_url( $mas_benefit[8]['image'], 'full' )?>
                        )">
                        <?php echo $mas_benefit[8]['text'] ?>
                     </div>
      </div>
   </div>
</div>

<?php
get_sidebar();
get_footer();







?>





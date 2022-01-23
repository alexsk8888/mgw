<?php

/*
Template Name: contacts page
*/
get_header();
?>
<main  class="bro-ceninaofis">
<?php 
echo '<div class="content_post_page">
<div class="bro-contakti">
<div class="bro-container">
<div class="bro-tabs">
';



$tabs = carbon_get_post_meta( $post->ID, 'views' );
echo '
<div class="tbcnts">
<ul class="tbcnt_button">';

        
 echo ' 
  <li class="tbcnt_but tbcntb_act"> <i class="fa fa-building" aria-hidden="true"></i>' . __(" ОФИС МОСКВА") . '</li>
  <li class="tbcnt_but "> <i class="fa fa-industry" aria-hidden="true"></i>' . __(" ПРОИЗВОДСТВО") . ' </li>
  <li class="tbcnt_but "> <i class="fa fa-map" aria-hidden="true"></i>' . __(" ДРУГИЕ ГОРОДА") . ' </li>
  
  </ul>

<ul class="tbcnt_content">

  <li class="tbcnt_cnt tbcntc_act">


   <h4>Офис</h4>
   <div class="bro-row">
      <div class="bro-col3">
         <h5>Адрес:</h5>
         <p>'.wpautop(carbon_get_post_meta( $post->ID, 'adres_office' )).'</p>
      </div>
      <div class="bro-col3">
         <h5>Вы можете связаться с нами:</h5>
         <p>'.wpautop(carbon_get_post_meta( $post->ID, 'contact_office' )).'</p>
      </div>
      <div class="bro-col3">
         <h5>Режим работы:</h5>
         <p>'.wpautop(carbon_get_post_meta( $post->ID, 'time_work_office' )).'</p>
      </div>
   </div>
   <div class="bro-line"></div>
   <div class="bro-row">
      <div class="bro-col3">
         <h5>Реквизиты</h5>
         <p>'.wpautop(carbon_get_post_meta( $post->ID, 'requisit' )).'</p>
         </div>
         <div class="bro-col06">'.carbon_get_post_meta( $post->ID, 'iframe_office' ).'</div>
   </li>
  <li class="tbcnt_cnt">
  
  <h4>Производство</h4>
  <div class="bro-row">
     <div class="bro-col3">
        <h5>Адрес:</h5>
        <p>'.wpautop(carbon_get_post_meta( $post->ID, 'adres_production' )).'</p>
     </div>
     <div class="bro-col3">
        <h5>Вы можете связаться с нами:</h5>
        <p>'.wpautop(carbon_get_post_meta( $post->ID, 'contact_production' )).'</p>
     </div>
     <div class="bro-col3">
        <h5>Режим работы:</h5>
        <p>'.wpautop(carbon_get_post_meta( $post->ID, 'time_work_production' )).'</p>
     </div>
  </div>
  <div class="bro-line"></div>
  <div class="bro-row">'.carbon_get_post_meta( $post->ID, 'iframe_production' ).'</div>

  </li>

  <li class="tbcnt_cnt">
  <h4>Региональные представительства</h4>
  <div class="bro-row">
     <div class="bro-col3">
        <h5>Адрес:</h5>
        <p>'.wpautop(carbon_get_post_meta( $post->ID, 'adres_other' )).'</p>        
     </div>
  </div>
  <div class="bro-line"></div>
  <div class="bro-row"></div>
  </li>';
  
?>
</ul>
</div>
</div>
</div>
</div>
</main><!-- #main -->
<?php
get_sidebar();
get_footer();
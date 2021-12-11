<?php
/*
Template Name: Main page
*/


 get_header();
  get_template_part( 'template-parts/content', 'page' );
 ?>
 
     <main  class="site-main">
     
  

<div class="benefits">
         <?php

         $data_arr = carbon_get_post_meta( $post->ID, 'enefits_content' );
         if ( ! empty( $data_arr ) ):
         foreach ( $data_arr as $cnt => $item ): 
            	echo '<div class="bro_item"><div id="diamond"></div>'.
		 wp_get_attachment_image( $item['icon'], 'post-thumbnail', true, array( 'alt' => $item['alt'],))
          .'<span class="bro_item_h2">' . 
           $item['title'] .
          '</span><p>' . $item['description']. '</p></div>';

            endforeach;
    endif;
?></div>

<!--  Выполненные проекты -->

<?php
 $slider_projects = carbon_get_post_meta( $post->ID, 'slider_projects' );
 $main_photo_projects = carbon_get_post_meta( $post->ID, 'main_photo_projects' );
 $num = 0;

 echo "<div id='projects'>";
echo   "<div class='projects_info'>
          <div id='main_carousel_projects'>
           <div class='owl-carousel'>";

 foreach ($slider_projects as $slide_item){
     if(!empty($slide_item)){
     $num++;
     echo "<div id='".$slide_item['id']."' class='slider_item'> 
                 <div class='slider_description'>" . $slide_item['description'] . "</div> 
                 <div class='slider_photo'>"; // start slider_photo
                 foreach ( $slide_item['slider_projects_item'] as $item){
                        echo  wp_get_attachment_image( $item['photo'],
                                 'medium', '', array( 'alt' => $item['alt'],));
                 }
           echo  "</div>";              // end slider_photo
         echo  "</div>";        // end  slider_item
         }
       }
     echo "</div></div>";  // end slider_wrapper/ / end main_carousel_projects
//         echo "<a class='slider_control slider_control_left slider_control_show' href='#' role='button'></a>
//		       <a class='slider_control slider_control_right slider_control_show' href='#' role='button'></a>
//		  ";

 echo "<div id='icons_projects'>";
 foreach ($main_photo_projects as $main_photo_item){
     if(!empty($main_photo_item)){
         echo "<div class='main_photo_project' role='button'
                onclick='open_project(". $main_photo_item['link'] .", this);'>"
             . wp_get_attachment_image($main_photo_item['photo'], 'post-thumbnail', '', array( 'alt' => $main_photo_item['alt'],))
             . "</div>";
     }
 }
   echo "</div></div></div>";

?>
<!-- Наши заказчики и партнеры -->
<div class="parthners">
<?php
    $part_arr = carbon_get_post_meta( $post->ID, 'parthners_content' );
    echo '<h2 class="partners_h2">' . blue_title(carbon_get_the_post_meta("parthners_title")) . '</h2><div class="partners_all ">';
   
    if ( ! empty( $part_arr ) ):
        $count=0;
    foreach ( $part_arr as $cnt => $item ): 
        $count++;
         if($count%2==1){
             echo '<div class="partners_item ">';
             }else{
                 echo '<div class="partners_item black_n">';
                }
         echo  wp_get_attachment_image( $item['icon'], 'post-thumbnail', true, array( 'alt' => $item['alt'],))
     .'</div>';

       endforeach;
       echo '</div></div>';
endif;


// Виды офисных перегородок

echo '<div class="partition_tabs">
        <h2 class="partners_h2">' . blue_title(carbon_get_the_post_meta("partition_title")) . '</h2>
        <p class="office_p_p">'.carbon_get_the_post_meta("partition_title_small"). '</p>';
        $part_arr = carbon_get_post_meta( $post->ID, 'partition' );
        $tabcount=0;
        foreach ( $part_arr as $cnt => $item ): 
            if ($tabcount==0){
            echo  '
                    <div class="tabs">
                    <div class="partition__nav">
                <a class="partition__link partition__link_active" href="#content-'.$tabcount++.'" >
                ' . $item['title']. ' 
                </a>'; 
            }
        else{        
            echo  '<a class="partition__link" href="#content-'.$tabcount.'" >
            ' . $item['title']. ' 
            </a>'; 
            $tabcount++;}
        endforeach;
            echo '
            </div>
            <div class="partition__content">';
            $tabcount=0;
            foreach ( $part_arr as $cnt => $item ): 
                if ($tabcount==0){
                    echo  
                    '<div class="partition__pane partition__pane_show" id="content-'. $tabcount++ .'" >' .
                    wp_get_attachment_image( $item['icon'], 'post-thumbnail', true, array( 'alt' => $item['alt'])) .
                    '<div class="partition_description">' . $item['description'] . '</div>
                    </div>';
                }else{                
                echo  
                    '<div class="partition__pane" id="content-'. $tabcount++ .'">' .
                    wp_get_attachment_image( $item['icon'], 'post-thumbnail', true, array( 'alt' => $item['alt'])) .
                    '<div class="partition_description">' .  $item['description'] . '</div>
                    </div>';
                }
            endforeach;
            echo 
            '</div>
                </div>
                    <div class="right_block_buttons">
                        <div class="types-content-item__controls office_buttons"> 
                            <a href="" class="btn btn-sm btn-yellow btn--icon-ruler topopup fancybox.ajax">Вызвать замерщика </a> 
                            <a href="" class="btn btn-sm btn-yellow btn--icon-check topopup fancybox.ajax">Рассчитать стоимость</a>
                        </div>
                    </div>       
       </div>';
 $first_clean_background = carbon_get_post_meta( $post->ID, 'first_clean_background' );

 if(!empty($first_clean_background)){
 echo '<div class="first_clean" style="background-image: url(' .
 wp_get_attachment_image_url( $first_clean_background, 'full' ) .
  ')"><div class="clean_text">'. carbon_get_post_meta(get_the_ID(), 'first_clean_text') .'
 <a href="" class="btn btn-sm btn-yellow btn--icon-check topopup fancybox.ajax"> Узнать подробности и сделать заказ </a>
 </div>
 </div>';
 }
 


 $why_are_we = carbon_get_post_meta( $post->ID, 'why_are_we' );
 if(!empty($why_are_we)){
 echo '<div class="why_are_we_box"><h2 class="why_are_we_h2">' . blue_title('Почему стоит обратиться к нам') . '</h2>';
 
 $why_pos=0;
 echo '<div class="why_are_we">';
 foreach ($why_are_we as $why_are_we_item){
     if($why_pos++%2==0){$pos="_r";}else{$pos="_l";}
     $why_are_we_item['why_color']? $why_color="color_text_white": $why_color="";
    if(!empty($why_are_we_item)){        
 echo '<div class="why_are_we_box'. $pos .'" style="background-image: url(' .
  wp_get_attachment_image_url( $why_are_we_item['why_are_we_background'] , 'full' ) . ')">
  <div class="why_are_we_text '. $why_color .'">'. $why_are_we_item['why_are_we_text'] .'</div>
 </div>';       
    }}
echo '</div></div>';
 }


$tabs = carbon_get_post_meta( $post->ID, 'views' );
if(!empty($tabs)){
$tbb_act='tbb_act';
echo '<div class="tab_box" style="background-image: url(' .
wp_get_attachment_image_url( carbon_get_the_post_meta("why_are_we_background_container") , 'full' ) . ')">
<h2 class="why_are_we_h2">' . blue_title('Виды профилей') . '</h2>
<div class="tbs">
<ul class="tb_button">';

foreach ( $tabs as $item ): 
        
 echo ' 
  <li class="tb_but '.$tbb_act.'"> '.$item['view_title'].' </li>';

    if($tbb_act){$tbb_act='';}

endforeach;
echo ' </ul>';

$tbc_act='tbc_act';
echo ' <ul class="tb_content">';
foreach ( $tabs as  $item ): 

echo ' 
  <li class="tb_cnt '.$tbc_act.' ">
  <div class="tb_cnt_image">'
  . wp_get_attachment_image($item['view_icon'], 'post-thumbnail', '', array( 'alt' => $item['view_alt']))
  . '</div>
  <div class="tb_cnt_text">'.$item['view_description'].'</div>
  </li>';
  if($tbc_act){$tbc_act='';}
endforeach;
echo '</ul>
<div class="btn_tb"> <a href="" class="btn btn-yellow btn--icon-ruler">Вызвать замерщика</a></div>

</div></div>';
}
$slides = carbon_get_theme_option( 'about_slider' );
echo
'<div class="about">
<h3 class="about_h2">' . blue_title('О компании') . '</h3>
    <div class="about_box">
    <div class="about_image">' 
    . wp_get_attachment_image(carbon_get_post_meta($post->ID, 'about_icon'), 'post-thumbnail', '', array( 'alt' => carbon_get_post_meta($post->ID, 'about_alt'))) . '</div>
    <div class="about_text">'.carbon_get_post_meta($post->ID, 'about_text').'</div>
    </div>
    <div class="direction">'.carbon_get_post_meta($post->ID, 'about_direction').'</div>
    <div class="family">'.carbon_get_post_meta($post->ID, 'about_family').'</div>
    

    <div class="mission">
        <div class="mission_text">'. carbon_get_post_meta(get_the_ID(), 'about_mission') .'</div>';
       $about_slider = carbon_get_post_meta( $post->ID, 'about_slider' );
         echo '
         <div class="about_slider">
            <div class="owl-carousel slide-two">';
                foreach ( $about_slider as  $item ): 
                echo
                '<div class="about_item">
                '
                . wp_get_attachment_image($item['image'], 'thumbnail', '', array( 'alt' => $item['alt'], 'class' => 'thank_blank')). '
                </div>';
                endforeach;
                echo '
            </div>
            <div class="thank_blank_bcgr">
            <div class="than_blank_box">
            <div class="close_thank_blank"></div>
            <img src="" class="thank_blank_full">
            </div></div>
                <div class="about_nav">
                </div> 
         </div>
    </div></div>';
    
    $sert = carbon_get_post_meta( $post->ID, 'sert' );
if(!empty($sert)){

    echo ' <div class="sertification">
    <h3 class="about_h2">' . blue_title('Сертификаты') . '</h3>
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
    
    <div class="images_bcgr"></div></div></div>

    <div class="counter" style="background-image: url(' .
    wp_get_attachment_image_url( carbon_get_post_meta( $post->ID, 'count_image' ), 'full' ) .
     ')">
     <div class="sale_box">
        <h3 class="count_title">'.carbon_get_post_meta( $post->ID, 'count_title' ).'</h3>
        <div class="count_text">'.wpautop( carbon_get_post_meta( $post->ID, 'count_text' )).'</div>
                <div class="count">
        <div class="count_timer_text">'.wpautop(carbon_get_post_meta( $post->ID, 'count_timer_text' )).'</div>
        <div class ="counter_digital">
        '. 
        do_shortcode('[ycd_countdown id=646]').
         '
         </div></div>
        <div class="count_form">  '. 
        do_shortcode('[contact-form-7 id="647" title="sale"]').
         '        
        </div>
    </div>
    </div>

    <div class="feedb">
    </div>'

 ?>
</div>
<img src="" alt="" srcset="">
</main>
 <?php
 get_sidebar();
 get_footer();
 

// title
// icon
// alt
// carbon_get_the_post_meta("description") .

 

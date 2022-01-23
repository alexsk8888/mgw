<?php
/*
Template Name: Stationary partitions
*/

get_header();
$background_img = carbon_get_post_meta($post->ID, 'background_img' );
$banner_title = carbon_get_post_meta($post->ID, 'banner_title' );

$contents = explode(' ', $banner_title);
$i = 0;
$span_content = '';
foreach ($contents as $c){
    $span_content .= '<span>'.$c.'</span><br> ';
    $i++;
}
$new_banner_title = $span_content;

?>
<div class="banner" style="background-image: url(<?php echo wp_get_attachment_image_url($background_img); ?> );">
    <?php
      if(!empty($banner_title)){ echo '<h2>'.$new_banner_title.'</h2>'; }
      echo '<div class="section_form">
              <div class="bro-sfirst-formtext">
                 <strong>Смета</strong> за 10 минут.<br> 
                 <strong>Монтаж</strong> от 3х дней.<br> 
                 <strong>Цена</strong> от 1900 руб за кв.м</div>
              <div class="form-heading">
                <p>Оставьте заявку на бесплатный расчет стоимости </p>
              </div>'
                 .do_shortcode('[contact-form-7 id="790" title="calculate"]').
         '</div>';
    ?>
</div>

<main  class="site-main stationatu_page">
    <div class="container">
        <?php
        $first_block = carbon_get_post_meta($post->ID, 'stnr_block_first');
        ?>
        <div class="stnr_prn_first">
            <div class="block_img">
                <?php
                if(!empty($first_block[0]['photo'])){
                    echo wp_get_attachment_image($first_block[0]['photo'], 'medium', '', array( 'alt' => $first_block[0]['alt']));
                }
                ?>
            </div>
            <div class="block_info">
                <?php
                if(!empty($first_block[0]['info_text'])){
                    echo wpautop($first_block[0]['info_text']);
                }
                ?>
            </div>
        </div>
    </div>
    <?php
    $second_block = carbon_get_post_meta($post->ID, 'stnr_block_second');
    $second_block_list = carbon_get_post_meta($post->ID, 'stnr_block_second_list');
    ?>
    <div class="stnr_prn_second" style="background-image: url(<?php echo wp_get_attachment_image_url($second_block[0]['background_img']); ?> )">
    <div class="stnr_container">
     <?php if(!empty($second_block[0]['title'])){ echo '<h2><span>' . $second_block[0]['title'] . '</span></h2>'; } ?>
            <ul class="list">
            <?php
            if(!empty($second_block_list)){
                foreach ($second_block_list as $list){
                    if(!empty($list)){
                        echo '<li><div class="bro-bg"></div>' . $list['li_text'] . '</li>';
                    }
                }
            }
            ?>
            </ul>
      </div>
    </div>
    <?php
    $type_title = carbon_get_post_meta($post->ID, 'type_partitions');
    $type_partitions = carbon_get_post_meta($post->ID, 'stnr_type_partitions');
    ?>
    <div class="stnr_type">
        <div class="container">
            <?php
            if(!empty($type_title)){echo $type_title;}
            ?>
        <div class="type-list">
            <?php
            if(!empty($type_partitions)){
                foreach ($type_partitions as $type){ ?>
                    <div class="single_type">
                        <div class="type_name"><?php echo $type['info_text']?></div>
                        <div class="type_img" style="background-image: url(<?php echo wp_get_attachment_image_url($type['photo']); ?> );"></div>
                        <div class="type_price"><?php echo $type['price']?></div>
                        <div class="type_button">
                            <button class="btn">Рассчитать стоимость</button>
                        </div>
                    </div>
              <?php  }
            }
            ?>
        </div>
        </div>
    </div>
    <?php
    $stnr_door_type_bg = carbon_get_post_meta($post->ID, 'stnr_door_type_bg');
    $door_type_title = carbon_get_post_meta($post->ID, 'door_type_title');
    $stnr_door_type = carbon_get_post_meta($post->ID, 'stnr_door_type');
    ?>
    <div class="stnr_door_type" style="background-image: url(<?php echo wp_get_attachment_image_url($stnr_door_type_bg[0]['background_img']); ?> )">
        <div class="container">
            <?php
            if(!empty($door_type_title)){echo $door_type_title;}
            ?>
            <div class="type-list">
                <?php
                if(!empty($stnr_door_type)){
                    foreach ($stnr_door_type as $type){ ?>
                        <div class="single_type">
                            <div class="type_name"><?php echo $type['info_text']?></div>
                            <div class="type_img" style="background-image: url(<?php echo wp_get_attachment_image_url($type['photo']); ?> );"></div>
                            <div class="type_price"><?php echo $type['price']?></div>
                            <div class="type_button">
                                <button class="btn">Рассчитать стоимость</button>
                            </div>
                        </div>
                    <?php  }
                }
                ?>
            </div>
        </div>
    </div>
    <!--  Выполненные проекты -->

    <?php
    $front_page_id = get_option( 'page_on_front' );
    $slider_projects = carbon_get_post_meta( $front_page_id, 'slider_projects' );
    $main_photo_projects = carbon_get_post_meta( $front_page_id, 'main_photo_projects' );
    $stnr_projects_title = carbon_get_post_meta($post->ID, 'stnr_projects_title');
    $num = 0;
    echo "<div id='projects' class='projects'>";
         if (!empty($stnr_projects_title)) {
             echo '<h2>'. $stnr_projects_title.'</h2>';
         };
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
    echo "</div></div>";

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

   echo '<div class="demo">
        '.wpautop(carbon_get_post_meta( $front_page_id, 'seo_small_text' ));

        if(carbon_get_post_meta( $front_page_id, 'seo_full_text' )){
        echo
        '
        <input class="hide" id="hd-1" type="checkbox">
        <label for="hd-1">
            Подробнее..
        </label>

        <div>
            '.wpautop(carbon_get_post_meta( $front_page_id, 'seo_full_text' )).'

            <label class = "close_seo_text"for="hd-1"> Свернуть</label>

        </div>';
        }
      echo  '<br/>
        <br/>
    </div>';

    $services_title = carbon_get_post_meta($post->ID, 'stnr_slider_title');
    $services_bg = carbon_get_post_meta($post->ID, 'stnr_slider_bg');
    $services_slider = carbon_get_post_meta($post->ID, 'stnr_slider');

    ?>
    <div class="services" style="background-image: url(<?php echo wp_get_attachment_image_url($services_bg[0]['background_img']) ?> )">
        <div class="service_block">
           <?php echo $services_title?>
            <div class="services_slider owl-carousel">
                <?php
                foreach ($services_slider as $service){
                    if(!empty($service)){
                        echo "<div class='service'>
                                <div class='srv_title'>". $service['text'] ."</div>
                                <div class='srv_img' style='background-image: url(".wp_get_attachment_image_url($service['photo']) ." )'></div>
                              </div>";
                    }
                }
                ?>
            </div>
        </div>

    </div>
</main>
<?php
get_sidebar();
get_footer();

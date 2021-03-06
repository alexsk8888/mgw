<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OptiGel
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="designer" content="Designed by Any-Web Team | https://any-web.net/">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script type="text/javascript">
    // const lightbox = GLightbox({ ...options });
</script>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

		<nav id="site-navigation">
			<div class="container betwen">
			<div class="mobile-navigation">
				<button class="menu-toggle" aria-controls="mobile-menu" aria-expanded="false">
					<div class="nav-icon2"><span></span> <span></span> <span></span></div>
				</button>

	
				<div class="bro-menufullpage ">
<div class="bro-container">
<div class="nav-icon2 open"><i class="fas fa-times"></i></div>
   <div class="bro-menufullpage-logo">
      <a href="/" class="bro-logo logo"><img src="/wp-content/themes/megawal/assets/image/logo.svg" alt="MEGAWALL"></a>
      <div class="bro-logo-text">
         <h4>Все виды остекления</h4>
         <h5>Перегородки. Фасады. Интерьеры.</h5>
      </div>
   </div>

      <?php
					wp_nav_menu(
						array(
							'theme_location' => 'mobile',
							'menu_id'        => 'mobile-menu',
							'container' => 'false',
							'menu_class' => 'bro-menufullpage-menu'
						)
					);
			?>

   <div class="bro-soci">
      <ul>
         <li><a target="_blank" href="https://vk.com/megawall_ru"><i class="fab fa-vk" aria-hidden="true"></i></a></li>
         <li><a target="_blank" href="https://www.facebook.com/megawall.ru/"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
         <li><a target="_blank" href="https://www.instagram.com/megawallmsk/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
         <li><a target="_blank" href="https://ok.ru/group/53371602468952"><i class="fab fa-odnoklassniki" aria-hidden="true"></i></a></li>
         <li><a target="_blank" href="https://plus.google.com/114530243530937573473"><i class="fab fa-google" aria-hidden="true"></i></a></li>
         <li><a target="_blank" href="https://twitter.com/megawallru"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
      </ul>
   </div>
</div>
</div>
			</div>
			<div class="primary-navigation">
			<?php
					wp_nav_menu(
						array(
							'theme_location' => 'primary',
							'menu_id'        => 'primary-menu',
						)
					);
					
			?>
				</div>
			</div>
		</nav>
	<header id="masthead" class="site-header">

	<div class="container">
		<div class="row column-e">
			<div class="col-xs-4">
				<a href="<?php echo home_url()?>" class="logo">
					<span class="head__logo_text">MEGAWALL</span> </a>
				<div class="bro-logo-text">
					<h4 class="head__logo_text_h4">Все виды остекления</h4>
					<h5 class="head__logo_text_h5">Перегородки. Фасады. Интерьеры.</h5>
				</div>
			</div>
			<div class="col-xs-1 text-center"></div>
			<div class="col-xs-7">
				<div class="callback">
					<div class="row">
						<div class="col-xs-6 text-right">
							<div><a href="tel:+74951500375" class="callback__phone">+7 (495) 150-03-75 </a>
							<span class="head_time">Ежедневно с 8:00 до 20:00</span></div>
					<div> <a target="_blank" href="http://t.me/megawallmsk">
							<i class="fab fa-telegram" aria-hidden="true"></i>
						  </a> 
						<a target="_blank" href="whatsapp://send?phone=+79953000375">
						<i class="fab fa-whatsapp" aria-hidden="true"></i></a>
					 <a href="mailto:zakaz@megawall.ru" class="callback__mailto">zakaz@megawall.ru</a>
					</div>
						</div>
						<div class="col-xs-6 text-right">
							<a href="/wp-content/themes/megawal/popups/modal-callback.html" class="btn btn-yellow calbackheader" >Заказать обратный звонок</a></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="breadcrumbs container"><?php true_breadcrumbs()?></div>
<?php 



	if ( is_front_page() || is_home() || is_front_page() && is_home() ) {



$slides = carbon_get_theme_option( 'slider_content' );

if( $slides ) {
	echo '<div class="AllBuner">
	<div class="bunerSlider">
	<div class="owl-carousel">';
	foreach( $slides as $slide ) {
		
		if( ! $slide[ 'photo' ] ) {
			continue; 
		}
		echo '<div class="slide">'.
		 wp_get_attachment_image( $slide[ 'photo' ], 'full', true, array( 
	'alt' => $slide[ 'title' ],));
		echo '</div>';
	}	 
	
} echo '</div>

</div>
<div class="buner-content">
<div class="offer">
   '.carbon_get_theme_option( 'offer' ).'
</div>';

	 echo do_shortcode( '[contact-form-7 id="82" title="Buner Form"]' ). '</div>
	
	 </div> <div class="owlDotsHBlock"></div>';
	 }
	 ?>

		</header><!-- #masthead -->


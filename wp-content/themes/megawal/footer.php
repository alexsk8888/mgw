<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package OptiGel
 */

?>

	<footer id="colophon" class="site-footer">
	<div class="bro-footer">	
	<div class="bro-container">
	<div class="bro-row">
		<div class="bro-col">
		<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer-product',
							'menu_id'        => 'footer-product',
						)
					);
					
			?>
		</div>
		<div class="bro-col">
		<?php
					wp_nav_menu(
						array(
							'theme_location' => 'footer',
							'menu_id'        => 'footer',
						)
					);
					
			?>
		</div>
		<div class="bro-col">
			<div class="bro-soci">
				<ul>
					<li><a target="_blank" href="https://vk.com/megawall_ru"><i class="fab fa-vk" aria-hidden="true"></i></a></li>
					<li><a target="_blank" href="https://www.facebook.com/megawall.ru/"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
					<li><a target="_blank" href="https://www.instagram.com/megawallmsk/"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
					<li><a target="_blank" href="https://ok.ru/group/53371602468952"><i class="fab fa-odnoklassniki" aria-hidden="true"></i></a></li>
					<!--<li><a target="_blank" href="https://plus.google.com/114530243530937573473"><i class="fab fa-google"
 aria-hidden="true"></i></a></li>-->
					<li><a target="_blank" href="https://twitter.com/megawallru"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
					<!--<li><a target="_blank" href="tg://msg?text=TEXT&to=<+79953000375>"><i class="fab fa-telegram"-->
					<!--					                    aria-hidden="true"></i></a></li>-->
					<li><a target="_blank" href="http://t.me/megawallmsk"><i class="fab fa-telegram" aria-hidden="true"></i></a></li>
					<li><a target="_blank" href="whatsapp://send?phone=+79953000375"><i class="fab fa-whatsapp" aria-hidden="true"></i></a></li>
				</ul>
			</div>
			<div class="tttext"> <span class="footer__contact_text"> ??????.: <a href="tel:84951500375" class=""> +7 (495) 150-03-75</a><br> e-mail: <a href="mailto:zakaz@megawall.ru" class="">zakaz@megawall.ru</a> </span> <br> <br> <strong> ?????? ??????????????????</strong><br> <span class="footer__contact_text"> ????. ??????????: 109316, ??. ????????????,<br> ?????????????????????????? ????-????, ??. 47<br> ?????? 7702385393 ?????? 772201001<br> ???????? 1157746568550 <br>?? ?????? ??????????????????, 2020 </span></div>
		</div>
		<div class="bro-col">
			<a href="http://megawall.ru" class="bro-logo logo">
				<!--<img src="/wp-content/themes/megawal/img/28.01.19/logo.svg" alt="MEGAWALL">--><span class="footer__logo_text">MEGAWALL</span> </a>
			<div class="bro-logo-text_footer">
				<h4>?????? ???????? ????????????????????</h4>
				<h5>??????????????????????. ????????????. ??????????????????.</h5>
			</div> 
			<a href="/wp-content/themes/megawal/popups/modal-callback.html" class="footer_callback topopup fancybox.ajax btn btn-yellow">????????????????
 ????????????</a> </div>
	</div>
</div>
</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>

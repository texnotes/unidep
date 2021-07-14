<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Unidep
 */

?>

	</div><!-- #content -->


<div id="engadget-footer-social-container" >
			
		</div>
		<div id="engadget-footer-contact-details-container" style="background-color: #1B2E8C;">
			<footer id="engadget-footer-contact-details">
				
								<div class="footer-left">
					<div class="contact-details">
						
						<ul>
							<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/big-ben.png"></li>
							
							<li style="color: white;">&copy; 2020, <a href="https://www.hneu.edu.ua/">ХНЕУ ім. С. Кузнеця</a>, <br><?php echo get_bloginfo(); ?>.</li>

								
								</p>
							</li> 
							
						</ul>
					</div>
				</div>

				<div class="footer-right" style="color: white;">
					<p >Приєднуйтесь до нас у соціальних мережах:</p>
					<a href="<?php echo get_theme_mod('facebook'); ?>"><i style="color: white;" class="fab fa-facebook-square fa-3x" aria-hidden="true"></i></a>
					<a href="<?php echo get_theme_mod('instagram'); ?>"><i style="color: white;" class="fab fa-instagram fa-3x" aria-hidden="true"></i></a>
					
				</div>
			</footer>

		</div> 	





<?php wp_footer(); ?>

</body>
</html>

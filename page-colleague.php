<?php /*
Template Name: Шаблон персональної сторінки викладача
Template Post Type:  page
*/

get_header();
?>




	<div id="primary" class="content-area">
		<main id="main" class="site-main">

						

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'colleague' );

			// the_post_navigation();
			// След./Пред. Пост.


			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	




							</div>
					
			
			



				<div class="large-4 medium-4 cell">



<?php get_sidebar(); ?>

				</div>
			</div>
</div>









<?php
//get_sidebar();
get_footer();

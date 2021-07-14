<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Unidep
 */

get_header();

?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">


<div class="grid-container">


<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>">Головна</a></li>
     <li>
      <span class="show-for-sr">Current: </span> <?php single_post_title(); ?>
    </li>
  </ul>
</nav>

			

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
			
					
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
<div class="grid-x grid-padding-x" >
				<div class="large-8 medium-8 cell">
					
					<h2 class="text-center">Новини, оголошення та події:</h2>
					<!-- Grid Example -->




				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();


// echo get_post_type();
				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			//the_posts_navigation();
			//the_posts_pagination();

if(function_exists('wp_paginate')):
            wp_paginate();  
        else :
        the_posts_pagination( array(
            'prev_text'          => __( 'Previous page', 'department' ),
            'next_text'          => __( 'Next page', 'department' ),
            'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'department' ) . ' </span>',
        ) );

      endif;



		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>


				


<br>
</div>
<div class="large-4 medium-4 cell">


<?php get_sidebar(); ?>

				</div>
			</div>
</div>
</main><!-- #main -->
	</div><!-- #primary -->						


<?php
get_footer();

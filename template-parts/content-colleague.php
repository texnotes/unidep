<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Faculty
 */

?>


<div class="grid-container">


<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>">Головна</a></li>
    <li><a href="<?php echo esc_url( '/teachers' ); ?>">Викладачі</a></li>
     <li>
      <span class="show-for-sr">Current: </span> <?php the_title(  ); ?>
    </li>
  </ul>
</nav>


			<div class="grid-x grid-padding-x" >
				<div class="large-8 medium-8 cell">
					
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h2 class="text-center">', '</h2>' ); ?>
	</header><!-- .entry-header -->

	<?php department_post_thumbnail(); ?>

					<!-- Grid Example -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
			edit_post_link(
				sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Edit <span class="screen-reader-text">%s</span>', 'department' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>

	


</article><!-- #post-<?php the_ID(); ?> -->				

					<div class="grid-x grid-padding-x">
						<div class="large-12 cell">
							<div >
					
					<!-- Grid Example -->

					<div class="grid-x grid-padding-x">
						<div class="large-6 medium-6 small-6 cell"  >
							<div class="sticky" data-sticky  data-anchor="example1" data-sticky-on="small">
								<p class="text-center">
								<img style="border-radius: 50%;" src="<?php echo get_template_directory_uri(); echo the_field('custom_name'); ?>">
								</p>
							</div>
						</div>

						<div class="large-6 medium-6 small-6 cell" >
							<div class="success callout " id="example1" data-something>
<?php echo the_field('main_text'); ?>
							
							</div>
						</div>
					</div>

<div>
				
	<div class="entry-content">


		<?php

		the_content();

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'department' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->



</div>
							</div>
						</div>	
					</div>
			
			


				
</div>
</aside><!-- #secondary -->
				<div class="large-4 medium-4 cell">



<?php get_sidebar(); ?>

				</div>
			</div>
</div>







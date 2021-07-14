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







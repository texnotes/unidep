<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Faculty
 */

?>


<div class="callout">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>








	<header class="entry-header">

		<?php  
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			<div class="entry-meta">
				

		<p><span class="secondary label">

				<?php
				//department_posted_on();
				echo the_time('m.j.y') ;
				// department_posted_by();
				?>
		</span></p>
		
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php department_post_thumbnail(); ?>

	<div class="entry-content">

<?php the_content('<gcenter><span class="hollow button">Читати далі</span>'); ?>



		<?php /*
		the_content( sprintf(
			wp_kses(
				// translators: %s: Name of current post. Only visible to screen readers 
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'department' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			 get_the_title() 
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'department' ),
			'after'  => '</div>',
		) );
		*/ ?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php // department_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
</div>
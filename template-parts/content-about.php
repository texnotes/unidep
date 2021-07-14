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
				<!-- 	Співробітники... -->

					<div class="grid-container" data-equalizer="bar">
				<div class="grid-x grid-margin-x small-up-1 medium-up-2">
<?php
// параметры по умолчанию
$posts = get_posts( array(
	'numberposts' => -1,
	'category'    => 0,
	'orderby'     => 'date',
	'order'       => 'ASC',
	'include'     => array(),
	'exclude'     => array(),
	'meta_key'    => '',
	'meta_value'  =>'',
	'post_type'   => 'employee',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $posts as $post ){
	setup_postdata($post);
    // формат вывода the_title() ...
    //the_title();
    //the_title_attribute();
    //the_permalink();
    //the_post_thumbnail();?>
						<div class="cell" >
						<!-- image has padding -->
						<div class="card" data-equalizer-watch="bar">
							<div class="card-section">
								<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="card-image" style="border-radius: 50%;">
							</div>
							<div class="card-section">
								<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h4 class="text-center"><?php the_title(); ?></h4></a>
								<p><?php the_excerpt();?></p>
							</div>
						</div>
						</div>

<?php

}

wp_reset_postdata(); // сброс

?>
					
				</div>
			</div>

			
					
					


<?php if ( function_exists( 'ADDTOANY_SHARE_SAVE_KIT' ) ) { ADDTOANY_SHARE_SAVE_KIT(); } ?>







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







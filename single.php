<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
<?php
$my_type = $post->post_type; 
if ( $my_type == 'employee'){
	echo '<li><a href="'.esc_url('/викладачі').'">Викладачі</a></li>';
}
else{
echo '<li><a href="'.esc_url('/новини').'">Новини</a></li>' ;
}
?>

    
     <li>
      <span class="show-for-sr">Current: </span> <?php single_post_title(); ?>
    </li>
  </ul>
</nav>





						<div class="grid-x grid-padding-x" >
				<div class="large-8 medium-8 cell">

						

		<?php
		while ( have_posts() ) :
					
			the_post();
		
			get_template_part( 'template-parts/content', get_post_type() );

			// the_post_navigation();
			// След./Пред. Пост.
the_post_navigation( array(
	'next_text' => '<span class="meta-nav" aria-hidden="true">Наступна публікація: </span>' .
		'<span class="screen-reader-text">Наступна публікація</span> ' .
		'<span class="post-title">“%title”</span>',
	'prev_text' => '<span class="meta-nav" aria-hidden="true">Попередня публікація: </span>' .
		'<span class="screen-reader-text">Попередня публікація</span> ' .
		'<span class="post-title">“%title”</span>',
) );

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

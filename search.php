<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Unidep
 */

get_header();
?>

<div class="grid-container">

<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>">Головна</a></li>
    <li>
      <span class="show-for-sr">Current: </span> Пошук
    </li>
  </ul>
</nav>
			<div class="grid-x grid-padding-x" >
				<div class="large-8 medium-8 cell">

					<div class="grid-x grid-padding-x">
						<div class="large-12 cell">
							<div >


	<section id="primary" class="content-area">
		<main id="main" class="site-main">


		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<h1 class="page-title" >
					<?php
					/* translators: %s: search query. */
					//printf( esc_html__( 'Search Results for: %s', 'department' ), '<span>' . get_search_query() . '</span>' );
printf( esc_html__( 'Результати пошуку: %s', 'department' ), '<span style="color:green;">«' . get_search_query() .'»</span>' );
					

					?>
				</h1>
			</header><!-- .page-header -->


			<?php
			/* Start the Loop */
			while ( have_posts() ) :


				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;



			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</section><!-- #primary -->

</div>
</div>
</div>
</div>
<div class="large-4 medium-4 cell">


<?php
get_sidebar();
?>
</div>
</div>

<?php
get_footer();

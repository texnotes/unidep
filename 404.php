<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Unidep
 */

get_header();
?>

<div class="grid-container">

				<!--<button class="button secondary" href="#">Новини</button>
				<button class="button secondary" href="#">Викладачі</button>
				<button class="button secondary" href="#">Про кафедру</button>
-->

<nav aria-label="You are here:" role="navigation">
  <ul class="breadcrumbs">
    <li><a href="<?php echo esc_url(home_url( '/' ) ); ?>">Головна</a></li>
    <li>
      <span class="show-for-sr">Current: </span> Контент не знайдено
    </li>
  </ul>
</nav>

			<div class="grid-x grid-padding-x">
				<div class="large-8 medium-8 cell">
					<h2 class="text-center">Контент не знайдено</h2>
					<!-- Grid Example -->

					<div class="grid-x grid-padding-x">
						<div class="large-6 medium-6 cell">
							<div class=" ">
								<p class="text-center">
								<img style="width: 350px;" src="<?php echo get_template_directory_uri(); ?>/assets/pictures/keiron.jpg">
								</p>
							</div>
						</div>
						<div class="large-6 medium-6 cell">
							<div class="warning callout ">
								<p>Вибачте, можливо посилання на сторінку, що вам потрібна, вже не існує на нашому сайті. Однак, наш кіт, Кейрон, який відповідає за пошук за сайтом, радить спробувати пошук за іншими словами чи, просто, переглянути останні записи на сайті факультету!</p>

								<?php
					get_search_form();

					the_widget( 'WP_Widget_Recent_Posts' );
					?>

							</div>
						</div>
					</div>

					<div class="grid-x grid-padding-x">
						<div class="large-12 cell">
							<div class=" ">
								<blockquote>
	Також, найпростішим варіантом є ознайомлення з <a href="<?php echo esc_url(home_url( '/' ) ); ?>">Головною сторінкою</a> сайту. Почніть з неї, щоб отримати найактуальнішу інформацію щодо розвитку кафедри кібербезпеки та інформаційних технологій...  
								<cite>Кіт Кейрон</cite>
								</blockquote>



	


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


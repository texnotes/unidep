<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Unidep
 */

?>
<!doctype html>
<html class="no-js" dir="ltr" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
</head>

<body <?php body_class(); ?>>

<?php 
		$theme_all_options = get_option('theme_options');
		$slogan = $theme_all_options['my_checkbox'];
		$slogan_2 = $theme_all_options['my_checkbox_2'];

		if ($slogan == 'on' || !is_front_page()): ?>



	<div class="title-bar" data-responsive-toggle="example-menu" data-hide-for="medium" data-animate="hinge-in-from-top spin-out">
			<button class="menu-icon" type="button" data-toggle="example-menu"></button>
			<div class="title-bar-title">Меню</div>
		</div>

<div data-sticky-container style="z-index: 900;">
		<div class="top-bar" id="example-menu" data-sticky data-options="marginTop:0;" style="width:100%" >
			<div class="top-bar-left">

		<?php

$theme_all_options = get_option('theme_options');
$slogan = $theme_all_options['my_textarea_head'];

			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'TopMenu',
				'items_wrap'      => '<ul class="dropdown menu" data-dropdown-menu><li ><a class="menu-text" href="'. esc_url( home_url( '/' ) ) .'" rel="home">'."$slogan".'</a></li>%3$s</ul>',
			) );
			?>

			</div>
			<div class="top-bar-right">


	<?php if ($slogan_2 == 'on') {				
	 get_search_form(); } ?>
			</div>
		</div>
</div>

<?php endif; ?>


<div class="hero-section callout large primary">
<!-- logo and ad break --><canvas class="background"></canvas>
   
      <article class="hero-background grid-container">
        <div class="grid-x grid-margin-x">
          <div class="medium-4 cell">
            <img src="<?php echo get_theme_mod('header_logo_image'); ?>" alt="company logo">
          </div>
          <div class="medium-8 cell">
            <img src="<?php echo get_theme_mod('header_title_image'); ?>" alt="ХНЕУ ім. С. Кузнеця">
          </div>
        </div>
      </article>
      <!-- / logo and ad break -->
</div>


<!--        <div class="callout large primary">

			<div class="media-object stack-for-small">
  <div class="media-object-section">
          <img src= "<?php echo get_template_directory_uri(); ?>/assets/img/mev/VMZ.jpg">
    </div>
  <div class="media-object-section">
    <h1>Відділ міжнародних зв'язків</h1>
    <h3>ХНЕУ ім. С. Кузнеця</h3>
  </div>
</div>
        </div>
-->

<!--
<div class="callout hero-section">
			<div class="media-object stack-for-small">
  <div class="media-object-section">
          <img src= "<?php echo get_template_directory_uri(); ?>/assets/img/mev/VMZ.jpg">
    </div>
  <div class="media-object-section">
    <h4>I Can Stack.</h4>
    <p>Shrink the browser width to see me stack. I do tricks for dog treats, but I'm not a dog.</p>
  </div>
</div>
		</div>	


<div class="text-center">
            <h1>Our Blog</h1>
          </div>
-->
		

	<div id="content" class="site-content"> 

	<?php echo get_theme_mod('twitter'); ?>	

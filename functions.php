<?php
/**
 * Faculty functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Unidep
 */

if ( ! function_exists( 'unidep_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function unidep_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on unidep, use a find and replace
		 * to change 'unidep' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'unidep', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'unidep' ),
		) );
		register_nav_menus( array(
			'menu-2' => esc_html__( 'Top', 'unidep' ),
		) );

		register_nav_menus( array(
			'menu-3' => esc_html__( 'Bottom', 'unidep' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'unidep_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'unidep_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function unidep_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'unidep_content_width', 640 );
}
add_action( 'after_setup_theme', 'unidep_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function unidep_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'unidep' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'unidep' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'unidep_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function unidep_scripts() {
	wp_enqueue_style( 'unidep-style', get_stylesheet_uri() );

	wp_enqueue_script( 'unidep-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true );

	wp_enqueue_script( 'unidep-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true );

	wp_enqueue_style( 'unidep-style-fondation', get_template_directory_uri(). '/assets/css/foundation.css' );
	wp_enqueue_style( 'unidep-style-fondation-app', get_template_directory_uri(). '/assets/css/app.css' );
	wp_enqueue_style( 'unidep-style-fondation-styles', get_template_directory_uri(). '/assets/css/styles.css' );
	wp_enqueue_style( 'unidep-style-google-fonts', 'https://fonts.googleapis.com/css?family=Play' );
    wp_enqueue_style( 'unidep-style-aos-styles', 'https://unpkg.com/aos@next/dist/aos.css' );
	

wp_enqueue_script( 'unidep-jquery', get_template_directory_uri() . '/assets/js/vendor/jquery.js', array(), '', true );
wp_enqueue_script( 'unidep-vendor-input', get_template_directory_uri() . '/assets/js/vendor/what-input.js', array(), '', true );
wp_enqueue_script( 'unidep-vendor-foundation', get_template_directory_uri() . '/assets/js/vendor/foundation.js', array(), '', true );
wp_enqueue_script( 'unidep-vendor-app', get_template_directory_uri() . '/assets/js/app.js', array(), '', true );
wp_enqueue_script( 'unidep-aos-app', 'https://unpkg.com/aos@next/dist/aos.js', array(), '', true );
wp_enqueue_script( 'unidep-my_aos-app', get_template_directory_uri() . '/assets/js/my_aos.js', array(), '', true );
wp_enqueue_script( 'unidep-my_header', 'https://cdnjs.cloudflare.com/ajax/libs/particlesjs/2.2.2/particles.min.js', array(), '', true );
  

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'unidep_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



add_filter( 'nav_menu_link_attributes', 'wpse156165_menu_add_class', 10, 3 );

function wpse156165_menu_add_class( $atts, $item, $args ) {
    
if( $args->menu_id == 'BottomMenu' ) {
      // add the desired attributes:
    $class = 'button secondary'; // or something based on $item
    $atts['class'] = $class;
    }
    return $atts;
}

add_filter( 'widget_title', 'ddw_custom_widget_title_headline' );
/**
 * Widget Titles: Change default H4 to an H3.
 *
 * @author David Decker - DECKERWEB
 * @link   http://deckerweb.de/twitter
 */
function ddw_custom_widget_title_headline( $title ) {
	return '<h3>' . $title . '</h3>';
}


/*
// Add custom javascript within head section using wp_head action
function global_site_tag_javascript() {
    ?>
  <!-- Global site tag (gtag.js) - Google Ads: 958856983 -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=AW-958856983"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'AW-958856983');
    </script>
    <?php
}

add_action('wp_head', 'global_site_tag_javascript');
// Add javascript on the specifics pages
function local_site_tag_javascript() {
  if (is_page ( '140' )) { //array( 140, 1324)
    ?>
        <script>
			gtag('event', 'page_view', {
    			'send_to': 'AW-958856983',
    			'items': [{
      			'id': 'replace with value',
      			'location_id': 'replace with value',
      			'google_business_vertical': 'education'
    			}]
  		  	});
		</script>
    <?php
  }
}
add_action('wp_head', 'local_site_tag_javascript');

*/
add_action('wp_enqueue_scripts', 'my_wp_head_css' ); // хук автоматом сработает во время wp_head
function my_wp_head_css() {
	if (is_page ( '140' )) { 
	wp_enqueue_style( 'my_head_style_base', get_stylesheet_directory_uri() .'/assets/js/vendor/owlcarousel/assets/owl.carousel.min.css', array(), null );
	wp_enqueue_style( 'my_head_style', get_stylesheet_directory_uri() .'/assets/js/vendor/owlcarousel/assets/owl.theme.default.min.css', array(), null );
}
}

add_action('wp_enqueue_scripts', 'my_wp_owl_js' ); // хук автоматом сработает во время wp_head
function my_wp_owl_js() {
	if (is_page ( '140' )) { 
	wp_enqueue_script( 'my_owl_js', get_stylesheet_directory_uri() .'/assets/js/vendor/owlcarousel/owl.carousel.min.js', array(), null, true );
}
}

add_action( 'wp_footer', 'hook_javascript', 99 );
function hook_javascript(){
if (is_page ( '140' )) { 

	?>
	  <script>
  $(document).ready(function(){
  $(".owl-carousel").owlCarousel({
       items:3,
    loop:true,
    center: true,
   autoWidth:true,
    margin:20,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
   });
});
    </script>
	<?php
}
}

//---------- end actions ----------*/

/* Подключаем страницу настроек темы */
get_template_part('theme-options');


add_action( 'wp_head', 'cd_customizer_css');
function cd_customizer_css()
{
    ?>
         <style type="text/css">
            .hero-section.callout.large{
  padding: 0;
  background-color: <?php echo get_theme_mod('header_bg_color'); ?>;
}
         </style>

    <?php
}




add_action( 'wp_footer', 'hook_particles', 200 );
function hook_particles(){
	if (get_theme_mod('header_animate_switch')) { 
?>
	  <script>
  window.onload = function() {
        Particles.init({
          selector: '.background',
          color: '<?php echo get_theme_mod('header_animate_color'); ?>',
          speed: 0.3,
          maxParticles: 90,
          connectParticles: true,
          responsive: [
            {
              breakpoint: 1024,
              options: {
                maxParticles: 60
              }
            }, {
              breakpoint: 768,
              options: {
                maxParticles: 40
              }
            }
          ]
        });
      };
    </script>
    <?php
}
  }


  function footag_func( $atts ){
	// return "foo = ". $atts['foo'];
	return '
<p><iframe style="border: 0;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2563.862044962329!2d36.22216531571565!3d50.013940879417504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4127a12385d28285%3A0x98cd37a8ae4047b4!2z0KXQsNGA0LrRltCy0YHRjNC60LjQuSDQvdCw0YbRltC-0L3QsNC70YzQvdC40Lkg0LXQutC-0L3QvtC80ZbRh9C90LjQuSDRg9C90ZbQstC10YDRgdC40YLQtdGCINGW0LzQtdC90ZYg0KHQtdC80LXQvdCwINCa0YPQt9C90LXRhtGP!5e0!3m2!1suk!2sua!4v1557047698034!5m2!1suk!2sua" allowfullscreen="allowfullscreen" width="800" height="600" frameborder="0"></iframe></p>
	';
}
add_shortcode('hneu_google_map', 'footag_func');

// результат: 
// шоткод [footag foo="bar"] в тексте будет заменен на "foo = bar"

//  Регистрация нового типа записи
add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('employee', array(
		'labels'             => array(
			'name'               => 'Співробітники', // Основное название типа записи
			'singular_name'      => 'Співробітник', // отдельное название записи типа Book
			'add_new'            => 'Додати нового',
			'add_new_item'       => 'Додати нового співробітника',
			'edit_item'          => 'Редагувати відомості щодо співробітника',
			'new_item'           => 'Новий співробітник',
			'view_item'          => 'Переглянути сторінку співробітника',
			'search_items'       => 'Знайти співробітника',
			'not_found'          =>  'Співробітника не знайдено',
			'not_found_in_trash' => 'У кошику не знайдено співробітника',
			'parent_item_colon'  => '',
			'menu_name'          => 'Співробітники'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 27,
		'menu_icon'  => 'dashicons-id-alt',
		'supports'           => array('title','editor','author','thumbnail','excerpt','comments','post-formats')
	) );
}



add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg';

	return $mimes;
}

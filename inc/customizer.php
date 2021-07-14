<?php
/**
 * Faculty Theme Customizer
 *
 * @package Faculty
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function department_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'department_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'department_customize_partial_blogdescription',
		) );
	}



// Add Social Media Section
$wp_customize->add_section(
	'social-me',
	array(
		'section'  => 'mytheme_footer_options',
		'priority' => 35,
		'title' => __( 'Header colors', '_s' ),
		'description' => __( 'Enter the color to appear in the header.', '_s' )
	)
);
$wp_customize->add_setting( 'header_bg_color', array( 'default' => '#e2d9e2' ) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_bg_color', array( 'label' => __( 'Header Background Color', '_s' ), 'section' => 'social-me', 'settings' => 'header_bg_color', ) ) );

$wp_customize->add_setting( 'header_animate_color', array( 'default' => '#ffffff' ) );
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'header_animate_color', array( 'label' => __( 'Header Animation Color', '_s' ), 'section' => 'social-me', 'settings' => 'header_animate_color', ) ) );


//  =============================
    //  = Checkbox                  =
    //  =============================

 
// Add Twitter Setting
$wp_customize->add_setting( 'header_animate_switch', array( 'default' => 'true' ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'header_animate_switch', array( 'label' => __( 'Display Header Animation', '_s' ), 'section' => 'social-me', 'type'      => 'checkbox', ) ) );


// Фоновое изображение
$wp_customize->add_setting( 'header_logo_image', array( 'default' => '' ) );
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'header_logo_image',
			array(
				'label'    => 'Лого сайта',
				'settings' => 'header_logo_image',
				'section'  => 'social-me'
			)
		)
	);

$wp_customize->add_setting( 'header_title_image', array( 'default' => '' ) );
	
	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'header_title_image',
			array(
				'label'    => 'Повна назва сайту',
				'settings' => 'header_title_image',
				'section'  => 'social-me'
			)
		)
	);



// Add Social Media Section
$wp_customize->add_section(
	'social-media',
	array(
		'title' => __( 'Social Media', '_s' ),
		'priority' => 30,
		'description' => __( 'Enter the URL to your account for each service for the icon to appear in the footer.', '_s' )
	)
);


// Add Twitter Setting
$wp_customize->add_setting( 'facebook', array( 'default' => '' ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'facebook', array( 'label' => __( 'Facebook', '_s' ), 'section' => 'social-media', 'settings' => 'facebook', ) ) );

// Add Instagram Setting
$wp_customize->add_setting( 'instagram', array( 'default' => '' ) );
$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'instagram', array( 'label' => __( 'Instagram', '_s' ), 'section' => 'social-media', 'settings' => 'instagram', ) ) );


}
add_action( 'customize_register', 'department_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function department_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function department_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function department_customize_preview_js() {
	wp_enqueue_script( 'department-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'department_customize_preview_js' );

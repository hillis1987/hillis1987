

<?php


require_once('assets/bs4navwalker.php');


/*  Theme setup
/* ------------------------------------ */

if(! function_exists('nx_setup_theme')){

		function nx_setup_theme() {

	    // Enable title in header
			add_theme_support( "title-tag" );

			// Enable automatic feed links
			// add_theme_support( 'automatic-feed-links' );

			// Enable featured image
			add_theme_support( 'post-thumbnails' );

			// Thumbnail sizes
			add_image_size( 'nx_single', 800, 500, false );
			add_image_size( 'nx_big', 1400, 800, true );
	    add_image_size( 'nx_quad', 600, 600, true ); 	//(cropped)

			// Custom menu areas
			register_nav_menus( array(
				'header' => esc_html__( 'Header', 'nx' ),
			) );

			// Load theme languages
			// load_theme_textdomain( 'slug-theme', get_template_directory().'/languages' );

		}
}

add_action( 'after_setup_theme', 'nx_setup_theme' );

// Sidebar Setup


/*  Register sidebars
/* ------------------------------------ */
if ( ! function_exists( 'nx_sidebars' ) ) {

	function nx_sidebars()	{
		register_sidebar(array( 'name' => esc_html__( 'Primary', 'nx' ),
		'id' => 'primary',
		'description' => esc_html__( 'Main sidebar.', 'nx' ),
		'before_title' => '<h3>',
		'after_title' => '</h3>',
		'before_widget' => '<div class="widget my-5 %2$s">',
		'after_widget' => '</div>',
		)
	);
 }

}


add_action( 'widgets_init', 'nx_sidebars' );


/* Include Javascript files */

if(! function_exists('nx_scripts')){

	function nx_scripts(){

			  wp_enqueue_script( 'nx-popper-js', get_template_directory_uri().'/js/popper.min.js', array('jquery'), null, true);
				wp_enqueue_script( 'nx-bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js', array('jquery'), null, true);

			}
}

add_action('wp_enqueue_scripts','nx_scripts');


if(! function_exists('nx_styles')){

	function nx_styles(){


				wp_enqueue_style( 'nx-bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
				wp_enqueue_style( 'nx-style-default-css', get_template_directory_uri().'/style.css');



	}
}
add_action('wp_enqueue_scripts','nx_styles');

function wpdocs_comment_form_defaults( $defaults ) {
  $defaults['class_submit'] = __( 'btn btn-primary btn-lg' );
  return $defaults;
}
add_filter( 'comment_form_defaults', 'wpdocs_comment_form_defaults' );

 ?>

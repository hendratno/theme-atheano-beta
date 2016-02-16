<?php
function themegue_widgets() {  
  register_sidebar( array(
    'name' => 'Sidebar Lebar',
    'id' => 'sidebar-lebar',
    'description' => 'Sidebar dengan lebar 300px terletak paling atas',
    'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
    'after_widget' => '</li>',
    'before_title' => '<h3 class="widget-title"><span>',
    'after_title' => '</span></h3>',
  ) );
  
 
  
}
add_action( 'widgets_init', 'themegue_widgets' );

register_nav_menus( array(
	'primary' =>__( ' Navigasi Utama', 'themegue' ),
	) );

// Membuat Custom Header
define( 'HEADER_IMAGE_WIDTH', 900 );
define( 'HEADER_IMAGE_HEIGHT', 120 );
define( 'HEADER_IMAGE_TEXTCOLOR', '000000' );
$args = array(
	'width'         => 980,
	'height'        => 60,
	'default-image' => get_template_directory_uri() . '/images/header.jpg',
);

add_theme_support( 'custom-header', $args );

function themegue_header_style() {
	echo '

	<style type="text/css">
		#headimg {
		  height:520px;
		  background:#cccccc;
		}
		#name { 
		  font-family: Georgia, "Bitstream Charter", serif;
		  font-size:30px;
		}
		h1 a {
		  text-decoration:none;
		  }
		#desc { 
		  font-family: Georgia, "Bitstream Charter", serif;
		  font-size:14px;
		}

	</style>';
}

$args = array(
	'default-color' => '000000',
	'default-image' => '%1$s/images/background.jpg',
);
add_theme_support( 'custom-background', $args );

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 100, 100, true );

function custom_excerpt_length( $length ) {
	return 45;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return ' <a id="read-more" href="'. get_permalink( get_the_ID() ) . '">' . __( ' Read-More; ' , 'your-text-domain') . '</a>';
}
add_filter( 'excerpt_more', 'new_excerpt_more' );

?>
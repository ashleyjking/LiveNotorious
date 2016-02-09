<?php
	// We need a textdomain for localization support,
	// with language files in the /lang folder
	load_theme_textdomain( 'livenotorioustemp', TEMPLATEPATH . '/lang' );
	
	// This is the default content width, 600 px
	if ( ! isset( $content_width ) )
		$content_width = 600;
	
	// Adding theme support for post thumbnails
	add_theme_support( 'post-thumbnails' );
	
	// Adding theme support for custom backgrounds
	add_custom_background();
	
	// Telling WordPress to use editor-style.css for the visual editor
	add_editor_style();
	
	// Adding feed links to header
	add_theme_support( 'automatic-feed-links' );
	
	// adding post formats
	add_theme_support( 'post-formats', array( 'aside', 'audio', 'image', 'video' ) );  

	// CUSTOM HEADER
	// -------------
	// Adding theme support for custom headers
	add_custom_image_header( '', 'livenotorioustemp_admin_header_style' );
	
	// Remove header text and null the text color
	define( 'NO_HEADER_TEXT', true );
	define( 'HEADER_TEXTCOLOR', '');
	
	// Default header image, using 'stylesheet_directory' so that
	// child themes will work
	define( 'HEADER_IMAGE', get_bloginfo('stylesheet_directory') . '/img/default-header.jpg' );
	
	

function excerpt_readmore($more) {
	return '... <a href="'. get_permalink($post->ID) . '" class="readmore">' . 'Read More' . '</a>';
}
add_filter('excerpt_more', 'excerpt_readmore');
    add_filter('excerpt_length', 'my_excerpt_length');  
    function my_excerpt_length($len) { return 100; }  


	// MENU AREA
	// ---------
	// Adding and defining the Menu area found in the header.php file
	register_nav_menus( array(
		'top-menu' => __( 'Top Menu', 'livenotorioustemp' ),
		'footer-menu' => __( 'Footer Menu', 'livenotorioustemp' )
	) );

	// WIDGET AREAS
	// ------------
	
	// Right column widget area on front page (default output on items)
	register_sidebar( array(
		'name' => __( 'Front Page Right Column', 'livenotorioustemp' ),
		'id' => 'front-page-right-column',
		'description' => __( 'The right column on the front page.', 'livenotorioustemp' ),
		'before_widget' => '<li id="%1$s" class="widget front %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );

	// Right column widget area on the Blog section
	register_sidebar( array(
		'name' => __( 'Blog Right Column', 'livenotorioustemp' ),
		'id' => 'blog-right-column',
		'description' => __( 'The right column on the Blog section.', 'livenotorioustemp' ),
		'before_widget' => '<li id="%1$s" class="widget blog %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );

	// Right column widget area on Pages
	register_sidebar( array(
		'name' => __( 'Pages Column', 'livenotorioustemp' ),
		'id' => 'pages-right-column',
		'description' => __( 'The right column on Pages.', 'livenotorioustemp' ),
		'before_widget' => '<li id="%1$s" class="widget pages %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
	// Right column widget area on Single Pages
	register_sidebar( array(
		'name' => __( 'Single Page Right Column', 'livenotorioustemp' ),
		'id' => 'single-page-right-column',
		'description' => __( 'The right column on Single Pages.', 'livenotorioustemp' ),
		'before_widget' => '<li id="%1$s" class="widget single %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
	
	// Left column in the footer
	register_sidebar( array(
		'name' => __( 'Footer Left Side', 'livenotorioustemp' ),
		'id' => 'footer-left-side',
		'description' => __( 'The left hand side of the footer.', 'livenotorioustemp' ),
		'before_widget' => '<li id="%1$s" class="widget footer %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
// center column in the footer
	register_sidebar( array(
		'name' => __( 'Footer center Side', 'livenotorioustemp' ),
		'id' => 'footer-center-side',
		'description' => __( 'The center side of the footer.', 'livenotorioustemp' ),
		'before_widget' => '<li id="%1$s" class="widget footer %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );

// right column in the footer
	register_sidebar( array(
		'name' => __( 'Footer right Side', 'livenotorioustemp' ),
		'id' => 'footer-right-side',
		'description' => __( 'The right side of the footer.', 'livenotorioustemp' ),
		'before_widget' => '<li id="%1$s" class="widget footer %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );

	
	// Right column fallback widget area
	register_sidebar( array(
		'name' => __( 'Right Column Fallback', 'livenotorioustemp' ),
		'id' => 'right-column-fallback',
		'description' => __( 'The right column fallback area for those non-posts and pages.', 'livenotorioustemp' ),
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	) );
?>
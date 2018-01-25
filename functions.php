<?php
add_action( 'wp_enqueue_scripts', 'enqueue_parent_styles' );

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );


function enqueue_parent_styles() {
   wp_enqueue_style( 'parent-style', get_template_directory_uri().'/style.css' );
}

//Uses the landing page style only in the blank landing page template
function wpse_enqueue_page_template_styles() {
    if ( is_page_template( 'clean-landing-page.php' ) ) {
        wp_enqueue_style( 'page-template', get_stylesheet_directory_uri() . '/style-lp.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'wpse_enqueue_page_template_styles' );


//Adjusts on the header image of the 2017 theme
function id_custom_header_setup() {
	add_theme_support( 'custom-header', apply_filters( 'twentyseventeen_custom_header_args', array(
		'default-image'      => get_stylesheet_directory_uri().'/assets/images/header.jpg',
		'width'              => 2000,
		'height'             => 300,
		'flex-height'        => true,
		'video'              => true,
		'wp-head-callback'   => 'twentyseventeen_header_style',
	) ) );
	register_default_headers( array(
		'default-image' => array(
			'url'           => '%s/assets/images/header.jpg',
			'thumbnail_url' => '%s/assets/images/header.jpg',
			'description'   => __( 'Default Header Image', 'twentyseventeen' ),
		),
	) );
}
add_action( 'after_setup_theme', 'id_custom_header_setup' );


//Show the featured image on RSS
function wcs_post_thumbnails_in_feeds( $content ) {
    global $post;
    if( has_post_thumbnail( $post->ID ) ) {
        $content = '<p class="post thumbnail">' . get_the_post_thumbnail( $post->ID, 'large', array( 'style' => 'max-width:100%; width:100%; height:auto; margin:0;' ) ). '</p> <p class="post description">' . $content . '</p> ';
    }
    return $content;
}
add_filter( 'the_excerpt_rss', 'wcs_post_thumbnails_in_feeds' );
add_filter( 'the_content_feed', 'wcs_post_thumbnails_in_feeds' );
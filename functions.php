<?php

function blogPost_resources() {
	
	wp_enqueue_style('style', get_stylesheet_uri());
    
    wp_enqueue_style('icons', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');

}

add_action('wp_enqueue_scripts', 'blogPost_resources');

// Get top ancestor
function get_top_ancestor_id() {

	global $post;
	if ($post->post_parent) {
		$ancestor = array_reverse(get_post_ancestors($post->ID));
		return $ancestor[0];
	
	}

	return $post->ID;
}

// Does page have children?
function has_children() {
	global $post;
	
	$pages = get_pages('child_of=' . $post->ID);
	return count($pages);
}

// Customize excerpt word count length
function custom_excerpt_length() {
	return 50;
}

add_filter('excerpt_length', 'custom_excerpt_length');

// Theme setup
function blogPost_setup() {

	// Navigation Menus
	register_nav_menus(array(
		'header' => __('Header Menu'),
		'footer' => __('Footer Menu')
	));
	
	// Add featured image support
	add_theme_support('post-thumbnails');
	add_image_size('small-thumbnail', 180, 120, true); 
	add_image_size('banner-image', 920, 210, array('left', 'top'));
	
	// Add post format support
	add_theme_support('post-formats', array('aside', 'gallery', 'link', 'video'));
}

add_action('after_setup_theme', 'blogPost_setup');

    // Add our widget locations
    function ourWidgetsInit() {
        
        register_sidebar( array(
            'name' => 'Sidebar',
            'id' => 'sidebar1',
            'before_widget' => '<div class="widget-item">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4'
           
        ));
        
        register_sidebar( array(
            'name' => 'Footer Area 1',
            'id' => 'footerarea1',
            'before_widget' => '<div class="widget-item">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4'
        ));
        
        register_sidebar( array(
            'name' => 'Footer Area 2',
            'id' => 'footerarea2',
            'before_widget' => '<div class="widget-item">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4'
        ));
        
        register_sidebar( array(
            'name' => 'Footer Area 3',
            'id' => 'footerarea3',
            'before_widget' => '<div class="widget-item">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4'
        ));
        
        register_sidebar( array(
            'name' => 'Footer Area 4',
            'id' => 'footerarea4',
            'before_widget' => '<div class="widget-item">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-title">',
            'after_title' => '</h4'
        ));

    }
    add_action('widgets_init', 'ourWidgetsInit');


?>




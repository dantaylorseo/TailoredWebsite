<?php
    add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 1920, 1000 );
	register_nav_menu( 'primary', 'Primary Menu' );
    register_nav_menu( 'footer', 'Footer Menu' );
	
	register_sidebar( array(
		'name' => __( 'Blog Sidebar', 'tailored' ),
		'id' => 'sidebar-1',
		'before_widget' => '<div class="sidebox">',
		'after_widget' => "</div>",
		'before_title' => '<h1>',
		'after_title' => '</h1>',
	) );
	
	if ( ! isset( $content_width ) ) {
		$content_width = 700;
	}
	
	function my_scripts_method() {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'unslider', get_template_directory_uri() . '/unslider.min.js', array(), '1.0.0', true );
		wp_enqueue_script( 'retina', get_template_directory_uri() . '/retina.js', array(), '1.0.0', true );
		//wp_enqueue_script('jqm_js','http://code.jquery.com/mobile/1.4.2/jquery.mobile-1.4.2.min.js',array('jquery'),'1.4.2');
		//wp_enqueue_style('jquery.mobile.css', 'http://code.jquery.com/mobile/1.4.2/jquery.mobile.structure-1.4.2.css', array(), '1.4.2', 'screen');
	}
	
	add_action( 'wp_enqueue_scripts', 'my_scripts_method' ); 
	
	register_post_type(
		'testimonials', 
		array(	
			'label' => 'Testimonials',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'menu_icon' => 'dashicons-format-status',
			'show_in_menu' => true,
			'capability_type' => 'page',
			'hierarchical' => true,
			'rewrite' => array(
				'slug' => 'testimonials', 
				'with_front' => true),
			'query_var' => true,
			'has_archive' => true,
			'supports' => array(
				'title',
				'thumbnail',
				'editor',
				'excerpt'),
			'labels' => array (
			  'name' => 'Testimonials',
			  'singular_name' => 'Testimonial',
			  'menu_name' => 'Testimonials',
			  'add_new' => 'Add Testimonial',
			  'add_new_item' => 'Add New Testimonial',
			  'edit' => 'Edit Testimonials',
			  'edit_item' => 'Edit Testimonial',
			  'new_item' => 'New Testimonial',
			  'view' => 'View Testimonial',
			  'view_item' => 'View Testimonial',
			  'search_items' => 'Search Testimonials',
			  'not_found' => 'No Testimonials Found',
			  'not_found_in_trash' => 'No Testimonials Found in Trash',
			  'parent' => 'Parent Testimonial',
			),
		) 
	);
	
	register_post_type(
		'casesudies', 
		array(	
			'label' => 'Case Studies',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'page',
			'hierarchical' => true,
			'menu_icon' => 'dashicons-lightbulb',
			'rewrite' => array(
				'slug' => 'case-study'),
			'query_var' => 'case-study',
			'has_archive' => true,
			'supports' => array(
				'title',
				'thumbnail',
				'editor',
				'excerpt'),
			'labels' => array (
			  'name' => 'Case Studies',
			  'singular_name' => 'Case Study',
			  'menu_name' => 'Case Studies',
			  'add_new' => 'Add Case Studies',
			  'add_new_item' => 'Add New Case Study',
			  'edit' => 'Edit Case Studies',
			  'edit_item' => 'Edit Case Study',
			  'new_item' => 'New Case Study',
			  'view' => 'View Case Studies',
			  'view_item' => 'View Case Study',
			  'search_items' => 'Search Case Studies',
			  'not_found' => 'No Case Studies Found',
			  'not_found_in_trash' => 'No Case Studies Found in Trash',
			  'parent' => 'Parent Case Study',
			),
		) 
	);
	
	register_post_type(
		'clientlogos', 
		array(	
			'label' => 'Client Logos',
			'description' => '',
			'public' => true,
			'show_ui' => true,
			'show_in_menu' => true,
			'capability_type' => 'page',
			'menu_icon' => 'dashicons-admin-tools',
			'hierarchical' => true,
			'rewrite' => array(
				'slug' => 'case-studies', 
				'with_front' => true),
			'query_var' => true,
			'has_archive' => true,
			'supports' => array(
				'title',
				'thumbnail'),
			'labels' => array (
			  'name' => 'Client Logo',
			  'singular_name' => 'Client Logo',
			  'menu_name' => 'Client Logos',
			  'add_new' => 'Add Client Logo',
			  'add_new_item' => 'Add New Client Logo',
			  'edit' => 'Edit',
			  'edit_item' => 'Edit Client Logo',
			  'new_item' => 'New Client Logo',
			  'view' => 'View Client Logo',
			  'view_item' => 'View Client Logo',
			  'search_items' => 'Search Client Logos',
			  'not_found' => 'No Client Logos Found',
			  'not_found_in_trash' => 'No Client Logos Found in Trash',
			  'parent' => 'Parent Client Logo',
			),
		) 
	);
	
	function button_shortcode( $atts, $content = null ) {
		if(isset($atts['alt']) && $atts['alt'] == true){
			return '<a class="buttonalt" href="'.$atts['url'].'">' . $content . '</a>';
		} else {
			return '<a class="button" href="'.$atts['url'].'">' . $content . '</a>';
		}
	}
	add_shortcode( 'button', 'button_shortcode' );
?>
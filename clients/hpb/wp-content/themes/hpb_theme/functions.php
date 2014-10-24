<?php
	add_theme_support( 'post-thumbnails' );
	register_nav_menu( 'primary', __( 'Primary Menu', 'seowned' ) );
	register_nav_menu( 'footer', __( 'Footer Menu', 'seowned' ) );
	register_sidebar( array(
		'name' => __( 'Left Sidebar', 'seowned' ),
		'id' => 'sidebar-1',
		'before_widget' => '<div class="sidebox borders">',
		'after_widget' => "</div>",
		'before_title' => '<h2>',
		'after_title' => '</h2>',
	) );
	register_sidebar( array(
		'name' => __( 'Latest Tweets', 'seowned' ),
		'id' => 'sidebar-2',
		'before_widget' => '<div class="homebox borders tweets">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="lblue">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Latest Posts Home', 'seowned' ),
		'id' => 'sidebar-3',
		'before_widget' => '<div class="homebox borders blogs">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="green">',
		'after_title' => '</h3>',
	) );
	register_sidebar( array(
		'name' => __( 'Facebook Home', 'seowned' ),
		'id' => 'sidebar-4',
		'before_widget' => '<div class="homebox borders facebook">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="dblue">',
		'after_title' => '</h3>',
	) );
	
	
	add_action( 'wp_enqueue_script', 'load_jquery' );
	function load_jquery() {
		wp_enqueue_script( 'jquery' );
	}
	add_image_size( 'prod_feat', 683, 286, true );
?>
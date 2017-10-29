<?php

/**
 * Enqueue scripts and styles.
 */
function vicHUB_scripts() {

	wp_enqueue_style( 'vicHUB-style', get_stylesheet_uri(), time());
	
	wp_enqueue_style( 'vicHUB-style', get_template_directory_uri() . 'css/login.css', array(), time(), true );
	
	wp_enqueue_style( 'vicHUB-style', get_template_directory_uri() . 'css/fom.css', array(), time(), true );


	wp_enqueue_script( 'vicHUB-jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '20151215', true );

		wp_enqueue_script( 'vicHUB-jquery', get_template_directory_uri() . 'https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js', array(), '20151215', true );
	
	wp_enqueue_script( 'vicHUB-foundation', get_template_directory_uri() . 'http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js', array(), '20151215', true );
	
		wp_enqueue_script( 'vicHUB-foundation', get_template_directory_uri() . 'https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js', array(), '20151215', true );
		
		wp_enqueue_script( 'vicHUB-foundation', get_template_directory_uri() . '//jsfiddle.net/apougher/DVng2/embed/', array(), '20151215', true );


	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'vicHUB_scripts' );

function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'News / Announcements';
    $submenu['edit.php'][5][0] = 'News / Announcements';
    $submenu['edit.php'][10][0] = 'News / Announcements';
    echo '';
}
function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'News / Announcements';
        $labels->singular_name = 'News / Announcements';
        $labels->add_new = 'Add News / Announcements';
        $labels->add_new_item = 'Add News / Announcements';
        $labels->edit_item = 'Edit News / Announcements';
        $labels->new_item = 'News / Announcements';
        $labels->view_item = 'View News / Announcements';
        $labels->search_items = 'Search News / Announcements';
        $labels->not_found = 'No News / Announcements found';
        $labels->not_found_in_trash = 'No News / Announcements found in Trash';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );

function sod_scripts() {

	wp_enqueue_style( 'sod-style', get_stylesheet_uri() );

	wp_enqueue_script( 'sod-jquery', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(), '20151215', true );

	wp_enqueue_script( 'sod-foundation', get_template_directory_uri() . '/js/foundation.js', array(), '20151215', true );

	wp_enqueue_script( 'sod-masonry', get_template_directory_uri() . '/js/isotope-docs.min.js', array(), '20151215', true );

	
	

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'sod_scripts' );


?>

<?php
/*==========================================================================================
Add stylesheets/javascripts to enqueue
============================================================================================*/
function my_theme_enqueue_styles() {
    wp_enqueue_style('parent-theme', get_template_directory_uri() .'/style.css');
    wp_enqueue_script( 'child_scripts', get_theme_file_uri().'/assets/js/child-scripts.js', '', '1.1', true);
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', '' , '1.5', false);
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
/*==========================================================================================
Custom Excerpt
============================================================================================*/
function get_excerpt(){
	$excerpt = get_the_content();
	//$excerpt = preg_replace(" ([.*?])",'',$excerpt);
	$excerpt = strip_shortcodes($excerpt);
	$excerpt = strip_tags($excerpt);
	$excerpt = substr($excerpt, 0, 200);
	$excerpt = substr($excerpt, 0, strripos($excerpt, " "));
	$excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
	$excerpt = '<p>'.$excerpt.'...'.'</p>';
	return $excerpt;
}
/*==========================================================================================
// custom Login Page
============================================================================================*/
function my_custom_login() {
echo '<link rel="stylesheet" type="text/css" href="' . get_bloginfo('stylesheet_directory') . '/login/custom-login-styles.css" />';
}
add_action('login_head', 'my_custom_login');

function my_login_logo_url() {
return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
return 'Timpview High School | Provo City School District';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );
/*==========================================================================================
// ShortCodes
============================================================================================*/
/*==========================================================================================
// Add link to stats for a user
============================================================================================*/
//this will add a stats link under the dashboard menu. 
if ( !function_exists( 'single_submenu_dropdown_link_example' ) || current_user_can('svo_page_stats', $post->ID) ) {
function single_submenu_dropdown_link_example() {
	global $submenu;
	$link_to_add = 'admin.php?page=stats&view=post&post=46446';
	// change edit.php to the top level menu you want to add it to 
	$submenu['index.php'][] = array('Stats', 'svo_page_stats', $link_to_add);
}
add_action('admin_menu', 'single_submenu_dropdown_link_example');
}
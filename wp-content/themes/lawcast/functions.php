<?php
if ( ! function_exists( 'lawcast_setup' ) ) :
function lawcast_setup() {
	load_theme_textdomain( 'lawcast', get_template_directory() . '/languages' );


}
endif;

add_theme_support( 'post-thumbnails' ); 

function my_post_templater($template){
  if( !is_single() )
    return $template;
  global $wp_query;
  $c_template = get_post_meta( $wp_query->post->ID, '_wp_page_template', true );
  return empty( $c_template ) ? $template : $c_template;
}

add_filter( 'template_include', 'my_post_templater' );

function give_my_posts_templates(){
  add_post_type_support( 'post', 'page-attributes' );
}

add_action( 'init', 'give_my_posts_templates' );

if ( function_exists('register_sidebar') )
    register_sidebar();

add_theme_support( 'html5', array( 'search-form' ) );

register_sidebar( array(
    'name' => 'Footer Sidebar 1',
    'id' => 'footer-sidebar-1',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Footer Sidebar 2',
    'id' => 'footer-sidebar-2',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Footer Sidebar 3',
    'id' => 'footer-sidebar-3',
    'description' => 'Appears in the footer area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Logo Orgy',
    'id' => 'logo-orgy',
    'description' => 'Appears in the "As Seen On" area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
) );

add_filter( 'user_can_richedit', 'disable_my_richedit' );
function disable_my_richedit( $default ) {
    global $post;
    return $default;
}
class My_Walker_Nav_Menu extends Walker_Nav_Menu {
  function start_lvl(&$output, $depth) {
    $indent = str_repeat("\t", $depth);
    $output .= "\n$indent<ul class=\"span12\">\n";
  }
}

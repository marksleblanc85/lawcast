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
    'before_title' => '<h3 class="orangebanner">',
    'after_title' => '</h3>',
) );
register_sidebar( array(
    'name' => 'Home Widget',
    'id' => 'home-widget',
    'description' => 'Appears in home page LinkedIn area',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="orangebanner">',
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
function custom_meta_box_markup($object)
{
    wp_nonce_field(basename(__FILE__), "meta-box-nonce");

    ?>
        <div>
            <label for="meta-box-text">Custom Field 1</label>
            <input name="meta-box-text" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-text", true); ?>">
			<label for="meta-box-text">Custom Field 2</label>
            <input name="meta-box-text-2" type="text" value="<?php echo get_post_meta($object->ID, "meta-box-text-2", true); ?>">

        </div>
    <?php  
}
function add_field_box()
{
    add_meta_box("field-box", "Custom Fields", "custom_meta_box_markup", "post", "side", "high", null);
}

add_action("add_meta_boxes", "add_field_box");

function save_custom_meta_box($post_id, $post, $update)
{
    if (!isset($_POST["meta-box-nonce"]) || !wp_verify_nonce($_POST["meta-box-nonce"], basename(__FILE__)))
        return $post_id;

    if(!current_user_can("edit_post", $post_id))
        return $post_id;

    if(defined("DOING_AUTOSAVE") && DOING_AUTOSAVE)
        return $post_id;

    $slug = "post";
    if($slug != $post->post_type)
        return $post_id;

    $meta_box_text_value = "";
    $meta_box_text_value_2 = "";

    if(isset($_POST["meta-box-text"]))
    {
        $meta_box_text_value = $_POST["meta-box-text"];
    }   
    update_post_meta($post_id, "meta-box-text", $meta_box_text_value);

    if(isset($_POST["meta-box-text-2"]))
    {
        $meta_box_text_value_2 = $_POST["meta-box-text-2"];
    }   
    update_post_meta($post_id, "meta-box-text-2", $meta_box_text_value_2);
}


add_action("save_post", "save_custom_meta_box", 10, 3);
<?php

/* 
 * Отладочная функция d 
 * 
 * param1 $val mixed 
 * param2 $text string 
 * param3 $die int 
 * 
 * return echo print_r()
 */
function d($val, $text="", $die=0){
    echo "DEBUG: <p style='color: red; '>{$text} </p><pre>";
    print_r($val); 
    echo "</pre>"; 
    if ($die) die(); 
}

add_action('init', 'presse_register');
function presse_register() {
    $args = array(
        'label'               => __('Presse'),
        'labels'              => array(
            'name'               => __('Presse'),
            'singular_name'      => __('Presse'),
            'menu_name'          => __('Presse'),
            'all_items'          => __('All presse'),
            'add_new'            => _x('Add press', ''),
            'add_new_item'       => __('New presse'),
            'edit_item'          => __('Edit presse'),
            'new_item'           => __('New presse'),
            'view_item'          => __('presse'),
            'not_found'          => __('presse not not found'),
            'not_found_in_trash' => __('Remote presse not exists'),
            'search_items'       => __('Find presse')
        ),
        'description'         => __('presse'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => '',
            'with_front' => false
        )
    );
    register_post_type('presse', $args);
}

// kontakt
add_action('init', 'kontakt_register');
function kontakt_register() {
    $args = array(
        'label'               => __('Kontakt'),
        'labels'              => array(
            'name'               => __('Kontakt'),
            'singular_name'      => __('Kontakt'),
            'menu_name'          => __('Kontakt'),
            'all_items'          => __('All kontakt'),
            'add_new'            => _x('Add kontakt', ''),
            'add_new_item'       => __('New kontakt'),
            'edit_item'          => __('Edit kontakt'),
            'new_item'           => __('New kontakt'),
            'view_item'          => __('kontakt'),
            'not_found'          => __('kontakt not not found'),
            'not_found_in_trash' => __('Remote kontakt not exists'),
            'search_items'       => __('Find kontakt')
        ),
        'description'         => __('kontakt'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => '',
            'with_front' => false
        )
    );
    register_post_type('kontakt', $args);
}

// Slider
add_action('init', 'slider_register');
function slider_register() {
    $args = array(
        'label'               => __('Slider'),
        'labels'              => array(
            'name'               => __('Slider'),
            'singular_name'      => __('Slider'),
            'menu_name'          => __('Slider'),
            'all_items'          => __('All sliders'),
            'add_new'            => _x('Add slider', ''),
            'add_new_item'       => __('New slider'),
            'edit_item'          => __('Edit slider'),
            'new_item'           => __('New slider'),
            'view_item'          => __('slider'),
            'not_found'          => __('slider not not found'),
            'not_found_in_trash' => __('Remote slider not exists'),
            'search_items'       => __('Find slider')
        ),
        'description'         => __('slider'),
        'public'              => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'show_ui'             => true,
        'show_in_nav_menus'   => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'capability_type'     => 'post',
        'hierarchical'        => false,
        'supports'            => array(
            'title',
            'editor',
            'thumbnail',
   
        ),
        'has_archive'         => false,
        'rewrite'             => array(
            'slug'       => '',
            'with_front' => false
        )
    );
    register_post_type('slider', $args); 
}



if (function_exists('register_sidebar'))
	register_sidebar(array('name' => 'Sidebar'));

register_nav_menus(array(
	'top' => 'Верхнее меню',            
	'bottom' => 'Нижнее меню'   
));

add_theme_support('menus');

if ( function_exists( 'add_theme_support' ) ) {
    add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 220, 147);
}

function my_function_admin_bar(){
return false;
}
add_filter( 'show_admin_bar' , 'my_function_admin_bar');

add_action('init', 'remove_else_link');

add_image_size('squareThumb', 292, 278, true);

function remove_else_link()
{

remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );
remove_action( 'wp_head', 'index_rel_link' );
remove_action( 'wp_head', 'wp_shortlink_wp_head');
remove_action( 'wp_head', 'parent_post_rel_link', 10, 0 ); 
remove_action( 'wp_head', 'start_post_rel_link', 10, 0 );
remove_action( 'wp_head', 'adjacent_posts_rel_link', 10, 0 );
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'feed_links_extra', 3 ); 

remove_action('wp_head','feed_links_extra', 3); // ссылки на дополнительные rss категорий
remove_action('wp_head','feed_links', 2); //ссылки на основной rss и комментарии
remove_action('wp_head','rsd_link');  // для сервиса Really Simple Discovery
remove_action('wp_head','wlwmanifest_link'); // для Windows Live Writer
remove_action('wp_head','wp_generator');  // убирает версию wordpress
 
// убираем разные ссылки при отображении поста - следующая, предыдущая запись, оригинальный url и т.п.
remove_action('wp_head','start_post_rel_link',10,0);
remove_action('wp_head','index_rel_link');
remove_action('wp_head','rel_canonical');
remove_action( 'wp_head','adjacent_posts_rel_link_wp_head', 10, 0 );
remove_action( 'wp_head','wp_shortlink_wp_head', 10, 0 );
}

function my_add_excerpts_to_pages() {
     add_post_type_support('page', 'excerpt');
}
add_action('init', 'my_add_excerpts_to_pages');




?>
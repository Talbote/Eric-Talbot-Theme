<?php

//picture

add_theme_support('post-thumbnails');

//Google Map

function my_acf_init() {

    acf_update_setting('google_api_key', 'AIzaSyD9DJwu6fspG5nWdH1euHoupVhplmJ8Pdo');
}

add_action('acf/init', 'my_acf_init');


// translate
add_action('after_setup_theme', 'pdw_theme_setup');

function pdw_theme_setup()
{
    load_theme_textdomain('traductor', get_template_directory() . '/languages');
}

// list menu

register_nav_menus(array(

    'main-menu' => __('main menu'),

    'footer-menu' => __('footer menu'),

    'side-bar' => __('sidebar menu'),

));

// widg
function wp_base_theme_widgets_init() {
    for ($i = 1; $i <= 10; $i++) {
        register_sidebar( array(
            'name'          => __( 'Bloc de texte '.$i, 'wp-theme-base-translate' ),
            'id'            => 'text-bloc-'.$i,
            'description'   => __( 'Ajout d\'un bloc texte ou autre sur le site', 'wp-theme-base-translate' ),
            'before_widget' => '<div ">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        ) );
    }
}

add_action( 'widgets_init', 'wp_base_theme_widgets_init' );

// menu nav config

function change_submenu_class($menu)
{

    $menu = preg_replace('/ class="sub-menu"/', '/ class="dropdown" /', $menu);

    return $menu;

}

add_filter('wp_nav_menu', 'change_submenu_class');






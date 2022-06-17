<?php 
function lapizzeria_styles(){

    wp_enqueue_style('slicknavcss', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css', array(), '1.0.10');
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Raleway:wght@100;400;700&display=swap', array(), '1.0.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');

    wp_enqueue_style('slicknavcss', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/slicknav.min.css', array(), '1.0.10');

     // Scripts
     wp_enqueue_script('slicknavjs', 'https://cdnjs.cloudflare.com/ajax/libs/SlickNav/1.0.10/jquery.slicknav.min.js', array('jquery'), '1.0.10', true);

     wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0', true);
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');


function lapizzeria_menus(){
    register_nav_menus(array(
        'header-menu' => 'Header Menu'
    ));
}
add_action('init', 'lapizzeria_menus');
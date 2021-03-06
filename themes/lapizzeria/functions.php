<?php 
function lapizzeria_setup(){
    add_theme_support('post-thumbnails');

    add_image_size('nosotros', 437, 291, true);
    add_image_size('especialidades', 768, 515, true);
    add_image_size('especialidades_protrait', 435, 526, true);
}
add_action('after_setup_theme', 'lapizzeria_setup'); 

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
        'header-menu' => 'Header Menu',
        'redes-sociales' => 'Redes Sociales'
    ));
}
add_action('init', 'lapizzeria_menus');




// Agregar botones a paginador
function lapizzeria_botones_paginador(){
    return 'class="boton boton-secundario"';
}
add_filter('next_posts_link_attributes', 'lapizzeria_botones_paginador');
add_filter('previous_posts_link_attributes', 'lapizzeria_botones_paginador');
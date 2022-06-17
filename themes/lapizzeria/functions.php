<?php 
function lapizzeria_styles(){
    wp_enqueue_style('googlefonts', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Raleway:wght@100;400;700&display=swap', array(), '1.0.0');
    wp_enqueue_style('style', get_stylesheet_uri(), array(), '1.0.0');
}

add_action('wp_enqueue_scripts', 'lapizzeria_styles');
?>
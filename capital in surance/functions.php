<?php
add_action('after_setup_theme', function(){
    
    register_nav_menus ( [
        'header-menu' => 'Верхняя область',
        'footer-menu' => 'Нижняя область',
    ]);

} );

wp_enqueue_style( 'home-page', get_template_directory_uri() . '/css/home-page.css'  );
wp_enqueue_style( 'style', get_template_directory_uri() . '/style.css'  );
wp_enqueue_script( 'jquery', get_template_directory_uri() . '/script.js');

?>
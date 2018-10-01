<?php

add_action( 'init', function () {
    register_nav_menu('site-nav', __( 'Site Navigation' ));
    register_nav_menu('footer-nav', __( 'Footer Navigation' ));
} );


function random_hero() {
    srand();
    echo get_stylesheet_directory_uri() . '/heros/' . sprintf("%02d", rand(0,23)) . '.jpg';
}

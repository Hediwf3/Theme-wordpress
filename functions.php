<?php
wp_enqueue_style('TestWordpressMars', get_stylesheet_uri());



function anipics_start_theme(){

    add_theme_support('title-tag');
}


add_action('after_setup_theme', 'anipics_start_theme');

//add_filter('show_admin_bar', '__return_false');

//ajout menu principal

function anipics_add_main_menu(){
    register_nav_menu('main_menu', 'Menu principal');
}
add_action('init', 'anipics_add_main_menu');

// ajout zone a widget

function  anipics_add_widget_area(){
    register_sidebar(array(
        'id' => 'projet',
        'name' => 'Photo gallery',
        'description' => ' Apparait au centre',
        'before_widget' => '<div>',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
    register_sidebar(array(
        'id' => 'footer',
        'name' => 'footer',
        'description' => ' Apparait bas',
        'before_widget' => '<div class="col s4" style="margin: 0 18em 0 3em " >',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
    register_sidebar(array(
        'id' => 'footer2',
        'name' => 'footer2',
        'description' => ' Apparait bas',
        'before_widget' => '<div class="col s6">',
        'after_widget' => '</div>',
        'before_title' => '<h1>',
        'after_title' => '</h1>'
    ));
}

add_action('widgets_init', 'anipics_add_widget_area');
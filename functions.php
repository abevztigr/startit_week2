<?php
/**
 * Created by PhpStorm.
 * User: Hi-Tech
 * Date: 20.12.2018
 * Time: 20:53
 */
function podklyucheniye_stiley(){
// Регистрируем стиль в системе (для темы):
    wp_register_style( 'nekiy-style', get_template_directory_uri() . '/style.css', array(),
        '1', 'all' );
wp_enqueue_style( 'nekiy-style' );
}
//вызываем хук-событие(о которых будем говорить позже)
add_action( 'wp_enqueue_scripts', 'podklyucheniye_stiley' );

function podklyucheniye_scriptov(){
    wp_register_script( 'jquery-3.2.1.min', get_template_directory_uri() . '/js/jquery-3.2.1.min.js', array(
        'jquery' ), '1', true );
    wp_register_script( 'ootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array(
    'jquery' ), '1', true );
    wp_register_script( 'mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array(
        'jquery' ), '1', true );
    wp_register_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox.min.js', array(
        'jquery' ), '1', true );
    wp_register_script( 'arousel', get_template_directory_uri() . '/js/owl.carousel.js', array(
        'jquery' ), '1', true );
    wp_register_script( 'typed', get_template_directory_uri() . '/js/typed.min.js', array(
        'jquery' ), '1', true );
    wp_register_script( 'menu', get_template_directory_uri() . '/js/menu.js', array(
        'jquery' ), '1', true );
    wp_register_script( 'custom', get_template_directory_uri() . '/js/custom.js', array(
        'jquery' ), '1', true );

wp_enqueue_script( 'jquery-3.2.1.min' );
wp_enqueue_script( 'ootstrap' );
wp_enqueue_script( 'fancybox' );
wp_enqueue_script( 'arousel' );
wp_enqueue_script( 'typed' );
wp_enqueue_script( 'mixitup' );
wp_enqueue_script( 'menu' );
wp_enqueue_script( 'custom' );

}
add_action( 'wp_enqueue_scripts', 'podklyucheniye_scriptov' );

add_theme_support ('post-thumbnails');
add_image_size ('small-thumb', 300, 400, true);

add_image_size( 'spec_thumb', 650, 255, true );
// включаем поддержку меню
add_theme_support('menus');

//print_r(get_intermediate_image_sizes()); exit;
register_nav_menu('menu', 'main');

// Add support for Block Styles.
add_theme_support( 'wp-block-styles' );


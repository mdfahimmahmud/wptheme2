<?php
// Sidebar Register Function

function wp_widgets_register(){
  register_sidebar(array(
    'name' => __('Main Widget Area', 'mdfahim'),
    'id'   => 'sideber-1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'mdfahim'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 1', 'mdfahim'),
    'id'   => 'footer-1',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'mdfahim'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 2', 'mdfahim'),
    'id'   => 'footer-2',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'mdfahim'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
  register_sidebar(array(
    'name' => __('Footer 3', 'mdfahim'),
    'id'   => 'footer-3',
    'description' => __('Apperas in the sidebar in blog page and also other page', 'mdfahim'),
    'before_widget' => '<div class="child_sidebar">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="title">',
    'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'wp_widgets_register');



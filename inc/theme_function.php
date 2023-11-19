<?php

function wp_customizar_register($wp_customize){

  //Header Area Function
  $wp_customize->add_section('wp_header_area', array(
    'title' =>__('Header Area', 'mdfahim'),
    'description' => 'If you interested to update your header area, you can do it here.'
  ));

  $wp_customize->add_setting('wp_logo', array(
    'default' => get_bloginfo('template_directory') . '/img/logo.png',
  ));

  $wp_customize-> add_control(new WP_Customize_Image_Control($wp_customize, 'wp_logo', array(
    'label' => 'Logo Upload',
    'description' => 'If you interested to change or update your logo you can do it.',
    'setting' => 'wp_logo',
    'section' => 'wp_header_area',
  ) ));

  // Menu Position Option
  $wp_customize->add_section('wp_menu_option', array(
    'title' => __('Menu Position Option', 'mdfahim'),
    'description' => 'If you interested to change your menu position you can do it.'
  ));

  $wp_customize->add_setting('wp_menu_position', array(
    'default' => 'right_menu',
  ));

  $wp_customize-> add_control('wp_menu_position', array(
    'label' => 'Menu Position',
    'description' => 'Select your menu position',
    'setting' => 'wp_menu_position',
    'section' => 'wp_menu_option',
    'type' => 'radio',
    'choices' => array(
      'left_menu' => 'Left Menu',
      'right_menu' => 'Right Menu',
      'center_menu' => 'Center Menu',
    ),
  ));


  // Footer Option
  $wp_customize->add_section('wp_footer_option', array(
    'title' => __('Footer Option', 'mdfahim'),
    'description' => 'If you interested to change or update your footer settings you can do it.'
  ));

  $wp_customize->add_setting('wp_copyright_section', array(
    'default' => '&copy; Copyright 2021 | Procoder BD',
  ));

  $wp_customize-> add_control('wp_copyright_section', array(
    'label' => 'Copyright Text',
    'description' => 'If need you can update your copyright text from here',
    'setting' => 'wp_copyright_section',
    'section' => 'wp_footer_option',
  ));

}

add_action('customize_register', 'wp_customizar_register');

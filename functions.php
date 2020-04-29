<?php
require('register_custom_post_types.php');
require('autoloader.inc.php');



add_action('wp_enqueue_scripts', 'load_script_css');
add_action('init', 'initSchedules');
add_action('widgets_init', 'init_widgets');
add_action('after_setup_theme', 'hadler_after_setup_theme');
add_action('customize_register', 'themeslug_customize_register');

function themeslug_customize_register($wp_customize)
{
    customizerNavLogo($wp_customize);
    customizerBanner($wp_customize);
}

function init_widgets()
{
    register_sidebar([
    'name' => 'Footer',
    'id' => 'footer'
    ]);

    //register_widget('widgets\AboutUsWidget');
    //register_widget('widgets\QuickLinks');
}
function hadler_after_setup_theme()
{
    register_nav_menus([
      'primary' => __('Primary Menu location'),
      //'footer' => __('Footer Menu location'),
  ]);
}
function load_script_css()
{
    $medilabCssDir = get_template_directory_uri().'/css/';
    $medilabScriptDir = get_template_directory_uri().'/js/';

    wp_enqueue_style('font-css', 'https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal');
    wp_enqueue_style('bootsrap-medilab', $medilabCssDir.'bootstrap.min.css', '3.3.7');
    wp_enqueue_style('font-awesome-medilab', $medilabCssDir.'font-awesome.min.css', '4.7.0');
    wp_enqueue_style('style-medilab', $medilabCssDir.'style.css');

    wp_enqueue_script('jquery-medilab', $medilabScriptDir.'jquery.min.js', [], '1.12.4', $in_footer = true);
    wp_enqueue_script('jquery-easing-medilab', $medilabScriptDir.'jquery.easing.min.js', [], '1.3', $in_footer = true);
    wp_enqueue_script('bootstrap-js-medilab', $medilabScriptDir.'bootstrap.min.js', [], '3.3.7', $in_footer = true);
    wp_enqueue_script('custom-medilab', $medilabScriptDir.'custom.js', [], '', $in_footer = true);
    wp_enqueue_script('contactform-medilab', get_template_directory_uri().'/contactform/contactform.js', [], '', $in_footer = true);
}

function initSchedules()
{
    registerDoctorType();
    registerServiceType();
    registerTestimonialType();
    registerContactInfoType();
}

function customizerNavLogo($wp_customize)
{
    $wp_customize->add_setting('mod_nav_bar_logo', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => get_template_directory_uri().'/img/logo.png',
      'transport' => 'refresh', // or postMessage
    ));

    $wp_customize->add_section('sec_nav_bar_logo', array(
      'title' => __('Navbar logo image'),
      'description' => __('Change default logo image'),
      'priority' => 20,
      'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'logo_image_control', array(
      'label' => __('Logo image', 'theme_textdomain'),
      'section' => 'sec_nav_bar_logo',
      'settings' => 'mod_nav_bar_logo',
      'mime_type' => 'image',
    )));
}


function customizerBanner($wp_customize)
{
    $wp_customize->add_section('sec_mod_banner', array(
      'title' => __('Banner', 'theme_textdomain'),
      'description' => __('Change banner settings', 'theme_textdomain'),
      'priority' => 20,
      'capability' => 'edit_theme_options',
    ));


    // banner title
    $wp_customize->add_setting('mod_banner_title', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => 'HEALTHCARE AT YOUR DESK!!',
      'transport' => 'refresh', // or postMessage
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_banner_title', array(
      'label' => __('Banner title', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => 'mod_banner_title',
      'type' => 'text',
    )));

    // banner description
    $wp_customize->add_setting('mod_banner_description', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua.',
      'transport' => 'refresh', // or postMessage
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_banner_description', array(
      'label' => __('Banner description', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => 'mod_banner_description',
      'type' => 'text',
    )));

    // button label
    $wp_customize->add_setting('mod_banner_button_label', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => 'Make an Appointment.',
      'transport' => 'refresh', // or postMessage
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_banner_button_label', array(
      'label' => __('Button label', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => 'mod_banner_button_label',
      'type' => 'text',
    )));

    // button url
    $wp_customize->add_setting('mod_banner_button_url', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => '#contact',
      'transport' => 'refresh', // or postMessage
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_banner_button_url', array(
      'label' => __('Button Url', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => 'mod_banner_button_url',
      'type' => 'text',
    )));

    // background
    $wp_customize->add_setting('mod_banner_bg', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => get_template_directory_uri().'/img/bg-banner.jpg',
      'transport' => 'refresh', // or postMessage
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ctrl_banner_bg', array(
      'label' => __('Background image', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => 'mod_banner_bg',
      'mime_type' => 'image',
    )));

    // banner image/logo
    $wp_customize->add_setting('mod_banner_img', array(
      'type' => 'theme_mod',
      'capability' => 'edit_theme_options',
      'default' => get_template_directory_uri().'/img/logo.png',
      'transport' => 'refresh', // or postMessage
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ctrl_banner_img', array(
      'label' => __('Image inside banner', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => 'mod_banner_img',
      'mime_type' => 'image',
    )));
}

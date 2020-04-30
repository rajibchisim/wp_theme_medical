<?php
require('register_custom_post_types.php');
require('autoloader.inc.php');



add_action('wp_enqueue_scripts', 'load_script_css');
add_action('init', 'initSchedules');
add_action('widgets_init', 'init_widgets');
add_action('after_setup_theme', 'hadler_after_setup_theme');
add_action('customize_register', 'themeslug_customize_register');
add_action('wp_head', 'update_css_style');

function themeslug_customize_register($wp_customize)
{
    customizerNavbar($wp_customize);
    customizerBanner($wp_customize);
    customizerCallToAction($wp_customize);
}

function init_widgets()
{
    register_sidebar(['name' => 'Footer widget area 1', 'id' => 'footer1']);
    register_sidebar(['name' => 'Footer widget area 2', 'id' => 'footer2']);
    register_sidebar(['name' => 'Footer widget area 3','id' => 'footer3']);

    register_widget('widgets\AboutUsWidget');
    register_widget('widgets\QuickLinks');
    register_widget('widgets\SocialsWidget');
}
function hadler_after_setup_theme()
{
    register_nav_menus([
      'primary' => __('Primary Menu location'),
  ]);
    add_theme_support('post-formats', array( 'link' ));
}

function rgbTorgba($rgb, $a)
{
    return 'rgba('.hexdec(substr($rgb, 1, 2)).','.hexdec(substr($rgb, 3, 2)) .','.hexdec(substr($rgb, 5, 2)).','.$a.')';
}

function update_css_style()
{?>

  <style type="text/css">
  #banner{
    background: url(<?php echo get_theme_mod('mod_banner_bg', get_template_directory_uri().'../img/bg-banner.jpg') ?>) no-repeat fixed;
  	background-size: cover;
  }
  <?php
    $modColor = get_theme_mod('mod_banner_bg_overlay', '#0d4653');
    $modAlpha = get_theme_mod('mod_banner_bg_overlay_alpha', .78);
   ?>
  .bg-color {
    background-color: <?php echo rgbTorgba($modColor, $modAlpha) ?>;
    min-height: 650px;
  }

  <?php
    $modColor = get_theme_mod('mod_nav_bar_bg', '#1c4a5a');
   ?>
  @media (max-width: 768px) {
    .navbar-collapse {
      background: <?php echo rgbTorgba($modColor, 0.9) ?>;
    }
  }

  .top-nav-collapse {
    padding: 0;
    background: <?php echo rgbTorgba($modColor, 0.9) ?>;
  }

  <?php
    $modColor = get_theme_mod('mod_nav_bar_active_color', '#0cb8b6');
    $modAlpha = get_theme_mod('mod_nav_bar_active_color_alpha', 0.21);
   ?>
   .navbar-default .navbar-nav>.active>a, .navbar-default .navbar-nav>.active>a:focus, .navbar-default .navbar-nav>.active>a:hover {
     color: #fff;
     text-transform: uppercase;
     background-color: <?php echo rgbTorgba($modColor, $modAlpha) ?>;
   }

   .navbar-default .navbar-nav>li>a:hover, .navbar-default .navbar-nav>li>a:focus {
     color: #fff;
     text-transform: uppercase;
     background-color: <?php echo rgbTorgba($modColor, $modAlpha) ?>;
   }


  </style>



<?php
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
    wp_enqueue_script('contactform-medilab', $medilabScriptDir.'/contactform/contactform.js', [], '', $in_footer = true);
}

function initSchedules()
{
    registerDoctorType();
    registerServiceType();
    registerTestimonialType();
    registerContactInfoType();
}

function customizerNavbar($wp_customize)
{
    $wp_customize->add_section('sec_nav_bar', array(
      'title' => __('Navbar'),
      'description' => __('Customize Navbar'),
      'priority' => 20,
      'capability' => 'edit_theme_options',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'navbar_ctrl_logo_image', array(
      'label' => __('Logo image', 'theme_textdomain'),
      'section' => 'sec_nav_bar',
      'settings' => addCustomizerSetting($wp_customize, 'mod_nav_bar_logo', get_template_directory_uri().'/img/logo.png'),
      'mime_type' => 'image',
    )));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navbar_ctrl_bgcolor', array(
      'label' => __('Background color', 'theme_textdomain'),
      'section' => 'sec_nav_bar',
      'settings' => addCustomizerSetting($wp_customize, 'mod_nav_bar_bg', '#1c4a5a')
    )));
    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'navbar_ctrl_active_color', array(
      'label' => __('Active item background', 'theme_textdomain'),
      'section' => 'sec_nav_bar',
      'settings' => addCustomizerSetting($wp_customize, 'mod_nav_bar_active_color', '#0cb8b6')
    )));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'navbar_ctrl_active_color_alpha', array(
      'label' => __('Active background alpha', 'theme_textdomain'),
      'section' => 'sec_nav_bar',
      'settings' => addCustomizerSetting($wp_customize, 'mod_nav_bar_active_color_alpha', 0.21),
      'type' => 'number',
      'input_attrs' => array(
        'min' => 0,
        'max' => 1,
        'step' => .05,
      )
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
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_banner_title', array(
      'label' => __('Banner title', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => addCustomizerSetting($wp_customize, 'mod_banner_title', 'HEALTHCARE AT YOUR DESK!!'),
      'type' => 'text',
    )));

    // banner description
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_banner_description', array(
      'label' => __('Banner description', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => addCustomizerSetting($wp_customize, 'mod_banner_description'),
      'type' => 'text',
    )));

    // button label
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_banner_button_label', array(
      'label' => __('Button label', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => addCustomizerSetting($wp_customize, 'mod_banner_button_label', 'Make an Appointment.'),
      'type' => 'text',
    )));

    // button url
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_banner_button_url', array(
      'label' => __('Button Url', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => addCustomizerSetting($wp_customize, 'mod_banner_button_url', '#contact'),
      'type' => 'text',
    )));


    // banner image/logo
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ctrl_banner_img', array(
      'label' => __('Image inside banner', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => addCustomizerSetting($wp_customize, 'mod_banner_img', get_template_directory_uri().'/img/logo.png'),
      'mime_type' => 'image',
    )));

    // background
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'ctrl_banner_bg', array(
      'label' => __('Background image', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => addCustomizerSetting($wp_customize, 'mod_banner_bg', get_template_directory_uri().'/img/bg-banner.jpg'),
      'mime_type' => 'image',
    )));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'ctrl_banner_bg_overlay', array(
      'label' => __('Background overlay', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => addCustomizerSetting($wp_customize, 'mod_banner_bg_overlay', '#0d4653')
    )));

    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_banner_bg_overlay_alpha', array(
      'label' => __('Overlay alpha', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => addCustomizerSetting($wp_customize, 'mod_banner_bg_overlay_alpha', 0.78),
      'type' => 'number',
      'input_attrs' => array(
        'min' => 0,
        'max' => 1,
        'step' => .05,
      )
    )));
}

function customizerColors($wp_customize)
{
    $wp_customize->add_section('sec_mod_colors', array(
      'title' => __('Theme colors', 'theme_textdomain'),
      'description' => __('Change theme colors', 'theme_textdomain'),
      'priority' => 20,
      'capability' => 'edit_theme_options',
    ));


    // banner title
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_banner_title', array(
      'label' => __('Banner title', 'theme_textdomain'),
      'section' => 'sec_mod_banner',
      'settings' => addCustomizerSetting($wp_customize, 'mod_banner_title', 'HEALTHCARE AT YOUR DESK!!'),
      'type' => 'text',
    )));
}


function customizerCallToAction($wp_customize)
{
    $wp_customize->add_section('sec_mod_cta', array(
      'title' => __('Call to action', 'theme_textdomain'),
      'description' => __('Modify call to actions', 'theme_textdomain'),
      'priority' => 20,
      'capability' => 'edit_theme_options',
    ));


    // Cta 1 title
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_cta1_title', array(
      'label' => __('CTA 1: Title', 'theme_textdomain'),
      'section' => 'sec_mod_cta',
      'settings' => addCustomizerSetting($wp_customize, 'mod_cta1_title', 'Emergency Case'),
      'type' => 'text',
    )));
    // Cta 1 description
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_cta1_details', array(
      'label' => __('CTA 1: Description', 'theme_textdomain'),
      'section' => 'sec_mod_cta',
      'settings' => addCustomizerSetting($wp_customize, 'mod_cta1_details', 'I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
      'type' => 'textarea',
    )));
    // Cta 1 more button label
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_cta1_bt_label', array(
      'label' => __('CTA 1: Button label', 'theme_textdomain'),
      'section' => 'sec_mod_cta',
      'settings' => addCustomizerSetting($wp_customize, 'mod_cta1_bt_label', 'READ MORE'),
      'type' => 'text',
    )));
    // Cta 1 more button url
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_cta1_url', array(
      'label' => __('CTA 1: Button Url', 'theme_textdomain'),
      'section' => 'sec_mod_cta',
      'settings' => addCustomizerSetting($wp_customize, 'mod_cta1_url', '#'),
      'type' => 'text',
    )));


    // Cta 2 title
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_cta2_title', array(
      'label' => __('CTA 2: Title', 'theme_textdomain'),
      'section' => 'sec_mod_cta',
      'settings' => addCustomizerSetting($wp_customize, 'mod_cta2_title', 'Emergency Case'),
      'type' => 'text',
    )));
    // Cta 2 description
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_cta2_details', array(
      'label' => __('CTA 2: Description', 'theme_textdomain'),
      'section' => 'sec_mod_cta',
      'settings' => addCustomizerSetting($wp_customize, 'mod_cta2_details', 'I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit.'),
      'type' => 'textarea',
    )));
    // Cta 2 more button label
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_cta2_bt_label', array(
      'label' => __('CTA 2: Button label', 'theme_textdomain'),
      'section' => 'sec_mod_cta',
      'settings' => addCustomizerSetting($wp_customize, 'mod_cta2_bt_label', 'READ MORE'),
      'type' => 'text',
    )));
    // Cta 2 more button url
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_cta2_url', array(
      'label' => __('CTA 2: Button Url', 'theme_textdomain'),
      'section' => 'sec_mod_cta',
      'settings' => addCustomizerSetting($wp_customize, 'mod_cta2_url', '#'),
      'type' => 'text',
    )));


    // Cta 3 title
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_cta3_title', array(
      'label' => __('CTA 3: Title', 'theme_textdomain'),
      'section' => 'sec_mod_cta',
      'settings' => addCustomizerSetting($wp_customize, 'mod_cta3_title', 'Opening Hours'),
      'type' => 'text',
    )));
    // Cta 3 description
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_cta3_details', array(
      'label' => __('CTA 3: Description', 'theme_textdomain'),
      'section' => 'sec_mod_cta',
      'settings' => addCustomizerSetting($wp_customize, 'mod_cta3_details', '
      <table>
        <tbody>
          <tr>
            <td>Monday - Friday</td>
            <td>8.00 - 17.00</td>
          </tr>
          <tr>
            <td>Saturday</td>
            <td>9.30 - 17.30</td>
          </tr>
          <tr>
            <td>Sunday</td>
            <td>9.30 - 15.00</td>
          </tr>
        </tbody>
      </table>'),
      'type' => 'textarea',
    )));
    // Cta 3 more button label
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_cta3_bt_label', array(
      'label' => __('CTA 3: Button label', 'theme_textdomain'),
      'section' => 'sec_mod_cta',
      'settings' => addCustomizerSetting($wp_customize, 'mod_cta3_bt_label', 'READ MORE'),
      'type' => 'text',
    )));
    // Cta 3 more button url
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ctrl_cta3_url', array(
      'label' => __('CTA 3: Button Url', 'theme_textdomain'),
      'section' => 'sec_mod_cta',
      'settings' => addCustomizerSetting($wp_customize, 'mod_cta3_url', '#'),
      'type' => 'text',
    )));
}

function addCustomizerSetting($wp_customize, $id, $default='', $type = 'theme_mod', $capability = 'edit_theme_options')
{
    $wp_customize->add_setting($id, array(
    'type' => $type,
    'capability' => $capability,
    'default' => $default,
    'transport' => 'refresh', // or postMessage
  ));

    return $id;
}

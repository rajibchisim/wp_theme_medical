<?php
require('classes/ThemeHelper.class.php');
add_action('wp_head', 'update_css_style');

use ThemeHelper as H;

function getColor($colorModId, $default)
{
  //check id matched with records
  $modColor = get_theme_mod($colorModId, $default);
  $modAlpha = get_theme_mod($colorModId . '_alpha', 1);
  if ($modAlpha + 0 < 1) {
    return H::rgbTorgba($modColor, $modAlpha);
  }
  return $modColor;
}
function update_css_style()
{
  $cFooter = getColor('mod_cFooter', '#325C6A');
  $cPrimary = getColor('mod_cPrimary', '#0cb8b6');
  $cSecondary = getColor('mod_cSecondary', '#ffb737');
  $cButtons = getColor('mod_cButtons', 'rgba(12, 184, 182, 0.91)'); ?>

  <style type="text/css">
    #banner {
      background: url(<?php echo get_theme_mod('mod_banner_bg', get_template_directory_uri() . '../img/bg-banner.jpg') ?>) no-repeat fixed;
      background-size: cover;
    }

    <?php
    $modColor = get_theme_mod('mod_banner_bg_overlay', '#0d4653');
    $modAlpha = get_theme_mod('mod_banner_bg_overlay_alpha', .78); ?>.bg-color {
      background-color: <?php echo H::rgbTorgba($modColor, $modAlpha) ?>;
      min-height: 650px;
    }

    <?php
    $modColor = get_theme_mod('mod_nav_bar_bg', '#1c4a5a'); ?>@media (max-width: 768px) {
      .navbar-collapse {
        background: <?php echo H::rgbTorgba($modColor, 0.9) ?>;
      }
    }

    .top-nav-collapse {
      padding: 0;
      background: <?php echo H::rgbTorgba($modColor, 0.9) ?>;
    }

    <?php $modColor = get_theme_mod('mod_nav_bar_active_color', '#0cb8b6');
    $modAlpha = get_theme_mod('mod_nav_bar_active_color_alpha', 0.21); ?>.navbar-default .navbar-nav>.active>a,
    .navbar-default .navbar-nav>.active>a:focus,
    .navbar-default .navbar-nav>.active>a:hover {
      color: #fff;
      text-transform: uppercase;
      background-color: <?php echo H::rgbTorgba($modColor, $modAlpha) ?>;
    }

    .navbar-default .navbar-nav>li>a:hover,
    .navbar-default .navbar-nav>li>a:focus {
      color: #fff;
      text-transform: uppercase;
      background-color: <?php echo H::rgbTorgba($modColor, $modAlpha) ?>;
    }

    /* Colors customizer */
    hr.botm-line {
      height: 3px;
      width: 60px;
      background: <?php echo $cSecondary ?>;
      position: relative;
      border: 0;
      margin: 20px 0 20px 0;
    }

    .btn-appoint,
    .btn-appoint:hover,
    .btn-appoint:focus {
      margin-top: 30px;
      padding: 10px 20px;
      font-size: 12px;
      background-color: <?php echo $cButtons ?>;
      border-radius: 3px;
      color: #fff;
    }

    .icon i {
      color: <?php echo $cPrimary ?>;
      font-size: 45px;
      margin-bottom: 25px;
    }

    .schedule-tab {
      background-color: <?php echo $cPrimary ?>;
      float: left;
    }

    .more-features-box-text-icon {
      float: left;
      width: 40px;
      height: 40px;
      padding-top: 6px;
      background: <?php echo $cPrimary ?>;
      -moz-border-radius: 50%;
      -webkit-border-radius: 50%;
      border-radius: 50%;
      color: #fff;
      text-align: center;
    }

    .icon-play,
    .icon-play:hover,
    .icon-play:focus {
      background-color: <?php echo $cPrimary ?>;
      padding: 5px 10px;
      color: #fff;
      text-decoration: none;
      padding: 5px 17px;
      margin-top: 26px;
      display: block;
    }

    .text-primary {
      color: <?php echo $cPrimary ?>;
    }

    .btn-form,
    .btn-form:hover,
    .btn-form:focus {
      background-color: <?php echo $cButtons ?>;
      color: #fff;
      border-radius: 0px;
      padding: 10px 20px;
    }


    #footer {
      background-color: <?php echo $cFooter ?>;
    }

    /* socials */
    .bglight-blue {
      background-color: #3498DB;
    }

    .bgred {
      background-color: #E74C3C;
    }

    .bgdark-blue {
      background-color: #2C3E50;
    }

    .bglight-blue {
      background-color: #3498DB;
    }
  </style>



<?php
}

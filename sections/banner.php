<?php echo get_theme_mod('mod_banner_img');
echo get_theme_mod('mod_banner_img');
echo get_theme_mod('mod_banner_description');
echo get_theme_mod('mod_banner_button_url');
echo get_theme_mod('mod_banner_button_label');
?>
<div class="banner-info">
  <div class="banner-logo text-center">
    <img src="<?php echo get_theme_mod('mod_banner_img')?>" class="img-responsive">
  </div>
  <div class="banner-text text-center">
    <h1 class="white"><?php echo get_theme_mod('mod_banner_title', 'Hello') ?></h1>
    <p><?php echo get_theme_mod('mod_banner_description') ?></p>
    <a href="<?php echo get_theme_mod('mod_banner_button_url') ?>" class="btn btn-appoint"><?php echo get_theme_mod('mod_banner_button_label') ?></a>
  </div>
  <div class="overlay-detail text-center">
    <a href="#service"><i class="fa fa-angle-down"></i></a>
  </div>
</div>

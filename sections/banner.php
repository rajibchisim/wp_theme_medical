<section id="banner" class="banner">
  <div class="bg-color">
    <div class="container">
      <div class="row">
        <div class="banner-info">
          <div class="banner-logo text-center">
            <img src="<?php echo get_theme_mod('mod_banner_img', get_template_directory_uri().'/img/logo.png')?>" class="img-responsive">
          </div>
          <div class="banner-text text-center">
            <h1 class="white"><?php echo get_theme_mod('mod_banner_title', 'HEALTHCARE AT YOUR DESK!!') ?></h1>
            <p><?php echo get_theme_mod('mod_banner_description', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod<br>tempor incididunt ut labore et dolore magna aliqua.') ?></p>
            <a href="<?php echo get_theme_mod('mod_banner_button_url', '#contact') ?>" class="btn btn-appoint"><?php echo get_theme_mod('mod_banner_button_label', 'Make an Appointment.') ?></a>
          </div>
          <div class="overlay-detail text-center">
            <a href="#service"><i class="fa fa-angle-down"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

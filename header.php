<!DOCTYPE html>
<html lang="en">
<?php $imageSrc = get_template_directory_uri().'/img/' ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Theme development based on Medilab Free Bootstrap</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"> -->
  <!-- =======================================================
    Theme Name: Medilab Bootstrap Free
    Theme URL:
    Author: rajibchisim
    Author URL: rajibchisim.com
    Theme design credit: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
  ======================================================= -->
  <?php wp_head() ?>
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="col-md-12">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><img src="<?php echo get_theme_mod('mod_nav_bar_logo') ?>" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
          </div>
          <?php wp_nav_menu([
            "theme_location" => 'primary',
            'container_class' => "collapse navbar-collapse navbar-right",
            'container_id' => "myNavbar",
            'menu_class' => "nav navbar-nav",
            ]) ?>
        </div>
      </div>
    </nav>

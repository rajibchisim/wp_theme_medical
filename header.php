<!DOCTYPE html>
<html lang="en">
<?php $imageSrc = get_template_directory_uri().'/img/' ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medilab Free Bootstrap HTML5 Template</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <!-- <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css"> -->
  <!-- =======================================================
    Theme Name: Medilab
    Theme URL: https://bootstrapmade.com/medilab-free-medical-bootstrap-theme/
    Author: BootstrapMade.com
    Author URL: https://bootstrapmade.com
  ======================================================= -->
  <?php wp_head() ?>
</head>
<?php
// new WP_Query( array(
//         'post_type' => 'post',
//         'cat' => 'quick_link',
//         'posts_per_page' => 2,
//         'tax_query' => array( array(
//             'taxonomy' => 'post_format',
//             'field' => 'slug',
//             'terms' => array('post-format-aside', 'post-format-gallery', 'post-format-link', 'post-format-image', 'post-format-quote', 'post-format-status', 'post-format-audio', 'post-format-chat', 'post-format-video'),
//             'operator' => 'NOT IN'
//            ) )
//        ));
 ?>

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

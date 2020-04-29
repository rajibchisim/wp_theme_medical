<?php
require(get_template_directory().'/autoloader.inc.php');

$options = [
  'post_type' => 'post',
  'tag' => 'section-featured-about',
];
$section = new WP_Query($options);
$postMultipart = new PostMultipart($section->get_posts());
    ?>
<section id="about" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-4 col-xs-12">
        <div class="section-title">
          <h2 class="head-title lg-line"><?php echo $postMultipart->get_the_title() ?></h2>
          <hr class="botm-line">
          <p class="sec-para"><?php echo $postMultipart->get_the_content() ?></p>
          <a href="" style="color: #0cb8b6; padding-top:10px;">Know more..</a>
        </div>
      </div>
      <div class="col-md-9 col-sm-8 col-xs-12">
        <div style="visibility: visible;" class="col-sm-9 more-features-box">

          <?php foreach ($postMultipart->get_multipart() as $part):?>
          <div class="more-features-box-text">
            <div class="more-features-box-text-icon"> <i class="fa fa-angle-right" aria-hidden="true"></i> </div>
            <div class="more-features-box-text-description">
              <h3><?php echo $part['title']?></h3>
              <p><?php echo $part['content']?></p>
            </div>
          </div>
        <?php endforeach?>

        </div>
      </div>
    </div>
  </div>
</section>

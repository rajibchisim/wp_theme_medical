<section id="cta-2" class="section-padding">
  <div class="container">
    <div class=" row">

      <?php
      $options = [
        'post_type' => 'post',
        'tag' => 'section-about-us',
      ];
      $section = new WP_Query($options);
      if ($section->have_posts()) {
          $section->the_post()?>

        <div class="col-md-2"></div>
        <div class="text-right-md col-md-4 col-sm-4">
          <h2 class="section-title white lg-line"><?php echo get_the_title() ?></h2>
        </div>
        <div class="col-md-4 col-sm-5">
          <?php echo get_the_content() ?>
          <p class="text-right text-primary"><i>— Medilap Healthcare</i></p>
        </div>
        <div class="col-md-2"></div>

    <?php
      }
    wp_reset_postdata() ?>      

    </div>
  </div>
</section>

<section id="testimonial" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <?php
        $options = [
          'post_type' => 'post',
          'tag' => 'section-testimonial',
        ];
        $section = new WP_Query($options);
        if ($section->have_posts()) {
            $section->the_post()?>
          <h2 class="ser-title"><?php echo get_the_title() ?></h2>
          <hr class="botm-line">
      <?php
        }
      wp_reset_postdata() ?>

      </div>
      <?php
      $options = [
        'post_type' => 'testimonial',
        'orderby' => 'date',
        'order' => 'asc',
      ];
      $testimonials = new WP_Query($options);
      if ($testimonials->have_posts()) {
          while ($testimonials->have_posts()) {
              $testimonials->the_post(); ?>
      <div class="col-md-4 col-sm-4">
        <div class="testi-details">
          <!-- Paragraph -->
          <p><?php echo get_the_content() ?></p>
        </div>
        <div class="testi-info">
          <!-- User Image -->
          <a href="#"><img src="<?php echo the_field('profile_picture') ?>" alt="" class="img-responsive"></a>
          <!-- User Name -->
          <h3><?php echo get_the_title() ?><span><?php echo $post->location ?></span></h3>
        </div>
      </div>
      <?php
          }
      }
      wp_reset_postdata() ?>
    </div>
  </div>
</section>

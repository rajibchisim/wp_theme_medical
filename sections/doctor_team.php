<?php global $imageSrc ?>
<section id="doctor-team" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <?php
        $options = [
          'post_type' => 'post',
          'tag' => 'section-meet-our-doctor',
        ];
        $section = new WP_Query($options);
        if ($section->have_posts()) {
            $section->the_post()?>

        <h2 class="ser-title"><?php echo get_the_title() ?></h2>

      <?php
        }
      wp_reset_postdata() ?>
        <hr class="botm-line">
      </div>
      <?php
      $options = [
        'post_type' => 'doctor',
        'orderby' => 'date',
        'order' => 'asc',
      ];
      $doctors = new WP_Query($options);
      if ($doctors->have_posts()) {
          while ($doctors->have_posts()) {
              $doctors->the_post(); ?>

          <div class="col-md-3 col-sm-3 col-xs-6">
            <div class="thumbnail">
              <img src="<?php echo the_field('profile_picture') ?>" alt="..." class="team-img">
              <div class="caption">
                <h3><?php echo $post->title ?></h3>
                <p><?php echo $post->job_title ?></p>

                <?php if ($post->social_facebook !== '' || $post->social_tweeter !== '' || $post->social_google_plus !== '') {?>
                <ul class="list-inline">
                  <?php if ($post->social_facebook !== '') {?>
                  <li><a href="<?php echo $post->social_facebook ?>"><i class="fa fa-facebook"></i></a></li>

                  <?php }
                   if ($post->social_tweeter !== '') { ?>
                  <li><a href="<?php echo $post->social_tweeter ?>"><i class="fa fa-twitter"></i></a></li>

                  <?php }
                   if ($post->social_google_plus !== '') { ?>
                  <li><a href="<?php echo $post->social_google_plus ?>"><i class="fa fa-google-plus"></i></a></li>
                <?php } ?>
                </ul>
              <?php } ?>

              </div>
            </div>
          </div>

          <?php
          }
      }
      wp_reset_postdata();
      ?>
    </div>
  </div>
</section>

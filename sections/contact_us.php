<section id="contact" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="ser-title">Contact us</h2>
        <hr class="botm-line">
      </div>
      <div class="col-md-4 col-sm-4">
        <?php
        $contactInfo = new WP_Query([
          'post_type' => 'contact_info'
        ]);

        if ($contactInfo->have_posts()) {
          $contactInfo->the_post(); ?>
          <h3><?php echo get_the_title() ?></h3>
          <div class="space"></div>
          <p><i class="fa <?php echo $post->icon_for_address ?> fa-fw pull-left fa-2x"></i><?php echo $post->address ?></p>
          <div class="space"></div>
          <p><i class="fa <?php echo $post->icon_contact_email ?> fa-fw pull-left fa-2x"></i><?php echo $post->contact_email ?></p>
          <div class="space"></div>
          <p><i class="fa <?php echo $post->icon_phone_number ?> fa-fw pull-left fa-2x"></i><?php echo $post->phone_number ?></p>
      </div>

    <?php
        }
        wp_reset_postdata();
    ?>
    <div class="col-md-8 col-sm-8 marb20">
      <?php include('contact_form.php') ?>
    </div>
    </div>
  </div>
</section>
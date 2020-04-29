

<section id="service" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-sm-4">
        <?php
        $option = array(
            'post_type' => 'post',
            'tag' => 'section-our-service',
        );
        $ourService = new WP_Query($option);
        if ($ourService->have_posts()) {
            $ourService->the_post() ?>
        <h2 class="ser-title"><?php echo get_the_title() ?></h2>
        <hr class="botm-line">
        <p><?php echo get_the_content() ?></p>
      <?php
        }
      wp_reset_postdata()?>
      </div>

      <div class="col-md-8 col-sm-8">

<?php
$option = array(
    'post_type' => 'service',
    'order_by' => 'date',
    'order' => 'asc'
);
$services = new WP_Query($option);
$totalServices = $services->found_posts;
if ($totalServices > 0) {
    $colsPerRow = 2;

    for ($i=0; $i < $totalServices; $i += $colsPerRow) { //row?>
        <!-- Start row -->
          <div class="row">
<?php $colIndexLimit = min($i+$colsPerRow, $totalServices);
          for ($j = $i; $j < $colIndexLimit; $j++) { // col
              $services->the_post(); ?>
                <div class="col-md-6 col-sm-6">
                  <div class="service-info">
                    <div class="icon">
                      <i class="fa <?php echo $post->icon ?>"></i>
                    </div>
                    <div class="icon-info">
                      <h4><?php echo $post->service_title ?></h4>
                      <p><?php echo $post->description ?></p>
                    </div>
                  </div>
                </div>
    <?php
          }?>
        </div>
        <!-- End row -->
<?php
      }
}
wp_reset_postdata();?>
      </div>
    </div>
  </div>
</section>

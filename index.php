<?php get_header() ?>
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">

      <div class="container">
        <div class="row">
          <?php get_template_part('sections/banner')?>
        </div>
      </div>
    </div>
  </section>
  <!--/ banner-->
  <!--service-->
  <?php get_template_part('/sections/our_service') ?>
  <!--/ service-->
  <!--cta-->
  <section id="cta-1" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="schedule-tab">
          <div class="col-md-4 col-sm-4 bor-left">
            <div class="mt-boxy-color"></div>
            <div class="medi-info">
              <h3>Emergency Case</h3>
              <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <a href="#" class="medi-info-btn">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4">
            <div class="medi-info">
              <h3>Emergency Case</h3>
              <p>I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
              <a href="#" class="medi-info-btn">READ MORE</a>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 mt-boxy-3">
            <div class="mt-boxy-color"></div>
            <div class="time-info">
              <h3>Opening Hours</h3>
              <table style="margin: 8px 0px 0px;" border="1">
                <tbody>
                  <tr>
                    <td>Monday - Friday</td>
                    <td>8.00 - 17.00</td>
                  </tr>
                  <tr>
                    <td>Saturday</td>
                    <td>9.30 - 17.30</td>
                  </tr>
                  <tr>
                    <td>Sunday</td>
                    <td>9.30 - 15.00</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--cta-->
  <!--about-->
  <?php get_template_part('sections/featured_about') ?>
  <!--/ about-->

  <!--doctor team-->
  <?php get_template_part('sections/doctor_team')  ?>
  <!--/ doctor team-->

  <!--testimonial-->
  <?php get_template_part('sections/testimonial') ?>
  <!--/ testimonial-->
  <!--cta 2-->
  <?php get_template_part('sections/about_us') ?>
  <!--cta-->
  <!--contact-->
  <?php get_template_part('sections/contact_us')?>
  <!--/ contact-->

  <!--footer-->
<?php get_footer() ?>

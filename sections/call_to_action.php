<section id="cta-1" class="section-padding">
  <div class="container">
    <div class="row">
      <div class="schedule-tab">
        <div class="col-md-4 col-sm-4 bor-left">
          <div class="mt-boxy-color"></div>
          <div class="medi-info">
            <h3><?php echo get_theme_mod('mod_cta1_title', 'Emergency Case') ?></h3>
            <p><?php echo get_theme_mod('mod_cta1_details', 'I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit.') ?></p>
          <?php if (get_theme_mod('mod_cta1_bt_label') !== ''): ?>
            <a href="<?php echo get_theme_mod('mod_cta1_url', '#') ?>" class="medi-info-btn"><?php echo get_theme_mod('mod_cta1_bt_label', 'READ MORE') ?></a>
          <?php endif ?>
          </div>
        </div>

        <div class="col-md-4 col-sm-4">
          <div class="medi-info">
            <h3><?php echo get_theme_mod('mod_cta2_title', 'Emergency Case') ?></h3>
            <p><?php echo get_theme_mod('mod_cta2_details', 'I am text block. Edit this text from Appearance / Customize / Homepage header columns. Lorem ipsum dolor sit amet, consectetur adipiscing elit.') ?></p>
          <?php if (get_theme_mod('mod_cta2_bt_label') !== ''): ?>
            <a href="<?php echo get_theme_mod('mod_cta2_url', '#') ?>" class="medi-info-btn"><?php echo get_theme_mod('mod_cta2_bt_label', 'READ MORE') ?></a>
          <?php endif ?>
          </div>
        </div>

        <div class="col-md-4 col-sm-4 mt-boxy-3">
          <div class="mt-boxy-color"></div>
          <div class="time-info">
            <h3><?php echo get_theme_mod('mod_cta3_title', 'Opening Hours') ?></h3>
            <p><?php echo get_theme_mod('mod_cta3_details', '
            <table>
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
            </table>') ?></p>
          <?php if (get_theme_mod('mod_cta3_bt_label') !== ''): ?>
            <a href="<?php echo get_theme_mod('mod_cta3_url', '#') ?>" class="medi-info-btn"><?php echo get_theme_mod('mod_cta3_bt_label', 'READ MORE') ?></a>
          <?php endif ?>
          </div>
        </div>

      </div>
    </div>
  </div>
</section>

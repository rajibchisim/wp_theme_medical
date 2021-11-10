<div class="contact-info">
  <h3 class="cnt-ttl">Having Any Query! Or Book an appointment</h3>
  <div class="space"></div>
  <div id="sendmessage">Your message has been sent. Thank you!</div>
  <div id="errormessage"></div>
  <form action="" data-url="<?php echo admin_url('admin-ajax.php') ?>" method="post" role="form" class="contactForm">
    <div class="form-group">
      <input type="text" name="name" class="form-control br-radius-zero" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
      <div class="validation"></div>
    </div>
    <div class="form-group">
      <input type="email" class="form-control br-radius-zero" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
      <div class="validation"></div>
    </div>
    <div class="form-group">
      <input type="text" class="form-control br-radius-zero" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
      <div class="validation"></div>
    </div>
    <div class="form-group">
      <textarea class="form-control br-radius-zero" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
      <div class="validation"></div>
    </div>

    <div class="form-action">
      <button type="submit" class="btn btn-form">Send Message</button>
    </div>
    <input type="hidden" name="action" value="contact_form_action">
    <input type="hidden" name="_wpnonce" value="<?php echo wp_create_nonce('contact_nonce') ?>">
  </form>
</div>
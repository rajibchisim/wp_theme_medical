<?php
add_action('wp_ajax_contact_form_action', 'handleAjax');
add_action('wp_ajax_nopriv_contact_form_action', 'handleAjax');

function handleAjax()
{
    if (!DOING_AJAX || !check_ajax_referer('contact_nonce')) {
        wp_send_json([
            'msg' => 'error'
        ], 200);
        wp_die();
        return;
    }

    $message = sanitize_textarea_field($_POST['message'] ?? '');
    $subject = sanitize_text_field($_POST['subject'] ?? '');
    $name = sanitize_text_field($_POST['name'] ?? '');
    $email = sanitize_email($_POST['email'] ?? '');

    $emailBody = 'Hello ' . $_POST['name'] . ', ' . PHP_EOL . 'Thank you for visiting my site.' . PHP_EOL . 'Your submitted message:' . PHP_EOL .
        '"' . $_POST['message'] . '"' . PHP_EOL . 'Thank you.' . PHP_EOL . '-RajibChisim';

    if ($_POST['sendmail'] === '1') {
        wp_mail($_POST['email'], $_POST['subject'], $$emailBody);
    }

    wp_insert_post([
        'post_type' => 'message',
        'post_title' => $subject,
        'post_content' => $message,
        'meta_input' => ['contact_form' => [
            'sender' => $name,
            'email' => $email,
        ]],
    ]);

    wp_send_json([
        'msg' => 'OK',
    ], 200);

    wp_die();
    return;
}

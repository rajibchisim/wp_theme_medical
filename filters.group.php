<?php
add_filter('extract_paragraph_innerHtml', 'paragraph_content_filter_handler');
add_filter('extract_header_innerHtml', 'header_content_filter_handler');

function paragraph_content_filter_handler($para, $trimTrails = true)
{
    $paraRegx = '/<p>(.*[\n]*.*[\n]*.*[\n]*.*[\n]*.*)<\/p>/';
    preg_match($paraRegx, $para, $matches, PREG_OFFSET_CAPTURE);
    return $trimTrails ? trim(esc_html($matches[1][0])) : esc_html($matches[1][0]);
}

function header_content_filter_handler($header, $trimTrails = true)
{
    $headRegx = '/<h[1-6]>(.*[\n]*.*[\n]*.*[\n]*.*)<\/h[1-6]>/';
    preg_match($headRegx, $header, $matches, PREG_OFFSET_CAPTURE);
    return $trimTrails ? trim(esc_html($matches[1][0])) : esc_html($matches[1][0]);
}

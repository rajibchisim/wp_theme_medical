<?php
/**
 *
 */
class PostMultipart
{
    private $post;
    private $title;
    private $content;
    private $multiPartContent;
    public function __construct($post)
    {
        $this->post = $post[0];
        $this->title = $this->post->post_title;
        $parts = explode('<p>--section-break--</p>', $this->post->post_content);
        $this->content = array_shift($parts);
        $this->multiPartContent = array();

        //
        for ($i=0; $i < count($parts); $i++) {
            $this->multiPartContent[$i]['title'] = apply_filters('extract_header_innerHtml', $parts[$i]);
            $this->multiPartContent[$i]['content'] = apply_filters('extract_paragraph_innerHtml', $parts[$i]);
        }
    }
    public function get_the_title()
    {
        return $this->title;
    }
    public function get_the_content()
    {
        return $this->content;
    }
    public function get_multipart()
    {
        return $this->multiPartContent;
    }
}

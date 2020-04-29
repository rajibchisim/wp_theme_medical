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
        $headRegx = '/(<h[1-6]>)(.*)(<\/h[1-6]>)/';
        $paraRegx = '/(<p>)(.*)(<\/p>)/';

        for ($i=0; $i < count($parts); $i++) {
            preg_match($headRegx, $parts[$i], $matches, PREG_OFFSET_CAPTURE);
            $this->$multiPartContent[$i]['title'] = $matches[2][0];

            preg_match($paraRegx, $parts[$i], $matches, PREG_OFFSET_CAPTURE);
            $this->$multiPartContent[$i]['content'] = $matches[2][0];
        }

        $this->post = null;
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
        return $this->$multiPartContent;
    }
}

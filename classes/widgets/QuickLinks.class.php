<?php
namespace widgets;

/**
 * Adds Foo_Widget widget.
 */
class QuickLinks extends \WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'ml_quick_links_widget', // Base ID
            'ML Quick links', // Name
            array( 'description' => __('List of Post format(Link) and quick-links category', 'text_domain'), ) // Args
        );
    }

    /**
     * Front-end display of widget.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget($args, $instance)
    {
        extract($args);
        $title = apply_filters('widget_title', $instance['title']);

        $links = new \WP_Query([
          'post_type' => 'post',
          'cat' => get_cat_id('quick-link')
        ]);
        $linkPosts = $links->get_posts();
        // var_dump($linkPosts)?>

          <div class="ftr-tle">
            <h4 class="white no-padding"><?php echo $title ?></h4>
          </div>
        <?php if (count($linkPosts) > 0): ?>
          <div class="info-sec">
            <ul class="quick-info">
            <?php while (count($linkPosts) > 0): $linkPost = array_pop($linkPosts); ?>
              <li><a href="<?php echo \apply_filters('extract_paragraph_innerHtml', $linkPost->post_content) ?>"><i class="fa fa-circle"></i><?php echo $linkPost->post_title?></a></li>
            <?php endwhile ?>
            </ul>
          </div>
        <?php endif; ?>

      <?php
    }

    /**
     * Back-end widget form.
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     */
    public function form($instance)
    {
        if (isset($instance[ 'title' ])) {
            $title = $instance[ 'title' ];
        } else {
            $title = __('New title', 'text_domain');
        } ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
    <?php
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update($new_instance, $old_instance)
    {
        $instance = array();
        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title']) : '';

        return $instance;
    }
} // class Foo_Widget

?>

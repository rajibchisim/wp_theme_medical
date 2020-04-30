<?php
namespace widgets;

/**
 * Adds Foo_Widget widget.
 */
class SocialsWidget extends \WP_Widget
{

    /**
     * Register widget with WordPress.
     */
    public function __construct()
    {
        parent::__construct(
            'social_links_widget', // Base ID
            'RC Social links', // Name
            array( 'description' => __('List of social links', 'text_domain'), ) // Args
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
        $title = apply_filters('widget_title', $instance['title']); ?>

        <div class="ftr-tle">
          <h4 class="white no-padding"><?php echo $title ?></h4>
        </div>
        <div class="info-sec">
          <ul class="social-icon">
            <li class="bglight-blue"><i class="fa fa-facebook"></i></li>
            <li class="bgred"><i class="fa fa-google-plus"></i></li>
            <li class="bgdark-blue"><i class="fa fa-linkedin"></i></li>
            <li class="bglight-blue"><i class="fa fa-twitter"></i></li>
          </ul>
        </div>

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

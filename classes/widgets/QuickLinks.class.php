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
            'quick_links_widget', // Base ID
            'RC Quick links', // Name
            array( 'description' => __('RC Short about us', 'text_domain'), ) // Args
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
        $description = $instance['description'];
        //
        // echo $before_widget;
        // if (! empty($title)) {
        //     echo $before_title . $title . $after_title;
        // }
        // echo __('Hello, World!', 'text_domain');
        // echo $after_widget;?>

        <div class="row">
          <div class="col-md-4 col-sm-4 marb20">
            <div class="ftr-tle">
              <h4 class="white no-padding"><?php echo $title ?></h4>
            </div>
            <div class="info-sec">
              <p><?php echo $description ?></p>
            </div>
          </div>
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
        }

        if (isset($instance['description'])) {
            $des = $instance[ 'description' ];
        } else {
            $des = 'Enter description';
        } ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <div id="rc-quick-link-inputs">
          <label for="<?php echo $this->get_field_name('description'); ?>">Write short about us description.</label>
          <input id="<?php echo $this->get_field_id('description'); ?>" name="<?php echo $this->get_field_name('description'); ?>" class="widefat" type='text' value="<?php echo esc_attr($des); ?>"/>
        </div>
        <div class="">
          <button type="button" name="button" onclick="addField()">Add</button>
        </div>
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
        $instance['description'] = (!empty($new_instance['description'])) ? strip_tags($new_instance['description']) : '';


        return $instance;
    }
} // class Foo_Widget

?>

<script type="text/javascript">
function addField(){
  console.log('button cliked');
}
</script>

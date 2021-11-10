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
            'ml_social_links_widget', // Base ID
            'ML Social links', // Name
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
        <?php if (isset($instance['showFb'])) {
            if ($instance['showFb'] === 'show') {
                ?>
            <li class="bglight-blue"><a href="<?php echo $instance['urlFb'] ?? '' ?>"><i class="fa fa-facebook"></i></a></li>
          <?php
            }
        } ?>
        <?php if (isset($instance['showGp'])) {
            if ($instance['showGp'] === 'show') {?>
            <li class="bgred"><a href="<?php echo $instance['urlGp'] ?? '' ?>"><i class="fa fa-google-plus"></i></a></li>
          <?php }
        } ?>
        <?php if (isset($instance['showIn'])) {
            if ($instance['showIn'] === 'show') {?>
            <li class="bgdark-blue"><a href="<?php echo $instance['urlIn'] ?? '' ?>"><i class="fa fa-linkedin"></i></a></li>
          <?php }
        } ?>
        <?php if (isset($instance['showTw'])) {
            if ($instance['showTw'] === 'show') {?>
            <li class="bglight-blue"><a href="<?php echo $instance['urlTw'] ?? '' ?>"><i class="fa fa-twitter"></i></a></li>
          <?php }
        } ?>
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
        }
        if (isset($instance[ 'showFb' ])) {
            $showFb = $instance[ 'showFb' ];
        } else {
            $showFb = '';
        }
        if (isset($instance[ 'urlFb' ])) {
            $urlFb = $instance[ 'urlFb' ];
        } else {
            $urlFb = '';
        }
        if (isset($instance[ 'showTw' ])) {
            $showTw = $instance[ 'showTw' ];
        } else {
            $showTw = '';
        }
        if (isset($instance[ 'urlTw' ])) {
            $urlTw = $instance[ 'urlTw' ];
        } else {
            $urlTw = '';
        }
        if (isset($instance[ 'showIn' ])) {
            $showIn = $instance[ 'showIn' ];
        } else {
            $showIn = '';
        }
        if (isset($instance[ 'urlIn' ])) {
            $urlIn = $instance[ 'urlIn' ];
        } else {
            $urlIn = '';
        }
        if (isset($instance[ 'showGp' ])) {
            $showGp = $instance[ 'showGp' ];
        } else {
            $showGp = '';
        }
        if (isset($instance[ 'urlGp' ])) {
            $urlGp = $instance[ 'urlGp' ];
        } else {
            $urlGp = '';
        } ?>
        <p>
            <label for="<?php echo $this->get_field_name('title'); ?>"><?php _e('Title:'); ?></label>
            <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" />
        </p>
        <div style="display: flex; align-items: center; margin-bottom: 8px;">
          <input type="checkbox" id="<?php echo $this->get_field_id('showFb') ?>" name="<?php echo $this->get_field_name('showFb') ?>" value="show" <?php echo $showFb === 'show' ? 'checked': '' ?> style="margin-top: 1px; flex-basis: 5%;">
          <label for="<?php echo $this->get_field_id('showFb') ?>" style="flex-basis: 25%;">Facebook:</label>
          <input type="text" name="<?php echo $this->get_field_name('urlFb') ?>" value="<?php echo esc_attr($urlFb) ?>" style="flex-basis: 70%;">
        </div>
        <div style="display: flex; align-items: center; margin-bottom: 8px;">
          <input type="checkbox" id="<?php echo $this->get_field_id('showTw') ?>" name="<?php echo $this->get_field_name('showTw') ?>" value="show" <?php echo $showTw === 'show' ? 'checked': '' ?> style="flex-basis: 5%;">
          <label for="<?php echo $this->get_field_id('showTw') ?>" style="flex-basis: 25%;">Tweeter:</label>
          <input type="text" name="<?php echo $this->get_field_name('urlTw') ?>" value="<?php echo esc_attr($urlTw) ?>" style="flex-basis: 70%;">
        </div>
        <div style="display: flex; align-items: center; margin-bottom: 8px;">
          <input type="checkbox" id="<?php echo $this->get_field_id('showIn') ?>" name="<?php echo $this->get_field_name('showIn') ?>" value="show" <?php echo $showIn === 'show' ? 'checked': '' ?> style="margin-top: 1px; flex-basis: 5%;">
          <label for="<?php echo $this->get_field_id('showIn') ?>" style="flex-basis: 25%;">Linkedin:</label>
          <input type="text" name="<?php echo $this->get_field_name('urlIn') ?>" value="<?php echo esc_attr($urlIn) ?>" style="flex-basis: 70%;">
        </div>
        <div style="display: flex; align-items: center; margin-bottom: 8px;">
          <input type="checkbox" id="<?php echo $this->get_field_id('showGp') ?>" name="<?php echo $this->get_field_name('showGp') ?>" value="show" <?php echo $showGp === 'show' ? 'checked': '' ?> style="flex-basis: 5%;">
          <label for="<?php echo $this->get_field_id('showGp') ?>" style="flex-basis: 25%">Google+:</label>
          <input type="text" name="<?php echo $this->get_field_name('urlGp') ?>" value="<?php echo esc_attr($urlGp) ?>" style="flex-basis: 70%;">
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
        $instance['showFb'] = (!empty($new_instance['showFb'])) ? strip_tags($new_instance['showFb']) : '';
        $instance['showTw'] = (!empty($new_instance['showTw'])) ? strip_tags($new_instance['showTw']) : '';
        $instance['showIn'] = (!empty($new_instance['showIn'])) ? strip_tags($new_instance['showIn']) : '';
        $instance['showGp'] = (!empty($new_instance['showGp'])) ? strip_tags($new_instance['showGp']) : '';
        $instance['urlFb'] = (!empty($new_instance['urlFb'])) ? strip_tags($new_instance['urlFb']) : '';
        $instance['urlTw'] = (!empty($new_instance['urlTw'])) ? strip_tags($new_instance['urlTw']) : '';
        $instance['urlIn'] = (!empty($new_instance['urlIn'])) ? strip_tags($new_instance['urlIn']) : '';
        $instance['urlGp'] = (!empty($new_instance['urlGp'])) ? strip_tags($new_instance['urlGp']) : '';
        return $instance;
    }
    private function storeVars($key, $instance, $new_instance, $old_instance)
    {
        $instance[$key] = (!empty($new_instance[$key])) ? strip_tags($new_instance[$key]) : '';
    }
} // class Foo_Widget

?>

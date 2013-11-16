<?php

class social_interaction_buttons extends WP_Widget {

	// constructor
    function social_interaction_buttons() {
        parent::WP_Widget(false, $name = __('Social Interaction Buttons', 'social_interaction_buttons') );
    }

	// widget form creation
function form($instance) {

// Check values
if( $instance) {
     $twitteracc = esc_attr($instance['twitteracc']);

} else {
     $twitteracc = '';

}
?>

<p>
<label for="<?php echo $this->get_field_id('twitteracc'); ?>"><?php _e('Twitter Account:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('twitteracc'); ?>" name="<?php echo $this->get_field_name('twitteracc'); ?>" type="text" value="<?php echo $twitteracc; ?>" />
</p>

<?php
}

	// update widget
function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['twitteracc'] = strip_tags($new_instance['twitteracc']);
     return $instance;
}

	// display widget
function widget($args, $instance) {
   extract( $args );
   // these are the widget options
   $title = apply_filters('widget_title', $instance['twitteracc']);

   echo $before_widget;
   // Display the widget
   echo '<div class="widget-text wp_widget_plugin_box" style:>';

   
   // Get $select value
	if( $twitteracc ) {
		include_once "includes/twitter-follow.php";
			}	
		
   echo '</div>';
   echo $after_widget;
}
}	
// register widget
add_action('widgets_init', create_function('', 'return register_widget("social_interaction_buttons");'));

?>
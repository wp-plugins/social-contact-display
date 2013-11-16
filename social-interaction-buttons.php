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
	 $facebooklike = esc_attr($instance['facebooklike']);
	 $googleplus = esc_attr($instance['googleplus']);

} else {
     $twitteracc = '';
	 $facebooklike = '';
	 $googleplus = '';

}
?>
<h3>Twitter</h3>

<p>
<label for="<?php echo $this->get_field_id('twitteracc'); ?>"><?php _e('Twitter Account:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('twitteracc'); ?>" name="<?php echo $this->get_field_name('twitteracc'); ?>" type="text" value="<?php echo $twitteracc; ?>" />
</p>
<hr>
<h3>Facebook</h3>

<p>
Do you want to include Facebook Like and Share?
<input id="<?php echo $this->get_field_id('facebooklike'); ?>" name="<?php echo $this->get_field_name('facebooklike'); ?>" type="checkbox" value="1" <?php checked( '1', $facebooklike ); ?> />
<label for="<?php echo $this->get_field_id('facebooklike'); ?>"><?php _e('', 'wp_widget_plugin'); ?></label>
</p>
<hr>
<h3>Google+</h3>

<p>
Do you want to include Google +1?
<input id="<?php echo $this->get_field_id('googleplus'); ?>" name="<?php echo $this->get_field_name('googleplus'); ?>" type="checkbox" value="1" <?php checked( '1', $googleplus ); ?> />
<label for="<?php echo $this->get_field_id('googleplus'); ?>"><?php _e('', 'wp_widget_plugin'); ?></label>
</p>

<?php
}

	// update widget
function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['twitteracc'] = strip_tags($new_instance['twitteracc']);
	  $instance['facebooklike'] = strip_tags($new_instance['facebooklike']);
	  $instance['googleplus'] = strip_tags($new_instance['googleplus']);
     return $instance;
}

	// display widget
function widget($args, $instance) {
   extract( $args );
   // these are the widget options
   $twitteracc = apply_filters('widget_title', $instance['twitteracc']);
   $facebooklike = $instance['facebooklike'];
   $googleplus = $instance['googleplus'];

   echo $before_widget;
   // Display the widget
   echo '<div class="widget-text wp_widget_plugin_box" style:>';

   
   // Get $select value
	if( $twitteracc ) {
		include_once "includes/twitter-follow.php";
			}	
	if( $facebooklike ) {
		include_once "includes/facebook-like.php";
			}
	if( $googleplus ) {
		include_once "includes/google-plus.php";
			}			
		
   echo '</div>';
   echo $after_widget;
}
}	
// register widget
add_action('widgets_init', create_function('', 'return register_widget("social_interaction_buttons");'));

?>
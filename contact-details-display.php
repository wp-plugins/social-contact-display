<?php
/*
Plugin Name: Social Contact Display
Plugin URI: http://demo.homepage-technologies.co.uk/contact-display-widget/
Description: Display your contact details and social media pages easily through this simple display widget
Version: 1.2.2
Author: HPTOnline (Ian Norris, James White)
License: GPL2
*/

include_once "social-interaction-buttons.php";

class social_contact_display extends WP_Widget {

	// constructor
    function social_contact_display() {
        parent::WP_Widget(false, $name = __('Social Contact Display', 'social_contact_display') );
    }

	// widget form creation
function form($instance) {

// Check values
if( $instance) {
     $title = esc_attr($instance['title']);
     $addresslineone = esc_attr($instance['addresslineone']);
     $addresslinetwo = esc_attr($instance['addresslinetwo']);
	 $city = esc_attr($instance['city']);
	 $county = esc_attr($instance['county']);
	 $pcode = esc_attr($instance['pcode']);
	 $telephone = esc_attr($instance['telephone']);
	 $email = esc_attr($instance['email']);
	 $socialiconstitle = esc_attr($instance['socialiconstitle']);
	 $facebook = esc_attr($instance['facebook']);
	 $twitter = esc_attr($instance['twitter']);
	 $gplus = esc_attr($instance['gplus']);
	 $linkedin = esc_attr($instance['linkedin']);
	 $dribble = esc_attr($instance['dribble']);
	 $youtube = esc_attr($instance['youtube']);
	 $pinterest = esc_attr($instance['pinterest']);
	 $select = esc_attr($instance['select']);
} else {
     $title = '';
     $addresslineone = '';
     $addresslinetwo = '';
	 $city = '';
	 $county = '';
	 $pcode = '';
	 $telephone = '';
	 $email = '';
	 $socialiconstitle = '';
	 $facebook = '';
	 $twitter = '';
	 $gplus = '';
	 $linkedin = '';
	 $dribble = '';
	 $youtube = '';
	 $pinterest = '';
	 $select = '';
}
?>

<p>
<label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Business Title:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('addresslineone'); ?>"><?php _e('Address Line One:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('addresslineone'); ?>" name="<?php echo $this->get_field_name('addresslineone'); ?>" type="text" value="<?php echo $addresslineone; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('addresslinetwo'); ?>"><?php _e('Address Line Two:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('addresslinetwo'); ?>" name="<?php echo $this->get_field_name('addresslinetwo'); ?>" type="text" value="<?php echo $addresslinetwo; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('city'); ?>"><?php _e('City / Town:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('city'); ?>" name="<?php echo $this->get_field_name('city'); ?>" type="text" value="<?php echo $city; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('county'); ?>"><?php _e('County / State:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('county'); ?>" name="<?php echo $this->get_field_name('county'); ?>" type="text" value="<?php echo $county; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('pcode'); ?>"><?php _e('Post Code / Zip Code:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('pcode'); ?>" name="<?php echo $this->get_field_name('pcode'); ?>" type="text" value="<?php echo $pcode; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('telephone'); ?>"><?php _e('Telephone:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('telephone'); ?>" name="<?php echo $this->get_field_name('telephone'); ?>" type="text" value="<?php echo $telephone; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('email'); ?>"><?php _e('Email:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('email'); ?>" name="<?php echo $this->get_field_name('email'); ?>" type="text" value="<?php echo $email; ?>" />
</p>

<hr>

<p>
<label for="<?php echo $this->get_field_id('socialiconstitle'); ?>"><?php _e('Social Icons Title (e.g. Connect with Us):', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('socialiconstitle'); ?>" name="<?php echo $this->get_field_name('socialiconstitle'); ?>" type="text" value="<?php echo $socialiconstitle; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('facebook'); ?>"><?php _e('Facebook URL:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('facebook'); ?>" name="<?php echo $this->get_field_name('facebook'); ?>" type="text" value="<?php echo $facebook; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('twitter'); ?>"><?php _e('Twitter URL:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('twitter'); ?>" name="<?php echo $this->get_field_name('twitter'); ?>" type="text" value="<?php echo $twitter; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('gplus'); ?>"><?php _e('Google Plus URL:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('gplus'); ?>" name="<?php echo $this->get_field_name('gplus'); ?>" type="text" value="<?php echo $gplus; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('linkedin'); ?>"><?php _e('Linked In URL:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('linkedin'); ?>" name="<?php echo $this->get_field_name('linkedin'); ?>" type="text" value="<?php echo $linkedin; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('youtube'); ?>"><?php _e('YouTube URL:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('youtube'); ?>" name="<?php echo $this->get_field_name('youtube'); ?>" type="text" value="<?php echo $youtube; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('pinterest'); ?>"><?php _e('Pinterest URL:', 'wp_widget_plugin'); ?></label>
<input class="widefat" id="<?php echo $this->get_field_id('pinterest'); ?>" name="<?php echo $this->get_field_name('pinterest'); ?>" type="text" value="<?php echo $pinterest; ?>" />
</p>

<p>
<label for="<?php echo $this->get_field_id('select'); ?>"><?php _e('Select', 'wp_widget_plugin'); ?></label>
<select name="<?php echo $this->get_field_name('select'); ?>" id="<?php echo $this->get_field_id('select'); ?>" class="widefat">
<?php
$options = array('Light', 'Dark', 'Modern Flat', 'Cute', 'Shaded', 'Simple Flat', 'Circle', 'Vintage', 'Wooden', 'CSS 1');
foreach ($options as $option) {
echo '<option value="' . $option . '" id="' . $option . '"', $select == $option ? ' selected="select"' : '', '>', $option, '</option>';
}
?>
</select>
<div style="font-size: 10px">Examples can be found <a href="http://demo.homepage-technologies.co.uk/contact-display-widget/social-media-icons/" target="_blank">here</a>
</div> 
</p>
<p>
<br />
<div align="center">
<a href="http://demo.homepage-technologies.co.uk/contact-display-widget/plugin-suggestion/" target="_blank">Got a suggestion? Get in touch!</a>
</div>
</p>

<?php
}

	// update widget
function update($new_instance, $old_instance) {
      $instance = $old_instance;
      // Fields
      $instance['title'] = strip_tags($new_instance['title']);
      $instance['addresslineone'] = strip_tags($new_instance['addresslineone']);
      $instance['addresslinetwo'] = strip_tags($new_instance['addresslinetwo']);
	  $instance['city'] = strip_tags($new_instance['city']);
	  $instance['county'] = strip_tags($new_instance['county']);
	  $instance['pcode'] = strip_tags($new_instance['pcode']);
	  $instance['telephone'] = strip_tags($new_instance['telephone']);
	  $instance['email'] = strip_tags($new_instance['email']);
	  $instance['socialiconstitle'] = strip_tags($new_instance['socialiconstitle']);
	  $instance['facebook'] = strip_tags($new_instance['facebook']);
	  $instance['twitter'] = strip_tags($new_instance['twitter']);
	  $instance['gplus'] = strip_tags($new_instance['gplus']);
	  $instance['linkedin'] = strip_tags($new_instance['linkedin']);
	  $instance['dribble'] = strip_tags($new_instance['dribble']);
	  $instance['youtube'] = strip_tags($new_instance['youtube']);
	  $instance['pinterest'] = strip_tags($new_instance['pinterest']);
	  $instance['select'] = strip_tags($new_instance['select']);
     return $instance;
}

	// display widget
function widget($args, $instance) {
   extract( $args );
   // these are the widget options
   $title = $instance['title'];
   $addresslineone = $instance['addresslineone'];
   $addresslinetwo = $instance['addresslinetwo'];
   $city = $instance['city'];
   $county = $instance['county'];
   $pcode = $instance['pcode'];
   $telephone = $instance['telephone'];
   $email = $instance['email'];
   $socialiconstitle = $instance['socialiconstitle'];
   $facebook = $instance['facebook'];
   $twitter = $instance['twitter'];
   $gplus = $instance['gplus'];
   $linkedin = $instance['linkedin'];
   $dribble = $instance['dribble'];
   $youtube = $instance['youtube'];
   $pinterest = $instance['pinterest'];
   $select = $instance['select'];

   echo $before_widget;
   // Display the widget
   echo '<div class="widget-text wp_widget_plugin_box" style:>';

   
   // Get $select value
	if ( $select == 'Light' ) {
		include_once "includes/light.php";
		} 
	elseif ( $select == 'Dark' ) {
		include_once "includes/dark.php";
		}
	elseif ( $select == 'Cute' ) {
		include_once "includes/cute.php";
		}		
	elseif ( $select == 'Shaded' ) {
		include_once "includes/shaded.php";
		}	
	elseif ( $select == 'Simple Flat' ) {
		include_once "includes/simple-flat.php";
		}
	elseif ( $select == 'Circle' ) {
		include_once "includes/circle.php";
		}
	elseif ( $select == 'Vintage' ) {
		include_once "includes/vintage.php";
		}	
	elseif ( $select == 'Wooden' ) {
		include_once "includes/wooden.php";
		}	
	elseif ( $select == 'Modern Flat' ) {
		include_once "includes/modernflat.php";
		}
	elseif ( $select == 'CSS 1' ) {
		include_once "includes/css1.php";
		}	
		
   echo '</div>';
   echo $after_widget;
}
}	
// register widget
add_action('widgets_init', create_function('', 'return register_widget("social_contact_display");'));

// register style on initialization
add_action('init', 'register_style');

function register_style(){

    wp_register_style( 'social_contact_display', plugins_url('/css/socialcontactdisplay.css', __FILE__));
}

// use the registered style above
add_action('wp_enqueue_scripts', 'enqueue_style');
function enqueue_style(){

    wp_enqueue_style( 'social_contact_display' );
} 

?>
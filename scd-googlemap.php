<?php

class scd_google_map_widget extends WP_Widget {

	// constructor
    function scd_google_map_widget() {
        parent::WP_Widget(false, $name = __('SCD Google Map', 'scd_google_map_widget') );
    }

	// widget form creation
function form($instance) {}



	// display widget
function widget($args) {
   $scd_option = scd_get_global_options(); 
   get_option('scd_options_google_map');
   extract ( $args );
   
   echo $before_widget;
   // Display the widget
   echo '<div class="widget-text wp_widget_plugin_box" style:>';
   
   echo do_shortcode('[scd_google_static_map]');
						
   echo '</div>';
   echo $after_widget;
}
}	
// register widget
add_action('widgets_init', create_function('', 'return register_widget("scd_google_map_widget");'));

//tell WP about our shortcode
add_shortcode( 'scd_google_static_map', 'scd_google_static_map_shortcode' );


//shortcode function
function scd_google_static_map_shortcode($atts, $content = NULL){
   $scd_option = scd_get_global_options(); 
   get_option('scd_options');

  $args = shortcode_atts(array(

    //defaults          
    'center' => '' . $scd_option['scd_google_map_center'] . '',
    'zoom' => '' . $scd_option['scd_google_map_zoom'] . '',
    'size' => '' . $scd_option['scd_google_map_size'] . '',
    'scale' => '' . $scd_option['scd_google_map_scale'] . '',
    'sensor' => '' . $scd_option['scd_google_map_sensor'] . '',
    'maptype' => '' . $scd_option['scd_google_map_maptype'] . '',
    'format' => '' . $scd_option['scd_google_map_format'] . '',
    'markers' => '' . $scd_option['scd_google_map_center'] . ''    
  
  ), $atts );

  //show a heading above the map image using the supplied content, if it exists
  if($content != NULL) $map_url = '<h3>' . $content . '</h3>';
   
  //construct map url with img title and alt attributes using supplied content 
  $map_url .= '<img title="' . $content . '" alt="' . $content . '" src="http://maps.googleapis.com/maps/api/staticmap?';
  
  foreach($args as $arg => $value){
  
    $map_url .= $arg . '=' . urlencode($value) . '&';
  
  }
  
  $map_url .= '"/>';
  
  return $map_url;

}
?>
<?php

//tell WP about our shortcode
add_shortcode( 'scd_social_contact_display', 'social_contact_display_shortcode' );

function social_contact_display_shortcode(){
   $scd_option = scd_get_global_options(); 
   get_option('scd_options');
   
   if ( $scd_option['scd_txt_title'] ) {
      echo '<strong>' . $scd_option['scd_txt_title'] .'</strong><br /><br />';
   }
   if( $scd_option['scd_txt_addresslineone'] ) {
      echo ''.$scd_option['scd_txt_addresslineone'].'<br />';
   }
   if( $scd_option['scd_txt_addresslinetwo'] ) {
     echo ''.$scd_option['scd_txt_addresslinetwo'].'<br />';
   }
   if( $scd_option['scd_txt_city'] ) {
     echo ''.$scd_option['scd_txt_city'].'<br />';
   }
   if( $scd_option['scd_txt_county'] ) {
     echo ''.$scd_option['scd_txt_county'].'<br />';
   }
   if( $scd_option['scd_txt_pcode'] ) {
     echo ''.$scd_option['scd_txt_pcode'].'<br />';
	 }
 	 if($scd_option['scd_txt_pcode'] == "" ) {
		echo '<p></p>';
   }
   if( $scd_option['scd_txt_telephone'] ) {
     echo '<br />'.$scd_option['scd_txt_telephone'].'';
   }
   if( $scd_option['scd_txt_mobile'] ) {
     echo '<br />'.$scd_option['scd_txt_mobile'].'';
   }
   if( $scd_option['scd_txt_fax'] ) {
     echo '<br />'.$scd_option['scd_txt_fax'].'';
   }
   if( $scd_option['scd_email_txt_input'] ) {
     echo '<br /><br /><a href="mailto:' . antispambot($scd_option['scd_email_txt_input']) .'">' . antispambot($scd_option['scd_email_txt_input']) . '</a><br />';
   }
   if( $scd_option['scd_txt_socialiconstitle'] ) {
     echo '<br /><br /><strong>' . $scd_option['scd_txt_socialiconstitle'] . '</strong><br /><br />';
   }
   if($scd_option['scd_txt_socialiconstitle'] == "" ) {
		echo '<p></p>';
   }

   // Get $select value
	if ( $scd_option['scd_select_input'] == 'Light' ) {
		include_once "includes/light.php";
		} 
	elseif ( $scd_option['scd_select_input'] == 'Dark' ) {
		include_once "includes/dark.php";
		}
	elseif ( $scd_option['scd_select_input'] == 'Cute' ) {
		include_once "includes/cute.php";
		}		
	elseif ( $scd_option['scd_select_input'] == 'Shaded' ) {
		include_once "includes/shaded.php";
		}	
	elseif ( $scd_option['scd_select_input'] == 'Simple Flat' ) {
		include_once "includes/simple-flat.php";
		}
	elseif ( $scd_option['scd_select_input'] == 'Circle' ) {
		include_once "includes/circle.php";
		}
	elseif ( $scd_option['scd_select_input'] == 'Vintage' ) {
		include_once "includes/vintage.php";
		}	
	elseif ( $scd_option['scd_select_input'] == 'Wooden' ) {
		include_once "includes/wooden.php";
		}	
	elseif ( $scd_option['scd_select_input'] == 'Modern Flat' ) {
		include_once "includes/modernflat.php";
		}
	elseif ( $scd_option['scd_select_input'] == 'CSS and HTML5 set 1' ) {
		include_once "includes/css1.php";
		}
	elseif ( $scd_option['scd_select_input'] == 'CSS and HTML5 set 2' ) {
		include_once "includes/css2.php";
		}	
	elseif ( $scd_option['scd_select_input'] == 'Retro' ) {
		include_once "includes/retro.php";
		}	
	elseif ( $scd_option['scd_select_input'] == 'Retro 2' ) {
		include_once "includes/retro2.php";
		}	
	elseif ( $scd_option['scd_select_input'] == 'Retro Circle' ) {
		include_once "includes/retrocircle.php";
		}	
	elseif ( $scd_option['scd_select_input'] == 'Paper Flowers' ) {
		include_once "includes/paperflowers.php";
   
   }
}

class social_contact_display extends WP_Widget {

	// constructor
    function social_contact_display() {
        parent::WP_Widget(false, $name = __('Social Contact Display', 'social_contact_display') );
    }

	// widget form creation
function form($instance) {

}

	// display widget
function widget($args) {
extract ( $args );

//Call plugin options
$scd_option = scd_get_global_options(); 
get_option('scd_options');

//Display Widget
   echo $before_widget;
   // Display the widget
   echo '<div class="widget-text wp_widget_plugin_box" style:>';

   echo do_shortcode('[scd_social_contact_display]');
   
   echo '</div>';
   echo $after_widget;
}
}	
// register widget
add_action('widgets_init', create_function('', 'return register_widget("social_contact_display");'));

// register style on initialization
add_action('init', 'register_style');

function register_style(){

    wp_register_style( 'social_contact_display', plugins_url('/lib/css/socialcontactdisplay.css', __FILE__));
	wp_register_style( 'entypo', plugins_url('/lib/css/entypo.css', __FILE__));
}

// use the registered style above
add_action('wp_enqueue_scripts', 'enqueue_style');
function enqueue_style(){

    wp_enqueue_style( 'social_contact_display' );
	wp_enqueue_style( 'entypo' );
} 

/** 
 * Collects our theme options 
 * 
 * @return array 
 */  
function scd_get_global_options(){  
      
    $scd_option = array();  
  
    // collect option names as declared in scd_get_settings()  
    $scd_option_names = array (  
        'scd_options_two',   
        'scd_options_two_social_media',   
        'scd_options_two_social_share',
		'scd_options_two_google_map'	
    );  
  
    // loop for get_option  
    foreach ($scd_option_names as $scd_option_name) {  
        if (get_option($scd_option_name)!= FALSE) {  
            $option     = get_option($scd_option_name);  
              
            // now merge in main $scd_option array!  
            $scd_option = array_merge($scd_option, $option);  
        }  
    }     
      
return $scd_option;  
} 

$scd_option = scd_get_global_options();

?>
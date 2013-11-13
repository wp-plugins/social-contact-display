<?php
// Check if title is set
   if ( $title ) {
      echo '<strong>' . $title .'</strong></td></tr><br /><br />';
   }

   // Check if addresslineone is set
   if( $addresslineone ) {
      echo ''.$addresslineone.'<br />';
   }
   // Check if addresslinetwo is set
   if( $addresslinetwo ) {
     echo ''.$addresslinetwo.'<br />';
   }
   // Check if city is set
   if( $city ) {
     echo ''.$city.'<br />';
   }
   // Check if county is set
   if( $county ) {
     echo ''.$county.'<br />';
   }
   // Check if pcode is set
   if( $pcode ) {
     echo '<p class="wp_widget_plugin_textarea">'.$pcode.'</p>';
	 }
 	 if($pcode=="" ) {
		echo '<p></p>';
   }
   // Check if telephone is set
   if( $telephone ) {
     echo '<p class="wp_widget_plugin_textarea">'.$telephone.'</p>';
   }
   // Check if email is set
   if( $email ) {
     echo '<p class="wp_widget_plugin_textarea"><a href="mailto:'.$email.'" target="top">'.$email.'</a></p>';
   }
   // Check if facebook is set
   if( $facebook ) {
    echo '<a href="'.$facebook.'"><img src="' . plugins_url( 'Social-Contact-Display/images/cute/Facebook.png' , dirname(__FILE__) ) . '" height="38" width="37" ></a>&nbsp;';
   }
   // Check if twitter is set
  if( $twitter ) {
     echo '<a href="'.$twitter.'"><img src="' . plugins_url( 'Social-Contact-Display/images/cute/Twitter.png' , dirname(__FILE__) ) . '" height="38" width="37" ></a>&nbsp;';
   }
   // Check if gplus is set
   if( $gplus ) {
     echo '<a href="'.$gplus.'"><img src="' . plugins_url( 'Social-Contact-Display/images/cute/Google-Plus.png' , dirname(__FILE__) ) . '" height="38" width="37" ></a>&nbsp;';
   }
   // Check if linkedin is set
   if( $linkedin ) {
     echo '<a href="'.$linkedin.'"><img src="' . plugins_url( 'Social-Contact-Display/images/cute/Linkedin.png' , dirname(__FILE__) ) . '" height="38" width="37" ></a>&nbsp;';
   }
   // Check if youtube is set
   if( $youtube ) {
     echo '<a href="'.$youtube.'"><img src="' . plugins_url( 'Social-Contact-Display/images/cute/Youtube.png' , dirname(__FILE__) ) . '" height="38" width="37" ></a>&nbsp;';
   }
?>
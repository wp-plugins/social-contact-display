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
    echo '<a href="'.$facebook.'" target="_blank"><img src="' . plugins_url( 'images/simple-flat/facebook.png' , dirname(__FILE__) ) . '" height="38" width="37" ></a>&nbsp;';
   }
   // Check if twitter is set
  if( $twitter ) {
     echo '<a href="'.$twitter.'" target="_blank"><img src="' . plugins_url( 'images/simple-flat/twitter.png' , dirname(__FILE__) ) . '" height="38" width="37" ></a>&nbsp;';
   }
   // Check if gplus is set
   if( $gplus ) {
     echo '<a href="'.$gplus.'" target="_blank"><img src="' . plugins_url( 'images/simple-flat/google-plus.png' , dirname(__FILE__) ) . '" height="38" width="37" ></a>&nbsp;';
   }
   // Check if linkedin is set
   if( $linkedin ) {
     echo '<a href="'.$linkedin.'" target="_blank"><img src="' . plugins_url( 'images/simple-flat/linkedin.png' , dirname(__FILE__) ) . '" height="38" width="37" ></a>&nbsp;';
   }
   // Check if youtube is set
   if( $youtube ) {
     echo '<a href="'.$youtube.'" target="_blank"><img src="' . plugins_url( 'images/simple-flat/youtube.png' , dirname(__FILE__) ) . '" height="38" width="37" ></a>&nbsp;';
   }
   if( $pinterest ) {
     echo '<a href="'.$pinterest.'" target="_blank"><img src="' . plugins_url( 'images/simple-flat/pinterest.png' , dirname(__FILE__) ) . '" height="38" width="37" ></a>&nbsp;';
   }   
?>
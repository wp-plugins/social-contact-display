<?php
   // Check if facebook is set
   if( $facebook ) {
    echo '<a href="'.$facebook.'" target="_blank"><img src="http://cdn.hptonline.co.uk.nyud.net/social-contact-display/images/vintage/facebook.png" height="38" width="37" ></a>&nbsp;';
   }
   // Check if twitter is set
  if( $twitter ) {
     echo '<a href="'.$twitter.'" target="_blank"><img src="http://cdn.hptonline.co.uk.nyud.net/social-contact-display/images/vintage/twitter.png" height="38" width="37" ></a>&nbsp;';
   }
   // Check if gplus is set
   if( $gplus ) {
     echo '<a href="'.$gplus.'" target="_blank"><img src="http://cdn.hptonline.co.uk.nyud.net/social-contact-display/images/vintage/googleplus.png" height="38" width="37" ></a>&nbsp;';
   }
   // Check if linkedin is set
//   if( $linkedin ) {
//     echo '<a href="'.$linkedin.'" target="_blank"><img src="' . plugins_url( 'images/vintage/Linkedin.png' , dirname(__FILE__) ) . '" height="38" width="37" ></a>&nbsp;';
//   }
   // Check if youtube is set
   if( $youtube ) {
     echo '<a href="'.$youtube.'" target="_blank"><img src="http://cdn.hptonline.co.uk.nyud.net/social-contact-display/images/vintage/youtube.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $pinterest ) {
     echo '<a href="'.$pinterest.'" target="_blank"><img src="http://cdn.hptonline.co.uk.nyud.net/social-contact-display/images/vintage/pinterest.png" height="38" width="37" ></a>&nbsp;';
   }   
?>
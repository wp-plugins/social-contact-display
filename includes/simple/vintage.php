<?php
require_once('cleanurl.php');

   if( $facebook ) {
    echo '<a href="'.addScheme($facebook).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/vintage/facebook.png" height="38" width="37" ></a>&nbsp;';
   }
  if( $twitter ) {
     echo '<a href="'.addScheme($twitter).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/vintage/twitter.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $gplus ) {
     echo '<a href="'.addScheme($gplus).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/vintage/googleplus.png" height="38" width="37" ></a>&nbsp;';
   }
//   if( $linkedin ) {
//     echo '<a href="'.$linkedin.'" target="_blank"><img src="' . plugins_url( 'images/vintage/Linkedin.png' , dirname(__FILE__) ) . '" height="38" width="37" ></a>&nbsp;';
//   }
   // Check if youtube is set
   if( $youtube ) {
     echo '<a href="'.addScheme($youtube).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/vintage/youtube.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $pinterest ) {
     echo '<a href="'.addScheme($pinterest).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/vintage/pinterest.png" height="38" width="37" ></a>&nbsp;';
   }   
   if( $rssfeed ) {
     echo '<a href="'?><?php bloginfo('rss2_url'); ?><?php echo '" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/vintage/rss.png" height="38" width="37" ></a>&nbsp;';
   }
?>
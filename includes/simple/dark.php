<?php
require_once('cleanurl.php');

   if( $facebook ) {
    echo '<a href="'.addScheme($facebook).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/dark/social-facebook.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
  if( $twitter ) {
     echo '<a href="'.addScheme($twitter).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/dark/social-twitter.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $gplus ) {
     echo '<a href="'.addScheme($gplus).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/dark/social-googleplus.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $linkedin ) {
     echo '<a href="'.addScheme($linkedin).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/dark/social-linkedin.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $youtube ) {
     echo '<a href="'.addScheme($youtube).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/dark/social-youtube.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $pinterest ) {
     echo '<a href="'.addScheme($pinterest).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/dark/social-pintrest.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $instagram ) {
     echo '<a href="'.addScheme($instagram).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/dark/social-instagram.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }   
	if( $rssfeed ) {
     echo '<a href="'?><?php bloginfo('rss2_url'); ?><?php echo '" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/dark/social-rss.png" height="38" width="37" ></a>&nbsp;';
   }
?>
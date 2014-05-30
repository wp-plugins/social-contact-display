<?php

   if( $facebook != "http://" ) {
    echo '<a href="'.$facebook.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/light/social-facebook-light.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
  if( $twitter != "http://" ) {
     echo '<a href="'.$twitter.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/light/social-twitter-light.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $gplus != "http://" ) {
     echo '<a href="'.$gplus.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/light/social-googleplus-light.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $linkedin != "http://" ) {
     echo '<a href="'.$linkedin.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/light/social-linkedin-light.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $youtube != "http://" ) {
     echo '<a href="'.$youtube.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/light/social-youtube-light.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
    if( $pinterest != "http://" ) {
     echo '<a href="'.$pinterest.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/light/social-pintrest-light.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
    if( $instagram != "http://" ) {
     echo '<a href="'.$instagram.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/light/social-instagram-light.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }   
   if( $rssfeed ) {
     echo '<a href="'?><?php bloginfo('rss2_url'); ?><?php echo '" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/light/social-rss-light.png" height="38" width="37" ></a>&nbsp;';
   }
?>
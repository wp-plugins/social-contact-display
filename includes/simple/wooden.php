<?php

   if( $facebook != "http://" ) {
    echo '<a href="'.$facebook.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/facebook.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
  if( $twitter != "http://" ) {
     echo '<a href="'.$twitter.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/twitter.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $gplus != "http://" ) {
     echo '<a href="'.$gplus.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/google-plus.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $tumblr != "http://" ) {
     echo '<a href="'.$tumblr.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/tumblr.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $linkedin != "http://" ) {
     echo '<a href="'.$linkedin.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/linkedin.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $youtube != "http://" ) {
     echo '<a href="'.$youtube.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/youtube.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $pinterest != "http://" ) {
     echo '<a href="'.$pinterest.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/pinterest.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }   
   if( $instagram != "http://" ) {
     echo '<a href="'.$instagram.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/instagram.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }   
   if( $rssfeed ) {
     echo '<a href="'?><?php bloginfo('rss2_url'); ?><?php echo '" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/rss.png" height="38" width="37" ></a>&nbsp;';
   }
?>
<?php
require_once('cleanurl.php');

   if( $facebook ) {
    echo '<a href="'.addScheme($facebook).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/facebook.png" height="38" width="37" ></a>&nbsp;';
   }
  if( $twitter ) {
     echo '<a href="'.addScheme($twitter).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/twitter.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $gplus ) {
     echo '<a href="'.addScheme($gplus).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/google-plus.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $linkedin ) {
     echo '<a href="'.addScheme($linkedin).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/linkedin.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $youtube ) {
     echo '<a href="'.addScheme($youtube).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/youtube.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $pinterest ) {
     echo '<a href="'.addScheme($pinterest).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/pinterest.png" height="38" width="37" ></a>&nbsp;';
   }   
   if( $instagram ) {
     echo '<a href="'.addScheme($instagram).'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/instagram.png" height="38" width="37" ></a>&nbsp;';
   }    
   if( $rssfeed ) {
     echo '<a href="'?><?php bloginfo('rss2_url'); ?><?php echo '" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/wooden/rss.png" height="38" width="37" ></a>&nbsp;';
   }
?>
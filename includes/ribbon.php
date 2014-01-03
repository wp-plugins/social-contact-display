<?php
   if( $facebook ) {
    echo '<a href="'.$facebook.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/ribbon/48/Facebook.png" height="38" width="37" ></a>&nbsp;';
   }
  if( $twitter ) {
     echo '<a href="'.$twitter.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/ribbon/48/Twitter.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $gplus ) {
     echo '<a href="'.$gplus.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/ribbon/48/Googleplus.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $linkedin ) {
     echo '<a href="'.$linkedin.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/ribbon/48/Linkedin.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $youtube ) {
     echo '<a href="'.$youtube.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/ribbon/48/Youtube.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $pinterest ) {
     echo '<a href="'.$pinterest.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/ribbon/48/Pinterest.png" height="38" width="37" ></a>&nbsp;';
   }   
//   if( $instagram ) {
//     echo '<a href="'.$instagram.'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/ribbon/48/Instagram-icon.png" height="38" width="37" ></a>&nbsp;';
//   }    
	if( $scd_option['scd_rss_checkbox'] ) {
     echo '<a href="'?><?php bloginfo('rss2_url'); ?><?php echo '" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/ribbon/48/RSS.png" height="38" width="37" ></a>&nbsp;';
   }
?>
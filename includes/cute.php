<?php
   if( $scd_option['scd_url_txt_facebook'] ) {
    echo '<a href="'.$scd_option['scd_url_txt_facebook'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/cute/Facebook.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $scd_option['scd_vertical_checkbox'] == '1' ) { 
     echo '<br>'; 
   }
  if( $scd_option['scd_url_txt_twitter'] ) {
     echo '<a href="'.$scd_option['scd_url_txt_twitter'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/cute/Twitter.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $scd_option['scd_vertical_checkbox'] == '1' ) { 
     echo '<br>'; 
   }
   if( $scd_option['scd_url_txt_gplus'] ) {
     echo '<a href="'.$scd_option['scd_url_txt_gplus'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/cute/Google-Plus.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $scd_option['scd_vertical_checkbox'] == '1' ) { 
     echo '<br>'; 
   }
   if( $scd_option['scd_url_txt_tumblr'] ) {
     echo '<a href="'.$scd_option['scd_url_txt_tumblr'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/cute/Tumblr.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $scd_option['scd_vertical_checkbox'] == '1' ) { 
     echo '<br>'; 
   }
   if( $scd_option['scd_url_txt_linkedin'] ) {
     echo '<a href="'.$scd_option['scd_url_txt_linkedin'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/cute/Linkedin.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $scd_option['scd_vertical_checkbox'] == '1' ) { 
     echo '<br>'; 
   }
   if( $scd_option['scd_url_txt_youtube'] ) {
     echo '<a href="'.$scd_option['scd_url_txt_youtube'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/cute/Youtube.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $scd_option['scd_vertical_checkbox'] == '1' ) { 
     echo '<br>'; 
   }
   if( $scd_option['scd_url_txt_pinterest'] ) {
     echo '<a href="'.$scd_option['scd_url_txt_pinterest'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/cute/Pinterest.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $scd_option['scd_vertical_checkbox'] == '1' ) { 
     echo '<br>'; 
   }  
   if( $scd_option['scd_url_txt_instagram'] ) {
     echo '<a href="'.$scd_option['scd_url_txt_instagram'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/cute/Instagram.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $scd_option['scd_vertical_checkbox'] == '1' ) { 
     echo '<br>'; 
   }
   if( $scd_option['scd_rss_checkbox'] ) {
     echo '<a href="'?><?php bloginfo('rss2_url'); ?><?php echo '" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/cute/RSS.png" height="38" width="37" ></a>&nbsp;';
   }    
?>
<?php
   if( $scd_option['scd_url_txt_facebook'] ) {
    echo '<a href="'.$scd_option['scd_url_txt_facebook'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/shaded/facebook-Icon.png" height="38" width="37" ></a>&nbsp;';
   }
  if( $scd_option['scd_url_txt_twitter'] ) {
     echo '<a href="'.$scd_option['scd_url_txt_twitter'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/shaded/Twitter-Icon.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $scd_option['scd_url_txt_gplus'] ) {
     echo '<a href="'.$scd_option['scd_url_txt_gplus'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/shaded/Google-plus-icon.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $scd_option['scd_url_txt_linkedin'] ) {
     echo '<a href="'.$scd_option['scd_url_txt_linkedin'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/shaded/Linkedin.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $scd_option['scd_url_txt_youtube'] ) {
     echo '<a href="'.$scd_option['scd_url_txt_youtube'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/shaded/Youtube-Icon.png" height="38" width="37" ></a>&nbsp;';
   }
   if( $scd_option['scd_url_txt_pinterest'] ) {
     echo '<a href="'.$scd_option['scd_url_txt_pinterest'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/shaded/Pinterest-Icon.png" height="38" width="37" ></a>&nbsp;';
   }   
   if( $scd_option['scd_url_txt_instagram'] ) {
     echo '<a href="'.$scd_option['scd_url_txt_instagram'].'" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/shaded/Instagram-Icon.png" height="38" width="37" ></a>&nbsp;';
   } 
	if( $scd_option['scd_rss_checkbox'] ) {
     echo '<a href="'?><?php bloginfo('rss2_url'); ?><?php echo '" target="_blank"><img src="http://cdn.hptonline.co.uk/social-contact-display/images/shaded/RSS-Icon.png" height="38" width="37" ></a>&nbsp;';
   }
?>
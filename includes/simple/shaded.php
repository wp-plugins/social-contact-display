<?php

   if( $facebook != "http://" && $facebook !="" ) {
    echo '<a href="'.$facebook.'" target="_blank"><img src="'.$cdn.'shaded/facebook-Icon.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
  if( $twitter != "http://" && $twitter !="" ) {
     echo '<a href="'.$twitter.'" target="_blank"><img src="'.$cdn.'shaded/Twitter-Icon.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $gplus != "http://" && $gplus !="" ) {
     echo '<a href="'.$gplus.'" target="_blank"><img src="'.$cdn.'shaded/Google-plus-icon.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $tumblr != "http://" && $tumblr !== "" ) {
     echo '<a href="'.$tumblr.'" target="_blank"><img src="'.$cdn.'shaded/Tumblr-Icon.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $linkedin != "http://" && $linkedin !="" ) {
     echo '<a href="'.$linkedin.'" target="_blank"><img src="'.$cdn.'shaded/Linkedin.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $youtube != "http://" && $youtube != ""  ) {
     echo '<a href="'.$youtube.'" target="_blank"><img src="'.$cdn.'shaded/Youtube-Icon.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $pinterest != "http://" && $pinterest != "" ) {
     echo '<a href="'.$pinterest.'" target="_blank"><img src="'.$cdn.'shaded/Pinterest-Icon.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }   
   if( $instagram != "http://" && $instagram != "" ) {
     echo '<a href="'.$instagram.'" target="_blank"><img src="'.$cdn.'shaded/Instagram-Icon.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }   
   if( $rssfeed ) {
     echo '<a href="'?><?php bloginfo('rss2_url'); ?><?php echo '" target="_blank"><img src="'.$cdn.'shaded/RSS-Icon.png" height="38" width="37" ></a>&nbsp;';
   }
?>
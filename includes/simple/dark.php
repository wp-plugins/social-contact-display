<?php

   if( $facebook != "http://" && $facebook !="" ) {
    echo '<a href="'.$facebook.'" target="_blank"><img src="'.$cdn.'dark/social-facebook.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
  if( $twitter != "http://" && $twitter !="" ) {
     echo '<a href="'.$twitter.'" target="_blank"><img src="'.$cdn.'dark/social-twitter.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $gplus != "http://" && $gplus !="" ) {
     echo '<a href="'.$gplus.'" target="_blank"><img src="'.$cdn.'dark/social-googleplus.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $linkedin != "http://" && $linkedin !="" ) {
     echo '<a href="'.$linkedin.'" target="_blank"><img src="'.$cdn.'dark/social-linkedin.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $youtube != "http://" && $youtube != "" ) {
     echo '<a href="'.$youtube.'" target="_blank"><img src="'.$cdn.'dark/social-youtube.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $pinterest != "http://" && $pinterest != "" ) {
     echo '<a href="'.$pinterest.'" target="_blank"><img src="'.$cdn.'dark/social-pintrest.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $instagram != "http://" ) {
     echo '<a href="'.$instagram.'" && $instagram != "" target="_blank"><img src="'.$cdn.'dark/social-instagram.png" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }   
	if( $rssfeed ) {
     echo '<a href="'?><?php bloginfo('rss2_url'); ?><?php echo '" target="_blank"><img src="'.$cdn.'dark/social-rss.png" height="38" width="37" ></a>&nbsp;';
   }
?>
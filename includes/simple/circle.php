<?php

   if( $facebook != "http://" && $facebook !="" ) {
    echo '<a href="' . $facebook . '" target="_blank"><img src="'.$cdn.'circle/fb.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
  if( $twitter != "http://" && $twitter !="" ) {
     echo '<a href="'.$twitter.'" target="_blank"><img src="'.$cdn.'circle/twitter.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $gplus != "http://" && $gplus !="" ) {
     echo '<a href="'.$gplus.'" target="_blank"><img src="'.$cdn.'circle/googleplus.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $tumblr != "http://" && $tumblr !== "" ) {
     echo '<a href="'.$tumblr.'" target="_blank"><img src="'.$cdn.'circle/tumblr.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $linkedin != "http://" && $linkedin !="" ) {
     echo '<a href="'.$linkedin.'" target="_blank"><img src="'.$cdn.'circle/linkedin.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $youtube != "http://" && $youtube != "" ) {
     echo '<a href="'.$youtube.'" target="_blank"><img src="'.$cdn.'circle/youtube.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $pinterest != "http://" && $pinterest != "" ) {
     echo '<a href="'.$pinterest.'" target="_blank"><img src="'.$cdn.'circle/pinterest.png" height="38" width="37" ></a>&nbsp;';
   }
   if ( $vertical == '1' ) { 
     echo '<br>'; 
   }
   if( $instagram != "http://" && $instagram != "" ) {
     echo '<a href="'.$instagram.'" target="_blank"><img src="'.$cdn.'circle/instagram.png" height="38" width="37" ></a>&nbsp;';
   }
?>
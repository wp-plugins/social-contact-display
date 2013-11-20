<?php
   echo '<br /><br /><ul class="social">';
   if( $facebook ) {
    echo '<li class="facebook"><a href="'.$facebook.'" target="_blank" class="entypo-facebook"></a></li>';
   }
  if( $twitter ) {
     echo '<li class="twitter"><a href="'.$twitter.'" target="_blank" class="entypo-twitter"></a></li>';
   }
   if( $gplus ) {
     echo '<li class="gplus"><a href="'.$gplus.'" target="_blank" class="entypo-gplus"></a></li>';
   }
   if( $linkedin ) {
     echo '<li class="linked-in"><a href="'.$linkedin.'" target="_blank" class="entypo-linkedin"></a></li>';
   }
//   if( $youtube ) {
//     echo '<li class="youtube"><a href="'.$youtube.'" target="_blank" class="social"></a></li>';
//   }
   if( $pinterest ) {
     echo '<li class="pinterest"><a href="'.$pinterest.'" target="_blank" class="entypo-pinterest"></a></li>';
   }
   echo '</ul>';  
?>
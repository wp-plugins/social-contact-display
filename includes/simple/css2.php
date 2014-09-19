<?php

   echo '<br /><br /><ul class="social">';
   if( $facebook != "http://" && $facebook !="" ) {
    echo '<li class="facebook"><a href="'.$facebook.'" target="_blank" class="entypo-facebook"></a></li>';
   }
  if( $twitter != "http://" && $twitter !="" ) {
     echo '<li class="twitter"><a href="'.$twitter.'" target="_blank" class="entypo-twitter"></a></li>';
   }
   if( $gplus != "http://" && $gplus !="" ) {
     echo '<li class="gplus"><a href="'.$gplus.'" target="_blank" class="entypo-gplus"></a></li>';
   }
   if( $linkedin != "http://" && $linkedin !="" ) {
     echo '<li class="linked-in"><a href="'.$linkedin.'" target="_blank" class="entypo-linkedin"></a></li>';
   }
   if( $pinterest != "http://" && $pinterest != "" ) {
     echo '<li class="pinterest"><a href="'.$pinterest.'" target="_blank" class="entypo-pinterest"></a></li>';
   }
   echo '</ul>';  
?>
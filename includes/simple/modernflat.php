<?php

   if( $facebook != "http://" && $facebook !="" ) {
    echo '<div class="scd-facebook"><a href="'.$facebook.'" target="_blank" class="social">Facebook</a></div>';
   }
  if( $twitter != "http://" && $twitter !="" ) {
     echo '<div class="scd-twitter"><a href="'.$twitter.'" target="_blank" class="social">Twitter</a></div>';
   }
   if( $gplus != "http://" && $gplus !="" ) {
     echo '<div class="scd-google"><a href="'.$gplus.'" target="_blank" class="social">Google +</a></div>';
   }
   if( $tumblr != "http://" && $tumblr !== "" ) {
     echo '<div class="scd-tumblr"><a href="'.$tumblr.'" target="_blank" class="social">Tumblr</a></div>';
   }
   if( $instagram != "http://" && $instagram != "" ) {
     echo '<div class="scd-instagram"><a href="'.$instagram.'" target="_blank" class="social">Instagram</a></div>';
   }   
   if( $pinterest != "http://" && $pinterest != "" ) {
     echo '<div class="scd-pinterest"><a href="'.$pinterest.'" target="_blank" class="social">Pinterest</a></div>';
   }   
   if( $linkedin != "http://" && $linkedin !="" ) {
     echo '<div class="scd-linkedin"><a href="'.$linkedin.'" target="_blank" class="social">LinkedIn</a></div>';
   }
   if( $youtube != "http://" && $youtube != "" ) {
     echo '<div class="scd-youtube"><a href="'.$youtube.'" target="_blank" class="social">YouTube</a></div>';
   }
   if( $rssfeed ) {
     echo '<div class="scd-rss"><a href="'?><?php bloginfo('rss2_url'); ?><?php echo '" target="_blank" class="social">RSS</a></div>';
   }
?>
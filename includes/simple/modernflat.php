<?php
require_once('cleanurl.php');

   if( $facebook ) {
    echo '<div class="scd-facebook"><a href="'.addScheme($facebook).'" target="_blank" class="social">Facebook</a></div>';
   }
  if( $twitter ) {
     echo '<div class="scd-twitter"><a href="'.addScheme($twitter).'" target="_blank" class="social">Twitter</a></div>';
   }
   if( $gplus ) {
     echo '<div class="scd-google"><a href="'.addScheme($gplus).'" target="_blank" class="social">Google +</a></div>';
   }
   if( $tumblr ) {
     echo '<div class="scd-tumblr"><a href="'.addScheme($tumblr).'" target="_blank" class="social">Tumblr</a></div>';
   }
   if( $instagram ) {
     echo '<div class="scd-instagram"><a href="'.addScheme($linkedin).'" target="_blank" class="social">Instagram</a></div>';
   }   
   if( $pinterest ) {
     echo '<div class="scd-pinterest"><a href="'.addScheme($pinterest).'" target="_blank" class="social">Pinterest</a></div>';
   }   
   if( $linkedin ) {
     echo '<div class="scd-linkedin"><a href="'.addScheme($linkedin).'" target="_blank" class="social">LinkedIn</a></div>';
   }
   if( $youtube ) {
     echo '<div class="scd-youtube"><a href="'.addScheme($youtube).'" target="_blank" class="social">YouTube</a></div>';
   }
   if( $rssfeed ) {
     echo '<div class="scd-rss"><a href="'?><?php bloginfo('rss2_url'); ?><?php echo '" target="_blank" class="social">RSS</a></div>';
   }
?>
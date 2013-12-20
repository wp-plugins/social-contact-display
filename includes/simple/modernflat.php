<?php
require_once('cleanurl.php');

   if( $facebook ) {
    echo '<div class="facebook"><a href="'.addScheme($facebook).'" target="_blank" class="social">Facebook</a></div>';
   }
  if( $twitter ) {
     echo '<div class="twitter"><a href="'.addScheme($twitter).'" target="_blank" class="social">Twitter</a></div>';
   }
   if( $gplus ) {
     echo '<div class="google"><a href="'.addScheme($gplus).'" target="_blank" class="social">Google +</a></div>';
   }
   if( $instagram ) {
     echo '<div class="instagram"><a href="'.addScheme($linkedin).'" target="_blank" class="social">Instagram</a></div>';
   }   
   if( $pinterest ) {
     echo '<div class="pinterest"><a href="'.addScheme($pinterest).'" target="_blank" class="social">Pinterest</a></div>';
   }   
   if( $linkedin ) {
     echo '<div class="linkedin"><a href="'.addScheme($linkedin).'" target="_blank" class="social">LinkedIn</a></div>';
   }
   if( $youtube ) {
     echo '<div class="youtube"><a href="'.addScheme($youtube).'" target="_blank" class="social">YouTube</a></div>';
   }       
?>
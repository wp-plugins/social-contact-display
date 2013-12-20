<?php
require_once('cleanurl.php');

   if( $facebook ) {
    echo '<div class="hpt-social-facebook"><a href="'.addScheme($facebook).'" target="_blank" class="social"></a></div>&nbsp;';
   }
  if( $twitter ) {
     echo '<div class="hpt-social-twitter"><a href="'.addScheme($twitter).'" target="_blank" class="social"></a></div>&nbsp;';
   }
   if( $gplus ) {
     echo '<div class="hpt-social-googleplus"><a href="'.addScheme($gplus).'" target="_blank" class="social"></a></div>&nbsp;';
   }
   if( $linkedin ) {
     echo '<div class="hpt-social-linkedin"><a href="'.addScheme($linkedin).'" target="_blank" class="social"></a></div>&nbsp;';
   }
   if( $youtube ) {
     echo '<div class="hpt-social-youtube"><a href="'.addScheme($youtube).'" target="_blank" class="social"></a></div>&nbsp;';
   }
   if( $pinterest ) {
     echo '<div class="hpt-social-pinterest"><a href="'.addScheme($pinterest).'" target="_blank" class="social"></a></div>&nbsp;';
   }   
?>
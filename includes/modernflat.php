<?php
// Check if title is set
   if ( $title ) {
      echo '<strong>' . $title .'</strong></td></tr><br /><br />';
   }

   // Check if addresslineone is set
   if( $addresslineone ) {
      echo ''.$addresslineone.'<br />';
   }
   // Check if addresslinetwo is set
   if( $addresslinetwo ) {
     echo ''.$addresslinetwo.'<br />';
   }
   // Check if city is set
   if( $city ) {
     echo ''.$city.'<br />';
   }
   // Check if county is set
   if( $county ) {
     echo ''.$county.'<br />';
   }
   // Check if pcode is set
   if( $pcode ) {
     echo ''.$pcode.'<br />';
	 }
 	 if($pcode=="" ) {
		echo '<p></p>';
   }
   // Check if telephone is set
   if( $telephone ) {
     echo '<br />'.$telephone.'<br />';
   }
   // Check if email is set
   if( $email ) {
     echo '<br /><a href="mailto:' . antispambot($email) .'">' . antispambot($email) . '</a><br />';
   }
   // Check if socialicontitle is set
   if( $socialiconstitle ) {
     echo '<br /><strong>' . $socialiconstitle . '</strong><br /><br />';
   }
   if($socialiconstitle=="" ) {
		echo '<p></p>';
   }
   // Check if facebook is set
   if( $facebook ) {
    echo '<div class="facebook"><a href="'.$facebook.'" target="_blank" class="social">Facebook</a></div>';
   }
   // Check if twitter is set
  if( $twitter ) {
     echo '<div class="twitter"><a href="'.$twitter.'" target="_blank" class="social">Twitter</a></div>';
   }
   // Check if gplus is set
   if( $gplus ) {
     echo '<div class="google"><a href="'.$gplus.'" target="_blank" class="social">Google +</a></div>';
   }
   // Check if instagram is set
   if( $instagram ) {
     echo '<div class="instagram"><a href="'.$linkedin.'" target="_blank" class="social">Instagram</a></div>';
   }   
   // Check if pinterest is set
   if( $pinterest ) {
     echo '<div class="pinterest"><a href="'.$pinterest.'" target="_blank" class="social">Pinterest</a></div>';
   }   
   // Check if linkedin is set
   if( $linkedin ) {
     echo '<div class="linkedin"><a href="'.$linkedin.'" target="_blank" class="social">LinkedIn</a></div>';
   }
   // Check if youtube is set
   if( $youtube ) {
     echo '<div class="youtube"><a href="'.$youtube.'" target="_blank" class="social">YouTube</a></div>';
   }    
?>
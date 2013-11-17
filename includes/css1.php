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
    echo '<div class="hpt-social-facebook"><a href="'.$facebook.'" target="_blank" class="social"></a>&nbsp;</div>';
   }
   // Check if twitter is set
  if( $twitter ) {
     echo '<div class="hpt-social-twitter"><a href="'.$twitter.'" target="_blank" class="social"></a>&nbsp;</div>';
   }
   // Check if gplus is set
   if( $gplus ) {
     echo '<div class="hpt-social-googleplus"><a href="'.$gplus.'" target="_blank" class="social"></a>&nbsp;</div>';
   }
   // Check if linkedin is set
   if( $linkedin ) {
     echo '<div class="hpt-social-linkedin"><a href="'.$linkedin.'" target="_blank" class="social"></a>&nbsp;</div>';
   }
   // Check if youtube is set
   if( $youtube ) {
     echo '<div class="hpt-social-youtube"><a href="'.$youtube.'" target="_blank" class="social"></a>&nbsp;</div>';
   }
   // Check if pinterest is set
   if( $pinterest ) {
     echo '<div class="hpt-social-pinterest"><a href="'.$pinterest.'" target="_blank" class="social"></a>&nbsp;</div>';
   }   
?>
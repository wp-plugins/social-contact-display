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
   echo '<br /><br /><ul class="social">';
   // Check if facebook is set
   if( $facebook ) {
    echo '<li class="facebook"><a href="'.$facebook.'" target="_blank" class="entypo-facebook"></a></li>';
   }
   // Check if twitter is set
  if( $twitter ) {
     echo '<li class="twitter"><a href="'.$twitter.'" target="_blank" class="entypo-twitter"></a></li>';
   }
   // Check if gplus is set
   if( $gplus ) {
     echo '<li class="gplus"><a href="'.$gplus.'" target="_blank" class="entypo-gplus"></a></li>';
   }
   // Check if linkedin is set
   if( $linkedin ) {
     echo '<li class="linked-in"><a href="'.$linkedin.'" target="_blank" class="entypo-linkedin"></a></li>';
   }
   // Check if youtube is set
//   if( $youtube ) {
//     echo '<li class="youtube"><a href="'.$youtube.'" target="_blank" class="social"></a></li>';
//   }
   // Check if pinterest is set
   if( $pinterest ) {
     echo '<li class="pinterest"><a href="'.$pinterest.'" target="_blank" class="entypo-pinterest"></a></li>';
   }
   echo '</ul>';  
?>
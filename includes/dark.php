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
    echo '<a href="'.$facebook.'" target="_blank"><img src="' . plugins_url( 'images/dark/social-facebook.png' , dirname(__FILE__) ) . '" ></a>&nbsp;';
   }
   // Check if twitter is set
  if( $twitter ) {
     echo '<a href="'.$twitter.'" target="_blank"><img src="' . plugins_url( 'images/dark/social-twitter.png' , dirname(__FILE__) ) . '" ></a>&nbsp;';
   }
   // Check if gplus is set
   if( $gplus ) {
     echo '<a href="'.$gplus.'" target="_blank"><img src="' . plugins_url( 'images/dark/social-googleplus.png' , dirname(__FILE__) ) . '" ></a>&nbsp;';
   }
   // Check if linkedin is set
   if( $linkedin ) {
     echo '<a href="'.$linkedin.'" target="_blank"><img src="' . plugins_url( 'images/dark/social-linkedin.png' , dirname(__FILE__) ) . '" ></a>&nbsp;';
   }
   // Check if youtube is set
   if( $youtube ) {
     echo '<a href="'.$youtube.'" target="_blank"><img src="' . plugins_url( 'images/dark/social-youtube.png' , dirname(__FILE__) ) . '" ></a>&nbsp;';
   }
   if( $pinterest ) {
     echo '<a href="'.$pinterest.'" target="_blank"><img src="' . plugins_url( 'images/dark/social-pintrest.png' , dirname(__FILE__) ) . '" ></a>&nbsp;';
   }
?>
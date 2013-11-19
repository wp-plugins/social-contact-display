<?php
if ( $facebooklikestyle == 'Standard' ) {
	echo '<div class="fb-like" data-href="'; ?><?php echo bloginfo('url'); ?><?php echo '" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>'; 
}
elseif ( $facebooklikestyle == 'Box Count' ) { 
	echo '<div class="fb-like" data-href="'; ?><?php echo bloginfo('url'); ?><?php echo '" data-layout="box_count" data-action="like" data-show-faces="true" data-share="true"></div>';
	}
	
?>	
<?php
if ( $scd_option['scd_facebook_style'] == 'Standard' ) {
	echo '<div class="fb-like" data-href="'; ?><?php echo bloginfo('url'); ?><?php echo '" data-layout="standard" data-action="like" data-show-faces="false" data-share="true"></div>'; 
}
elseif ( $scd_option['scd_facebook_style'] == 'Box Count' ) { 
	echo '<div class="fb-like" data-href="'; ?><?php echo bloginfo('url'); ?><?php echo '" data-layout="box_count" data-action="like" data-show-faces="false" data-share="true"></div>';
	}
elseif ( $scd_option['scd_facebook_style'] == 'Button Count' ) { 
	echo '<div class="fb-like" data-href="'; ?><?php echo bloginfo('url'); ?><?php echo '" data-layout="button_count" data-action="like" data-show-faces="false" data-share="true"></div>';
	}		
	
?>	
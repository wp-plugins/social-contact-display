<?php
//tell wordpress to register the demolistposts shortcode
add_shortcode("contact-details-display", "contact_details_display");

function contactdetailsdisplay_handler() {
  //run function that actually does the work of the plugin
  $contactdetailsdisplay_output = contactdetailsdisplay_function();
  //send back text to replace shortcode in post
  return $contactdetailsdisplay_output;
}

function contactdetailsdisplay_function() {
  //process plugin
  $contactdetailsdisplay_output = "Hello World!";
  //send back text to calling function
  return $contactdetailsdisplay_output;
}
?>
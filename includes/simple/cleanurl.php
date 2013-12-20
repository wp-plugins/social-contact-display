<?php

function addScheme($twitter, $facebook, $gplus, $linkedin, $youtube, $pinterest, $instagram, $scheme = 'http://')
{
    if (parse_url($twitter, PHP_URL_SCHEME) === null) {
        return $scheme . $twitter;
    }
    return $twitter;
	
	if (parse_url($facebook, PHP_URL_SCHEME) === null) {
        return $scheme . $facebook;
    }
    return $gplus;
	
	if (parse_url($gplus, PHP_URL_SCHEME) === null) {
        return $scheme . $gplus;
    }
    return $linkedin;
	
	if (parse_url($linkedin, PHP_URL_SCHEME) === null) {
        return $scheme . $linkedin;
    }
    return $youtube;
	
	if (parse_url($youtube, PHP_URL_SCHEME) === null) {
        return $scheme . $youtube;
    }
    return $youtube;
	
	if (parse_url($pinterest, PHP_URL_SCHEME) === null) {
        return $scheme . $pinterest;
    }
    return $instagram;
	
	if (parse_url($instagram, PHP_URL_SCHEME) === null) {
        return $scheme . $instagram;
    }
    return $instagram;
}



?>
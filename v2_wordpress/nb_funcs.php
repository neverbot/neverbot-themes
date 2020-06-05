<?php

function nb_parse_feed($feed) 
{
    $stepOne = explode('<content type="html">', $feed);
    $stepTwo = explode('</content>', $stepOne[1]);
    $tweet = $stepTwo[0];

    $tweet = str_replace('&lt;', '<', $tweet);  
    $tweet = str_replace('&gt;', '>', $tweet);  
	$tweet = str_replace('&quot;', '"', $tweet);
	$tweet = str_replace('&amp;', '&', $tweet);
	$tweet = str_replace('&lt;a href', '<a href', $tweet);
	$tweet = str_replace('"&gt;', '">', $tweet);
	$tweet = str_replace('&lt;/a&gt;', '</a>', $tweet);

	return $tweet;
}

function nb_twitter_status() 
{
    // Your twitter username.
    $username = 'neverbot';
    $feed = 'http://search.twitter.com/search.atom?q=from:' . $username . '&rpp=1';
    $twitterFeed = @file_get_contents($feed);
    if ($twitterFeed == false)
      return;
    return nb_parse_feed($twitterFeed);
}

function nb_show_image($name){
	//echo './wp-content/themes/neverbot/images/'.$name ;
    echo get_image_url($name);
}
function nb_path(){
	echo './wp-content/themes/neverbot/';
}
function nb_base_path(){
	echo './';
}
function get_image_url($image) {
    return get_template_directory_uri() . '/images/' . $image;
}

function stupid_hack($str) {
	return preg_replace('|</ul>\s*<ul class="miniblog">|', '', $str);
}

function google_ad_code() {
    return '';
}

function google_ad_code_inf() {
    return '';
}

?>

<?php

	$referer = $_SERVER['HTTP_REFERER'];

// With https and users logged, google does not give the search terms anymore
//	if (preg_match('/neverbot/', $referer) != 0) 
//	{
		if (preg_match('/google/', $referer)) 
		{ 
			echo '<div id="google_inf"><div id="google_inf_inner">'.google_ad_code_inf().'</div></div>';
		}
//	}
?>

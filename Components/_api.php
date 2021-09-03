<?php

function linkSite($btnStyles = NULL) {
	$btnStyles;
	$anchore = '';
	$siteTitle = '';
	$materialIco = '';
	if ($btnStyles) {
		foreach ($btnStyles as $el => $class) {
			$anchore = $el === 'anchore' ? $class : '';
			$siteTitle = $el === 'title' ? $class : '';
			$materialIco = $el === 'icon' ? $class : '';
		}	
	}

	$btn = '<a type="button" class="btn link-green shadow-none border-0 bg-transparent py-0 d-flex align-items-center '.$anchore.'">Ideas by <span class="site-title '.$siteTitle.'">'. get_bloginfo( 'name' ) . '</span>
	<span class="material-icons-outlined ms-2 '.$materialIco.'">
	chevron_right
	</span>
	</a>';

	echo $btn;
}

?>
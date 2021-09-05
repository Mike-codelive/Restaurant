<?php

function greenBtn() {

	$siteName = get_bloginfo('name');

	$signupBtn = <<<HTML
	<a type="button" class="btn link-green shadow-none border-0 bg-transparent py-0 d-flex align-items-center">Ideas by <span class="site-title">$siteName</span>
	<span class="material-icons-outlined ms-2">
	chevron_right
	</span>
	</a>
	HTML;

	echo $signupBtn;
}

?>
<?php 

function display_icon($icon) {
	$iconUrl = get_theme_mod($icon.'_url');
	$newTab = 'target="_blank"';
	if (empty($iconUrl)) :
		$iconUrl = '#';
		$newTab = '';
	endif;

	echo '<a href="'.$iconUrl.'" '.$newTab.'><i class="bi bi-'.$icon.'"></i></a>';
}

function social_icons($wp_customize) {
	$wp_customize->add_section('social_ico', array(
		'title' => 'Social Icons'
	));


	$wp_customize->add_setting('facebook_display', array(
		'default' => 1,
	));
	$wp_customize->add_control(new WP_customize_control($wp_customize, 'display_facebook_control', array(
		'label' => 'display facebook',
		'section' => 'social_ico',
		'settings' => 'facebook_display',
		'type' => 'checkbox',

	)));
	$wp_customize->add_setting('facebook_url', array(
		'default' => '#',
	));
	$wp_customize->add_control(new WP_customize_control($wp_customize, 'facebook_url_control', array(
		'label' => 'Facebook URL',
		'section' => 'social_ico',
		'settings' => 'facebook_url',
		'input_attrs' => array(
			'placeholder' => __( 'https://www.myurl.com', 'directorist' ),
		)
	)));


	$wp_customize->add_setting('instagram_display', array(
		'default' => 1,
	));
	$wp_customize->add_control(new WP_customize_control($wp_customize, 'display_instagram_control', array(
		'label' => 'display instagram',
		'section' => 'social_ico',
		'settings' => 'instagram_display',
		'type' => 'checkbox',

	)));
	$wp_customize->add_setting('instagram_url', array(
		'default' => '#'
	));
	$wp_customize->add_control(new WP_customize_control($wp_customize, 'instagram_url_control', array(
		'label' => 'Instagram URL',
		'section' => 'social_ico',
		'settings' => 'instagram_url',
		'input_attrs' => array(
			'placeholder' => __( 'https://www.myurl.com', 'directorist' ),
		)
	)));



	$wp_customize->add_setting('twitter_display', array(
		'default' => 1,
	));
	$wp_customize->add_control(new WP_customize_control($wp_customize, 'display_twitter_control', array(
		'label' => 'display twitter',
		'section' => 'social_ico',
		'settings' => 'twitter_display',
		'type' => 'checkbox',

	)));
	$wp_customize->add_setting('twitter_url', array(
		'default' => '#'
	));
	$wp_customize->add_control(new WP_customize_control($wp_customize, 'twitter_url_control', array(
		'label' => 'Twitter URL',
		'section' => 'social_ico',
		'settings' => 'twitter_url',
		'input_attrs' => array(
			'placeholder' => __( 'https://www.myurl.com', 'directorist' ),
		)
	)));



	$wp_customize->add_setting('youtube_display', array(
		'default' => 1,
	));
	$wp_customize->add_control(new WP_customize_control($wp_customize, 'display_youtube_control', array(
		'label' => 'display youtube',
		'section' => 'social_ico',
		'settings' => 'youtube_display',
		'type' => 'checkbox',

	)));
	$wp_customize->add_setting('youtube_url', array(
		'default' => ''
	));
	$wp_customize->add_control(new WP_customize_control($wp_customize, 'youtube_url_control', array(
		'label' => 'Youtube URL',
		'section' => 'social_ico',
		'settings' => 'youtube_url',
		'input_attrs' => array(
			'placeholder' => __( 'https://www.myurl.com', 'directorist' ),
		)
	)));
}

add_action('customize_register', 'social_icons');
?>
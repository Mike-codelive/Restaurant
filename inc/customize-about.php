<?php

function about($wp_customize) {
	$wp_customize->add_section('about_callout_section', array(
		'title' => 'About Us'
	));


  // $wp_customize->add_setting('about_callout_display', array(
  //   'default' => 'yes'
  // ));
  // $wp_customize->add_control(new WP_customize_control($wp_customize, 'about_callout_display_control', array(
  //   'label' => 'display about',
  //   'section' => 'about_callout_section',
  //   'settings' => 'about_callout_display',
  //   'type' => 'select',
  //   'choices' => array(
  //     false => 'no',
  //     true => 'yes'
  //   )
  // )));


	$wp_customize->add_setting('about_callout_title', array(
		'default' => 'Why ' . get_bloginfo('name')
	));
	$wp_customize->add_control(new WP_customize_control($wp_customize, 'about_callout_title_control', array(
		'label' => 'title',
		'section' => 'about_callout_section',
		'settings' => 'about_callout_title'
	)));


	$wp_customize->add_setting('about_callout_headline', array(
		'default' => 'About Us'
	));
	$wp_customize->add_control(new WP_customize_control($wp_customize, 'about_callout_headline_control', array(
		'label' => 'headline',
		'section' => 'about_callout_section',
		'settings' => 'about_callout_headline'
	)));


	$wp_customize->add_setting('about_callout_paragraph', array(
		'default' => "Craving some delicious French food? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quis ab fugit, dolor vero, velit ea eius porro natus? Maxime omnis nam tempore animi officia molestias ipsam repudiandae id! Corporis exercitationem molestiae placeat ex magnam rem nam eos recusandae, porro commodi dignissimos sed rerum doloremque perferendis ducimus sit, alias nemo. Lorem ipsum dolor sit amet consectetur, adipisicing, elit. Earum, quasi."
	));
	$wp_customize->add_control(new WP_customize_control($wp_customize, 'about_callout_paragraph_control', array(
		'label' => 'paragraph',
		'section' => 'about_callout_section',
		'settings' => 'about_callout_paragraph',
		'type' => 'textarea'
	)));


	// $wp_customize->add_setting('about_callout_card_headline', array(
	// 	'default' => get_bloginfo( "name" ) . ' Agency'
	// ));
	// $wp_customize->add_control(new WP_customize_control($wp_customize, 'about_callout_card_headline_control', array(
	// 	'label' => 'headline card',
	// 	'section' => 'about_callout_section',
	// 	'settings' => 'about_callout_card_headline'
	// )));


	// $wp_customize->add_setting('about_callout_card_paragraph', array(
	// 	'default' => "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eos odio nihil eaque repellendus."
	// ));
	// $wp_customize->add_control(new WP_customize_control($wp_customize, 'about_callout_card_paragraph_control', array(
	// 	'label' => 'paragraph card',
	// 	'section' => 'about_callout_section',
	// 	'settings' => 'about_callout_card_paragraph',
	// 	'type' => 'textarea'
	// )));


	$wp_customize->add_setting('about_callout_image');
	$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'about_callout_image_control', array(
		'label' => 'image',
		'section' => 'about_callout_section',
		'settings' => 'about_callout_image',
		'width' => 550,
		'height' => 500
	)));


	$wp_customize->add_setting('about_callout_loc_title', array(
		'default' => 'location'
	));
	$wp_customize->add_control(new WP_customize_control($wp_customize, 'about_callout_title_loc_control', array(
		'label' => 'Location title',
		'section' => 'about_callout_section',
		'settings' => 'about_callout_loc_title'
	)));


	$wp_customize->add_setting('about_callout_loc_paragraph', array(
		'default' => "Craving some delicious French food? Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti quis ab fugit, dolor vero, velit ea eius porro natus?"
	));
	$wp_customize->add_control(new WP_customize_control($wp_customize, 'about_callout_loc_paragraph_control', array(
		'label' => 'location paragraph',
		'section' => 'about_callout_section',
		'settings' => 'about_callout_loc_paragraph',
		'type' => 'textarea'
	)));
};

add_action('customize_register', 'about');

?>
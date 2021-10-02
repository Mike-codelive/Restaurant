<?php
/**
 * Register Customize
 *
 * @package Restaurant
 */

namespace RESTAURANT_THEME\Inc;

use RESTAURANT_THEME\Inc\Traits\Singleton;

class Customize extends WP_Customize_Control {

	use Singleton;

	protected function __construct() {

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action('customize_register', [ $this, 'hero_callout' ]);
	}

	public function hero_callout($wp_customize) {
		$wp_customize->add_section('hero_callout_section', array(
			'title' => 'Hero'
		));
		$wp_customize->add_setting('hero_callout_display', array(
			'default' => 'yes'
		));
		$wp_customize->add_control(new WP_customize_control($wp_customize, 'hero_callout_display_control', array(
			'label' => 'display',
			'section' => 'hero_callout_section',
			'settings' => 'hero_callout_display',
			'type' => 'select',
			'choices' => array(
				false => 'no',
				true => 'yes'
			)
		)));
		$wp_customize->add_setting('hero_callout_headline', array(
			'default' => 'Welcome to our Restaurant'
		));
		$wp_customize->add_control(new WP_customize_control($wp_customize, 'hero_callout_headline_control', array(
			'label' => 'headline',
			'section' => 'hero_callout_section',
			'settings' => 'hero_callout_headline'
		)));
		$wp_customize->add_setting('hero_callout_paragraph', array(
			'default' => "Revolutionize you workspace. Whether you're an established enterprise or a growing startup, discover spaces that inspire you most impactful work."
		));
		$wp_customize->add_control(new WP_customize_control($wp_customize, 'hero_callout_paragraph_control', array(
			'label' => 'paragraph',
			'section' => 'hero_callout_section',
			'settings' => 'hero_callout_paragraph',
			'type' => 'textarea'
		)));

		$wp_customize->add_setting('hero_callout_image');
		$wp_customize->add_control(new WP_Customize_Cropped_Image_Control($wp_customize, 'hero_callout_image_control', array(
			'label' => 'image',
			'section' => 'hero_callout_section',
			'settings' => 'hero_callout_image',
			'width' => 1080,
			'height' => 720
		)));
	}

}

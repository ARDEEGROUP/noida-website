<?php
/**
 * Adds a small "Campus Details" section to Appearance → Customize
 * so the address, phone and email used in the header/footer/contact
 * templates can be edited without touching PHP.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

function ardee_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'ardee_campus_details', array(
		'title'    => __( 'Campus Details', 'ardee-montessori' ),
		'priority' => 30,
	) );

	$wp_customize->add_setting( 'ardee_address', array(
		'default'           => "Lotus Boulevard, Sector 100\nNoida 201301",
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'ardee_address', array(
		'label'   => __( 'Campus address', 'ardee-montessori' ),
		'section' => 'ardee_campus_details',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'ardee_email', array(
		'default'           => 'admissions@noida.theardeeschool.com',
		'sanitize_callback' => 'sanitize_email',
	) );
	$wp_customize->add_control( 'ardee_email', array(
		'label'   => __( 'Admissions email', 'ardee-montessori' ),
		'section' => 'ardee_campus_details',
		'type'    => 'email',
	) );

	$wp_customize->add_setting( 'ardee_phone', array(
		'default'           => '180010ARDEE (18001027333)',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'ardee_phone', array(
		'label'   => __( 'Phone (display text)', 'ardee-montessori' ),
		'section' => 'ardee_campus_details',
		'type'    => 'text',
	) );
}
add_action( 'customize_register', 'ardee_customize_register' );

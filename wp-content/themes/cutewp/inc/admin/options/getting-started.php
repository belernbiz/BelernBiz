<?php
/**
* Getting started options
*
* @package CuteWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function cutewp_getting_started($wp_customize) {

    $wp_customize->add_section( 'sc_cutewp_getting_started', array( 'title' => esc_html__( 'Getting Started', 'cutewp' ), 'description' => esc_html__( 'Thanks for your interest in CuteWP! If you have any questions or run into any trouble, please visit us the following links. We will get you fixed up!', 'cutewp' ), 'panel' => 'cutewp_main_options_panel', 'priority' => 5, ) );

    $wp_customize->add_setting( 'cutewp_options[documentation]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new CuteWP_Customize_Button_Control( $wp_customize, 'cutewp_documentation_control', array( 'label' => esc_html__( 'Documentation', 'cutewp' ), 'section' => 'sc_cutewp_getting_started', 'settings' => 'cutewp_options[documentation]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/cutewp-wordpress-theme/', 'button_target' => '_blank', ) ) );

    $wp_customize->add_setting( 'cutewp_options[contact]', array( 'default' => '', 'sanitize_callback' => '__return_false', ) );

    $wp_customize->add_control( new CuteWP_Customize_Button_Control( $wp_customize, 'cutewp_contact_control', array( 'label' => esc_html__( 'Contact Us', 'cutewp' ), 'section' => 'sc_cutewp_getting_started', 'settings' => 'cutewp_options[contact]', 'type' => 'button', 'button_tag' => 'a', 'button_class' => 'button button-primary', 'button_href' => 'https://themesdna.com/contact/', 'button_target' => '_blank', ) ) );

}
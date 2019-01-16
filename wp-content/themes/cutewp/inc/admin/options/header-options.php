<?php
/**
* Header options
*
* @package CuteWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function cutewp_header_options($wp_customize) {

    $wp_customize->add_section( 'sc_cutewp_header', array( 'title' => esc_html__( 'Header Options', 'cutewp' ), 'panel' => 'cutewp_main_options_panel', 'priority' => 240 ) );

    $wp_customize->add_setting( 'cutewp_options[hide_header_content]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'cutewp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'cutewp_hide_header_content_control', array( 'label' => esc_html__( 'Hide Header Content', 'cutewp' ), 'section' => 'sc_cutewp_header', 'settings' => 'cutewp_options[hide_header_content]', 'type' => 'checkbox', ) );

}
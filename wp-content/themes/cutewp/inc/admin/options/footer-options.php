<?php
/**
* Footer options
*
* @package CuteWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function cutewp_footer_options($wp_customize) {

    $wp_customize->add_section( 'sc_cutewp_footer', array( 'title' => esc_html__( 'Footer', 'cutewp' ), 'panel' => 'cutewp_main_options_panel', 'priority' => 440 ) );

    $wp_customize->add_setting( 'cutewp_options[footer_text]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'cutewp_sanitize_html', ) );

    $wp_customize->add_control( 'cutewp_footer_text_control', array( 'label' => esc_html__( 'Footer copyright notice', 'cutewp' ), 'section' => 'sc_cutewp_footer', 'settings' => 'cutewp_options[footer_text]', 'type' => 'text', ) );

    $wp_customize->add_setting( 'cutewp_options[hide_footer_widgets]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'cutewp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'cutewp_hide_footer_widgets_control', array( 'label' => esc_html__( 'Hide Footer Widgets', 'cutewp' ), 'section' => 'sc_cutewp_footer', 'settings' => 'cutewp_options[hide_footer_widgets]', 'type' => 'checkbox', ) );

}
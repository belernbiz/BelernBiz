<?php
/**
* Social profiles options
*
* @package CuteWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function cutewp_social_profiles($wp_customize) {

    $wp_customize->add_section( 'sc_cutewp_sociallinks', array( 'title' => esc_html__( 'Social Links', 'cutewp' ), 'panel' => 'cutewp_main_options_panel', 'priority' => 400, ));

    $wp_customize->add_setting( 'cutewp_options[hide_header_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'cutewp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'cutewp_hide_header_social_buttons_control', array( 'label' => esc_html__( 'Hide Header Social Buttons', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[hide_header_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'cutewp_options[hide_footer_social_buttons]', array( 'default' => false, 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'cutewp_sanitize_checkbox', ) );

    $wp_customize->add_control( 'cutewp_hide_footer_social_buttons_control', array( 'label' => esc_html__( 'Hide Footer Social Buttons', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[hide_footer_social_buttons]', 'type' => 'checkbox', ) );

    $wp_customize->add_setting( 'cutewp_options[twitterlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_twitterlink_control', array( 'label' => esc_html__( 'Twitter URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[twitterlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[facebooklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_facebooklink_control', array( 'label' => esc_html__( 'Facebook URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[facebooklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[googlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) ); 

    $wp_customize->add_control( 'cutewp_googlelink_control', array( 'label' => esc_html__( 'Google Plus URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[googlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[pinterestlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_pinterestlink_control', array( 'label' => esc_html__( 'Pinterest URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[pinterestlink]', 'type' => 'text' ) );
    
    $wp_customize->add_setting( 'cutewp_options[linkedinlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_linkedinlink_control', array( 'label' => esc_html__( 'Linkedin Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[linkedinlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[instagramlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_instagramlink_control', array( 'label' => esc_html__( 'Instagram Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[instagramlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[vklink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_vklink_control', array( 'label' => esc_html__( 'VK Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[vklink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[flickrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_flickrlink_control', array( 'label' => esc_html__( 'Flickr Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[flickrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[youtubelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_youtubelink_control', array( 'label' => esc_html__( 'Youtube URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[youtubelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[vimeolink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_vimeolink_control', array( 'label' => esc_html__( 'Vimeo URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[vimeolink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[soundcloudlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_soundcloudlink_control', array( 'label' => esc_html__( 'Soundcloud URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[soundcloudlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[lastfmlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_lastfmlink_control', array( 'label' => esc_html__( 'Lastfm URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[lastfmlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[githublink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_githublink_control', array( 'label' => esc_html__( 'Github URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[githublink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[bitbucketlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_bitbucketlink_control', array( 'label' => esc_html__( 'Bitbucket URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[bitbucketlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[tumblrlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_tumblrlink_control', array( 'label' => esc_html__( 'Tumblr URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[tumblrlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[digglink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_digglink_control', array( 'label' => esc_html__( 'Digg URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[digglink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[deliciouslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_deliciouslink_control', array( 'label' => esc_html__( 'Delicious URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[deliciouslink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[stumblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_stumblelink_control', array( 'label' => esc_html__( 'Stumbleupon Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[stumblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[redditlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_redditlink_control', array( 'label' => esc_html__( 'Reddit Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[redditlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[dribbblelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_dribbblelink_control', array( 'label' => esc_html__( 'Dribbble Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[dribbblelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[behancelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_behancelink_control', array( 'label' => esc_html__( 'Behance Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[behancelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[codepenlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_codepenlink_control', array( 'label' => esc_html__( 'Codepen Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[codepenlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[jsfiddlelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_jsfiddlelink_control', array( 'label' => esc_html__( 'JSFiddle Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[jsfiddlelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[stackoverflowlink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_stackoverflowlink_control', array( 'label' => esc_html__( 'Stack Overflow Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[stackoverflowlink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[stackexchangelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_stackexchangelink_control', array( 'label' => esc_html__( 'Stack Exchange Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[stackexchangelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[bsalink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_bsalink_control', array( 'label' => esc_html__( 'BuySellAds Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[bsalink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[slidesharelink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_slidesharelink_control', array( 'label' => esc_html__( 'SlideShare Link', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[slidesharelink]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[skypeusername]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'cutewp_skypeusername_control', array( 'label' => esc_html__( 'Skype Username', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[skypeusername]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[emailaddress]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'cutewp_sanitize_email' ) );

    $wp_customize->add_control( 'cutewp_emailaddress_control', array( 'label' => esc_html__( 'Email Address', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[emailaddress]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[telephonenumber]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'sanitize_text_field' ) );

    $wp_customize->add_control( 'cutewp_telephonenumber_control', array( 'label' => esc_html__( 'Telephone Number', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[telephonenumber]', 'type' => 'text' ) );

    $wp_customize->add_setting( 'cutewp_options[rsslink]', array( 'default' => '', 'type' => 'option', 'capability' => 'edit_theme_options', 'sanitize_callback' => 'esc_url_raw' ) );

    $wp_customize->add_control( 'cutewp_rsslink_control', array( 'label' => esc_html__( 'RSS Feed URL', 'cutewp' ), 'section' => 'sc_cutewp_sociallinks', 'settings' => 'cutewp_options[rsslink]', 'type' => 'text' ) );

}
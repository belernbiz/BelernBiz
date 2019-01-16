<?php
/**
* The header for CuteWP theme.
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package CuteWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php wp_head(); ?>
</head>

<body <?php body_class('cutewp-animated cutewp-fadein'); ?> id="cutewp-site-body" itemscope="itemscope" itemtype="http://schema.org/WebPage">

<?php if ( !(cutewp_get_option('disable_secondary_menu')) ) { ?>
<div class="cutewp-container cutewp-secondary-menu-container clearfix">
<div class="cutewp-secondary-menu-container-inside clearfix">
<nav class="cutewp-nav-secondary" id="cutewp-secondary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
<div class="cutewp-outer-wrapper">
<?php wp_nav_menu( array( 'theme_location' => 'secondary', 'menu_id' => 'cutewp-menu-secondary-navigation', 'menu_class' => 'cutewp-secondary-nav-menu cutewp-menu-secondary', 'fallback_cb' => 'cutewp_top_fallback_menu', ) ); ?>
</div>
</nav>
</div>
</div>
<?php } ?>

<div class="cutewp-container" id="cutewp-header" itemscope="itemscope" itemtype="http://schema.org/WPHeader" role="banner">
<div class="cutewp-head-content clearfix" id="cutewp-head-content">

<?php if ( get_header_image() ) : ?>
<div class="cutewp-header-image clearfix">
<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="cutewp-header-img-link">
    <img src="<?php header_image(); ?>" width="<?php echo esc_attr(get_custom_header()->width); ?>" height="<?php echo esc_attr(get_custom_header()->height); ?>" alt="" class="cutewp-header-img"/>
</a>
</div>
<?php endif; ?>

<?php if ( !(cutewp_get_option('hide_header_content')) ) { ?>
<div class="cutewp-outer-wrapper">
<div class="cutewp-header-inside clearfix">

<div id="cutewp-logo">
<?php if ( has_custom_logo() ) : ?>
    <div class="site-branding">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home" class="cutewp-logo-img-link">
        <img src="<?php echo esc_url( cutewp_custom_logo() ); ?>" alt="" class="cutewp-logo-img"/>
    </a>
    </div>
<?php else: ?>
    <div class="site-branding">
      <h1 class="cutewp-site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
      <p class="cutewp-site-description"><?php bloginfo( 'description' ); ?></p>
    </div>
<?php endif; ?>
</div><!--/#cutewp-logo -->

<div class="cutewp-header-banner">
<?php dynamic_sidebar( 'cutewp-header-banner' ); ?>
</div><!--/.cutewp-header-banner -->

</div>
</div>
<?php } ?>

</div><!--/#cutewp-head-content -->
</div><!--/#cutewp-header -->

<div class="cutewp-container cutewp-primary-menu-container clearfix">
<div class="cutewp-primary-menu-container-inside clearfix">
<?php if ( !(cutewp_get_option('disable_primary_menu')) ) { ?>
<nav class="cutewp-nav-primary" id="cutewp-primary-navigation" itemscope="itemscope" itemtype="http://schema.org/SiteNavigationElement" role="navigation">
<div class="cutewp-outer-wrapper">
<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'cutewp-menu-primary-navigation', 'menu_class' => 'cutewp-nav-primary-menu cutewp-menu-primary', 'fallback_cb' => 'cutewp_fallback_menu', ) ); ?>

<?php if ( !(cutewp_get_option('hide_header_social_buttons')) ) { cutewp_header_social_buttons(); } ?>
</div>
</nav>
<?php } ?>
<div id="cutewp-search-overlay-wrap" class="cutewp-search-overlay">
  <span class="cutewp-search-closebtn" title="<?php esc_attr_e('Close Search','cutewp'); ?>">&#xD7;</span>
  <div class="cutewp-search-overlay-content">
    <?php get_search_form(); ?>
  </div>
</div>
</div>
</div>

<div class="cutewp-outer-wrapper">
<?php cutewp_top_wide_widgets(); ?>
</div>

<div class="cutewp-outer-wrapper">
<div class="cutewp-container clearfix" id="cutewp-wrapper">
<div class="cutewp-content-wrapper clearfix" id="cutewp-content-wrapper">
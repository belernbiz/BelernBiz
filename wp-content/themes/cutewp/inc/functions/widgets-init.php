<?php
/**
* Register widget area.
*
* @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
*
* @package CuteWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function cutewp_widgets_init() {

register_sidebar(array(
    'id' => 'cutewp-header-banner',
    'name' => esc_html__( 'Header Banner', 'cutewp' ),
    'description' => esc_html__( 'This sidebar is located on the header of the web page.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-header-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title">',
    'after_title' => '</h2>'));

register_sidebar(array(
    'id' => 'cutewp-sidebar-one',
    'name' => esc_html__( 'Main Sidebar', 'cutewp' ),
    'description' => esc_html__( 'This sidebar is normally located on the left-hand side of web page.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-side-widget cutewp-box widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'cutewp-home-top-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Home Page Only)', 'cutewp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of homepage.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'cutewp-top-fullwidth-widgets',
    'name' => esc_html__( 'Top Full Width Widgets (Every Page)', 'cutewp' ),
    'description' => esc_html__( 'This full-width widget area is located at the top of every page.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'cutewp-home-bottom-fullwidth-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Home Page Only)', 'cutewp' ),
    'description' => esc_html__( 'This full-width widget area is located at the bottom of homepage.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'cutewp-bottom-fullwidth-widgets',
    'name' => esc_html__( 'Bottom Full Width Widgets (Every Page)', 'cutewp' ),
    'description' => esc_html__( 'This full-width widget area is located at the bottom of every page.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'cutewp-home-top-widgets',
    'name' => esc_html__( 'Top Widgets (Home Page Only)', 'cutewp' ),
    'description' => esc_html__( 'This widget area is located at the top of homepage.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'cutewp-top-widgets',
    'name' => esc_html__( 'Top Widgets (Every Page)', 'cutewp' ),
    'description' => esc_html__( 'This widget area is located at the top of every page.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'cutewp-home-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Home Page Only)', 'cutewp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of homepage.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'cutewp-bottom-widgets',
    'name' => esc_html__( 'Bottom Widgets (Every Page)', 'cutewp' ),
    'description' => esc_html__( 'This widget area is located at the bottom of every page.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-main-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'cutewp-footer-1',
    'name' => esc_html__( 'Footer 1', 'cutewp' ),
    'description' => esc_html__( 'This sidebar is located on the left bottom of web page.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'cutewp-footer-2',
    'name' => esc_html__( 'Footer 2', 'cutewp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'cutewp-footer-3',
    'name' => esc_html__( 'Footer 3', 'cutewp' ),
    'description' => esc_html__( 'This sidebar is located on the middle bottom of web page.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

register_sidebar(array(
    'id' => 'cutewp-footer-4',
    'name' => esc_html__( 'Footer 4', 'cutewp' ),
    'description' => esc_html__( 'This sidebar is located on the right bottom of web page.', 'cutewp' ),
    'before_widget' => '<div id="%1$s" class="cutewp-footer-widget widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h2 class="cutewp-widget-title"><span>',
    'after_title' => '</span></h2>'));

}
add_action( 'widgets_init', 'cutewp_widgets_init' );


function cutewp_top_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'cutewp-home-top-fullwidth-widgets' ) || is_active_sidebar( 'cutewp-top-fullwidth-widgets' ) ) : ?>
<div class="cutewp-top-wrapper-outer clearfix">
<div class="cutewp-featured-posts-area cutewp-top-wrapper clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'cutewp-home-top-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'cutewp-top-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function cutewp_bottom_wide_widgets() { ?>

<?php if ( is_active_sidebar( 'cutewp-home-bottom-fullwidth-widgets' ) || is_active_sidebar( 'cutewp-bottom-fullwidth-widgets' ) ) : ?>
<div class="cutewp-bottom-wrapper-outer clearfix">
<div class="cutewp-featured-posts-area cutewp-bottom-wrapper clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'cutewp-home-bottom-fullwidth-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'cutewp-bottom-fullwidth-widgets' ); ?>
</div>
</div>
<?php endif; ?>

<?php }


function cutewp_top_widgets() { ?>

<?php if ( is_active_sidebar( 'cutewp-home-top-widgets' ) || is_active_sidebar( 'cutewp-top-widgets' ) ) : ?>
<div class="cutewp-featured-posts-area cutewp-featured-posts-area-top clearfix">
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'cutewp-home-top-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'cutewp-top-widgets' ); ?>
</div>
<?php endif; ?>

<?php }


function cutewp_bottom_widgets() { ?>

<?php if ( is_active_sidebar( 'cutewp-home-bottom-widgets' ) || is_active_sidebar( 'cutewp-bottom-widgets' ) ) : ?>
<div class='cutewp-featured-posts-area cutewp-featured-posts-area-bottom clearfix'>
<?php if(is_front_page() && !is_paged()) { ?>
<?php dynamic_sidebar( 'cutewp-home-bottom-widgets' ); ?>
<?php } ?>

<?php dynamic_sidebar( 'cutewp-bottom-widgets' ); ?>
</div>
<?php endif; ?>

<?php }
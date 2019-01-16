<?php
/**
* More Custom Functions
*
* @package CuteWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

// Get custom-logo URL
function cutewp_custom_logo() {
    if ( ! has_custom_logo() ) {return;}
    $cutewp_custom_logo_id = get_theme_mod( 'custom_logo' );
    $cutewp_logo = wp_get_attachment_image_src( $cutewp_custom_logo_id , 'full' );
    return $cutewp_logo[0];
}

// Category ids in post class
function cutewp_category_id_class($classes) {
        global $post;
        foreach((get_the_category($post->ID)) as $category) {
            $classes [] = 'wpcat-' . $category->cat_ID . '-id';
        }
        return $classes;
}
add_filter('post_class', 'cutewp_category_id_class');

// Change excerpt length
function cutewp_excerpt_length($length) {
    if ( is_admin() ) {
        return $length;
    }
    $read_more_length = 20;
    if ( cutewp_get_option('read_more_length') ) {
        $read_more_length = cutewp_get_option('read_more_length');
    }
    return $read_more_length;
}
add_filter('excerpt_length', 'cutewp_excerpt_length');

// Change excerpt more word
function cutewp_excerpt_more($more) {
       if ( is_admin() ) {
         return $more;
       }
       return '...';
}
add_filter('excerpt_more', 'cutewp_excerpt_more');

// Adds custom classes to the array of body classes.
function cutewp_body_classes( $classes ) {
    // Adds a class of group-blog to blogs with more than 1 published author.
    if ( is_multi_author() ) {
        $classes[] = 'cutewp-group-blog';
    }

    if( is_singular() ) {
        if ( is_page_template( array( 'template-full-width-page.php', 'template-full-width-post.php' ) ) ) {
            $classes[] = 'cutewp-layout-full-width';
        }
    } else {
        if ( is_404() ) {
            $classes[] = 'cutewp-layout-full-width';
        }
    }

    if ( !is_active_sidebar( 'cutewp-home-bottom-widgets' ) && !is_active_sidebar( 'cutewp-single-bottom-widgets' ) && !is_active_sidebar( 'cutewp-singular-bottom-widgets' ) && !is_active_sidebar( 'cutewp-bottom-widgets' ) ) {
        $classes[] = 'cutewp-no-bottom-widgets';
    }

    return $classes;
}
add_filter( 'body_class', 'cutewp_body_classes' );


function cutewp_post_style() {
       $post_style = 'grid';
       return $post_style;
}


function cutewp_grid_thumb_style() {
       $thumb_style = 'cutewp-hauto-image';
       return $thumb_style;
}


function cutewp_post_grid_cols() {
       $post_column = 'cutewp-3-col';
       return $post_column;
}

function cutewp_grid_no_thumb_url() {
       $thumb_url = get_template_directory_uri() . '/assets/images/no-image-4-4.jpg';
       return $thumb_url;
}
<?php
/**
* Post meta functions
*
* @package CuteWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

if ( ! function_exists( 'cutewp_post_tags' ) ) :
/**
 * Prints HTML with meta information for the tags.
 */
function cutewp_post_tags() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space after the comma */
        $tags_list = get_the_tag_list( '', esc_html_x( ', ', 'list item separator', 'cutewp' ) );
        if ( $tags_list ) {
            /* translators: 1: list of tags. */
            printf( '<span class="cutewp-tags-links"><i class="fa fa-tags" aria-hidden="true"></i> ' . esc_html__( 'Tagged %1$s', 'cutewp' ) . '</span>', $tags_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'cutewp_grid_cats' ) ) :
function cutewp_grid_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( '&nbsp;', 'cutewp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="cutewp-grid-post-categories">' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'cutewp' ) . '</div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'cutewp_grid_postmeta' ) ) :
function cutewp_grid_postmeta() { ?>
    <?php if ( !(cutewp_get_option('hide_post_author_home')) || !(cutewp_get_option('hide_posted_date_home')) || !(cutewp_get_option('hide_comments_link_home')) ) { ?>
    <div class="cutewp-grid-post-footer">
    <div class="cutewp-grid-post-footer-inside">
    <?php if ( !(cutewp_get_option('hide_post_author_home')) ) { ?><span class="cutewp-grid-post-author cutewp-grid-post-meta"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span><?php } ?>
    <?php if ( !(cutewp_get_option('hide_posted_date_home')) ) { ?><span class="cutewp-grid-post-date cutewp-grid-post-meta"><?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(cutewp_get_option('hide_comments_link_home')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="cutewp-grid-post-comment cutewp-grid-post-meta"><?php comments_popup_link( esc_attr__( 'Leave a comment', 'cutewp' ), esc_attr__( '1 Comment', 'cutewp' ), esc_attr__( '% Comments', 'cutewp' ) ); ?></span>
    <?php } ?><?php } ?>
    </div>
    </div>
    <?php } ?>
<?php }
endif;


if ( ! function_exists( 'cutewp_single_cats' ) ) :
function cutewp_single_cats() {
    if ( 'post' == get_post_type() ) {
        /* translators: used between list items, there is a space */
        $categories_list = get_the_category_list( esc_html__( ', ', 'cutewp' ) );
        if ( $categories_list ) {
            /* translators: 1: list of categories. */
            printf( '<div class="cutewp-entry-meta-single cutewp-entry-meta-single-top"><span class="cutewp-entry-meta-single-cats"><i class="fa fa-folder-open-o"></i>&nbsp;' . __( '<span class="screen-reader-text">Posted in </span>%1$s', 'cutewp' ) . '</span></div>', $categories_list ); // WPCS: XSS OK.
        }
    }
}
endif;


if ( ! function_exists( 'cutewp_single_postmeta' ) ) :
function cutewp_single_postmeta() { ?>
    <?php if ( !(cutewp_get_option('hide_post_author')) || !(cutewp_get_option('hide_posted_date')) || !(cutewp_get_option('hide_comments_link')) || !(cutewp_get_option('hide_post_edit')) ) { ?>
    <div class="cutewp-entry-meta-single">
    <?php if ( !(cutewp_get_option('hide_post_author')) ) { ?><span class="cutewp-entry-meta-single-author"><i class="fa fa-user-circle-o"></i>&nbsp;<span class="author vcard" itemscope="itemscope" itemtype="http://schema.org/Person" itemprop="author"><a class="url fn n" href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>"><?php echo esc_html( get_the_author() ); ?></a></span></span><?php } ?>
    <?php if ( !(cutewp_get_option('hide_posted_date')) ) { ?><span class="cutewp-entry-meta-single-date"><i class="fa fa-clock-o"></i>&nbsp;<?php echo get_the_date(); ?></span><?php } ?>
    <?php if ( !(cutewp_get_option('hide_comments_link')) ) { ?><?php if ( comments_open() ) { ?>
    <span class="cutewp-entry-meta-single-comments"><i class="fa fa-comments-o"></i>&nbsp;<?php comments_popup_link( esc_attr__( 'Leave a comment', 'cutewp' ), esc_attr__( '1 Comment', 'cutewp' ), esc_attr__( '% Comments', 'cutewp' ) ); ?></span>
    <?php } ?><?php } ?>
    <?php if ( !(cutewp_get_option('hide_post_edit')) ) { ?><?php edit_post_link( esc_html__( 'Edit', 'cutewp' ), '<span class="edit-link">&nbsp;&nbsp;<i class="fa fa-pencil" aria-hidden="true"></i> ', '</span>' ); ?><?php } ?>
    </div>
    <?php } ?>
<?php }
endif;
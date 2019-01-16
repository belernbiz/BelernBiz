<?php
/**
* Template part for displaying posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package CuteWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

<div id="post-<?php the_ID(); ?>" class="cutewp-grid-post <?php echo esc_attr( cutewp_post_grid_cols() ); ?>">
<div class="cutewp-grid-post-inside">

    <?php if ( has_post_thumbnail() ) { ?>
    <?php if ( !(cutewp_get_option('hide_thumbnail')) ) { ?>
    <div class="cutewp-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'cutewp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><?php the_post_thumbnail(cutewp_grid_thumb_style(), array('class' => 'cutewp-grid-post-thumbnail-img')); ?></a>
        <?php if ( !(cutewp_get_option('hide_post_categories_home')) ) { cutewp_grid_cats(); } ?>
    </div>
    <?php } else { ?>
    <div class="cutewp-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'cutewp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( cutewp_grid_no_thumb_url() ); ?>" class="cutewp-grid-post-thumbnail-img"/></a>
        <?php if ( !(cutewp_get_option('hide_post_categories_home')) ) { cutewp_grid_cats(); } ?>
    </div>
    <?php } ?>
    <?php } else { ?>
    <div class="cutewp-grid-post-thumbnail">
        <a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php /* translators: %s: post title. */ echo esc_attr( sprintf( __( 'Permanent Link to %s', 'cutewp' ), the_title_attribute( 'echo=0' ) ) ); ?>"><img src="<?php echo esc_url( cutewp_grid_no_thumb_url() ); ?>" class="cutewp-grid-post-thumbnail-img"/></a>
        <?php if ( !(cutewp_get_option('hide_post_categories_home')) ) { cutewp_grid_cats(); } ?>
    </div>
    <?php } ?>

    <div class="cutewp-grid-post-details">
    <?php the_title( sprintf( '<h3 class="cutewp-grid-post-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

    <?php if ( !(cutewp_get_option('hide_post_snippet')) ) { ?><div class="cutewp-grid-post-snippet"><?php the_excerpt(); ?></div><?php } ?>

    <?php cutewp_grid_postmeta(); ?>
    </div>

</div>
</div>
<?php
/**
* The main template file.
*
* This is the most generic template file in a WordPress theme
* and one of the two required files for a theme (the other being style.css).
* It is used to display a page when nothing more specific matches a query.
* E.g., it puts together the home page when no home.php file exists.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/
*
* @package CuteWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

get_header(); ?>

<div class="cutewp-main-wrapper clearfix" id="cutewp-main-wrapper" itemscope="itemscope" itemtype="http://schema.org/Blog" role="main">
<div class="theiaStickySidebar">
<div class="cutewp-main-wrapper-inside clearfix">

<?php cutewp_top_widgets(); ?>

<div class="cutewp-posts-wrapper" id="cutewp-posts-wrapper">

<?php if ( !(cutewp_get_option('hide_posts_heading')) ) { ?>
<?php if(is_home() && !is_paged()) { ?>
<?php if ( cutewp_get_option('posts_heading') ) : ?>
<h1 class="cutewp-posts-heading"><span><?php echo esc_html( cutewp_get_option('posts_heading') ); ?></span></h1>
<?php else : ?>
<h1 class="cutewp-posts-heading"><span><?php esc_html_e( 'Recent Posts', 'cutewp' ); ?></span></h1>
<?php endif; ?>
<?php } ?>
<?php } ?>

<div class="cutewp-posts-content">
<div class="cutewp-posts-container">

<?php if (have_posts()) : ?>

    <div class="cutewp-posts">
    <div class="<?php echo esc_attr( cutewp_post_grid_cols() ); ?>-sizer"></div>
    <div class="<?php echo esc_attr( cutewp_post_grid_cols() ); ?>-gutter"></div>
    <?php $cutewp_total_posts = $wp_query->post_count; ?>
    <?php $cutewp_post_counter=1; while (have_posts()) : the_post(); ?>

        <?php get_template_part( 'template-parts/content', cutewp_post_style() ); ?>

    <?php $cutewp_post_counter++; endwhile; ?>
    </div>
    <div class="clear"></div>

    <?php cutewp_posts_navigation(); ?>

<?php else : ?>

  <?php get_template_part( 'template-parts/content', 'none' ); ?>

<?php endif; ?>

</div>
</div>

</div><!--/#cutewp-posts-wrapper -->

<?php cutewp_bottom_widgets(); ?>

</div>
</div>
</div><!-- /#cutewp-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
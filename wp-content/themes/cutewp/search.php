<?php
/**
* The template for displaying search results pages.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
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

<header class="page-header">
<h1 class="page-title"><?php /* translators: %s: search query. */ printf( esc_html__( 'Search Results for: %s', 'cutewp' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
</header>

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
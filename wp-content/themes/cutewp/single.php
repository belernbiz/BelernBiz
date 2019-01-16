<?php
/**
* The template for displaying all single posts.
*
* @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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

<?php while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'template-parts/content', 'single' ); ?>

    <?php the_post_navigation(array('prev_text' => esc_html__( '&larr; %title', 'cutewp' ), 'next_text' => esc_html__( '%title &rarr;', 'cutewp' ))); ?>

    <?php
    // If comments are open or we have at least one comment, load up the comment template
    if ( comments_open() || get_comments_number() ) :
            comments_template();
    endif;
    ?>

<?php endwhile; ?>
<div class="clear"></div>

</div><!--/#cutewp-posts-wrapper -->

<?php cutewp_bottom_widgets(); ?>

</div>
</div>
</div><!-- /#cutewp-main-wrapper -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
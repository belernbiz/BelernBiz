<?php
/**
* The template for displaying the footer
*
* @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
*
* @package CuteWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/
?>

</div><!--/#cutewp-content-wrapper -->
</div><!--/#cutewp-wrapper -->
</div>

<div class="cutewp-outer-wrapper">
<?php cutewp_bottom_wide_widgets(); ?>
</div>

<?php if ( !(cutewp_get_option('hide_footer_social_buttons')) ) { ?>
<div class="cutewp-bottom-social-bar">
<div class="cutewp-outer-wrapper">
<?php cutewp_footer_social_buttons(); ?>
</div>
</div>
<?php } ?>

<?php if ( !(cutewp_get_option('hide_footer_widgets')) ) { ?>
<?php if ( is_active_sidebar( 'cutewp-footer-1' ) || is_active_sidebar( 'cutewp-footer-2' ) || is_active_sidebar( 'cutewp-footer-3' ) || is_active_sidebar( 'cutewp-footer-4' ) ) : ?>
<div class='clearfix' id='cutewp-footer-blocks' itemscope='itemscope' itemtype='http://schema.org/WPFooter' role='contentinfo'>
<div class='cutewp-container clearfix'>
<div class="cutewp-outer-wrapper">

<div class='cutewp-footer-block'>
<?php dynamic_sidebar( 'cutewp-footer-1' ); ?>
</div>

<div class='cutewp-footer-block'>
<?php dynamic_sidebar( 'cutewp-footer-2' ); ?>
</div>

<div class='cutewp-footer-block'>
<?php dynamic_sidebar( 'cutewp-footer-3' ); ?>
</div>

<div class='cutewp-footer-block'>
<?php dynamic_sidebar( 'cutewp-footer-4' ); ?>
</div>

</div>
</div><!--/#cutewp-footer-blocks-->
</div>
<?php endif; ?>
<?php } ?>

<div class='clearfix' id='cutewp-footer'>
<div class='cutewp-foot-wrap cutewp-container'>
<div class="cutewp-outer-wrapper">
<?php if ( cutewp_get_option('footer_text') ) : ?>
  <p class='cutewp-copyright'><?php echo esc_html(cutewp_get_option('footer_text')); ?></p>
<?php else : ?>
  <p class='cutewp-copyright'><?php /* translators: %s: Year and site name. */ printf( esc_html__( 'Copyright &copy; %s', 'cutewp' ), esc_html(date_i18n(__('Y','cutewp'))) . ' ' . esc_html(get_bloginfo( 'name' ))  ); ?></p>
<?php endif; ?>
<p class='cutewp-credit'><a href="<?php echo esc_url( 'https://themesdna.com/' ); ?>"><?php /* translators: %s: Theme author. */ printf( esc_html__( 'Design by %s', 'cutewp' ), 'ThemesDNA.com' ); ?></a></p>
</div>
</div><!--/#cutewp-footer -->
</div>

<?php wp_footer(); ?>
</body>
</html>
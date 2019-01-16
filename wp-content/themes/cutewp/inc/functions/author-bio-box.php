<?php
/**
* Author bio box
*
* @package CuteWP WordPress Theme
* @copyright Copyright (C) 2018 ThemesDNA
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 or later
* @author ThemesDNA <themesdna@gmail.com>
*/

function cutewp_add_author_bio_box() {
    $content='';
    if (is_single()) {
        $content .= '
            <div class="cutewp-author-bio">
            <div class="cutewp-author-bio-top">
            <div class="cutewp-author-bio-gravatar">
                '. get_avatar( get_the_author_meta('email') , 80 ) .'
            </div>
            <div class="cutewp-author-bio-text">
                <h4>'.esc_html__( 'Author: ', 'cutewp' ).'<span>'. get_the_author_link() .'</span></h4>'. get_the_author_meta('description',get_query_var('author') ) .'
            </div>
            </div>
            </div>
        ';
    }
    return $content;
}
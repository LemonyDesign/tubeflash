<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package tubeflash
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function tubeflash_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'tubeflash_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function tubeflash_jetpack_setup
add_action( 'after_setup_theme', 'tubeflash_jetpack_setup' );

function tubeflash_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function tubeflash_infinite_scroll_render
<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package super simple news page
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function super_simple_news_page_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'footer'    => 'page',
	) );
}
add_action( 'after_setup_theme', 'super_simple_news_page_jetpack_setup' );

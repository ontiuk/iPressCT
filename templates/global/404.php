<?php

/**
 * iPress - WordPress Theme Framework
 * ==========================================================
 *
 * Template for displaying the main 404 page content.
 *
 * @see     https://codex.wordpress.org/Template_Hierarchy
 *
 * @package iPress\Templates
 * @link    http://ipress.uk
 * @license GPL-2.0+
 */
?>

<?php do_action( 'ipress_before_404' ); ?>

<section class="error-404 not-found">

	<header class="page-header">
		<h1 class="page-title error-title"><?php echo esc_html__( 'Oops! That page can&rsquo;t be found.', 'ipress-child' ); ?></h1>
		<p><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Return home?', 'ipress-child' ); ?></a></p>
	</header><!-- .page-header -->

	<div id="post-404" class="page-content">
		<p><?php echo esc_html__( 'Nothing found at this location.', 'ipress-child' ); ?></p>
		<?php get_search_form(); ?>

		<?php do_action( 'ipress_404' ); ?>

	</div><!-- .page-content -->

</section><!-- .error-404 -->

<?php do_action( 'ipress_after_404' ); // phpcs:ignore Squiz.PHP.EmbeddedPhp.ContentAfterOpen

<?php 

/**
 * iPress - WordPress Theme Framework                       
 * ==========================================================
 *
 * Template for home page breadcrumb.
 * 
 * @package     iPress\Templates
 * @link        http://ipress.uk
 * @license     GPL-2.0+
 */
?>
<!-- Breadcrumb -->
<section class="header-breadcrumb home-breadcrumb">
	<div class="container">
		<ul id="breadcrumblist" class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php echo esc_html__( 'Home', 'ipress-child' ); ?></a></li>
			<li class="breadcrumb-item active"><?php echo esc_html( single_post_title() ); ?></li>
		</ul>
	</div>
</section>
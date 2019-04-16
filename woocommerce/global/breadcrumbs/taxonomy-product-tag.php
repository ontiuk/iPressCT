<?php 

/**
 * iPress - WordPress Theme Framework                       
 * ==========================================================
 *
 * Template for taxonomy product tag archive page breadcrumb
 * 
 * @package     iPress\Templates
 * @link        http://ipress.uk
 * @license     GPL-2.0+
 */
?>

<?php defined( 'ABSPATH' ) || exit; ?>
	 
<!-- Breadcrumb -->
<section class="header-breadcrumb tag-breadcrumb py-2 mb-0">
	<div class="container">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= esc_url( home_url( '/' ) ); ?>"><?= __( 'Home', 'ipress-child' ); ?></a></li>
			<li class="breadcrumb-item"><?= __( 'Tag', 'ipress-child' ); ?></li>
			<li class="breadcrumb-item active"><?= single_tag_title( '', false ); ?></li>
		</ul>
	</div>
</section>

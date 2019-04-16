<?php 

/**
 * iPress - WordPress Theme Framework                       
 * ==========================================================
 *
 * Template for taxonomy product category archive page breadcrumb
 * 
 * @package     iPress\Templates
 * @link        http://ipress.uk
 * @license     GPL-2.0+
 */
?>

<?php defined( 'ABSPATH' ) || exit; ?>

<?php
$tax 		= get_taxonomy( get_queried_object()->taxonomy );
$tax_type 	= $tax->labels->singular_name;
$tax_title	= single_term_title( '', false );
?>
<!-- Breadcrumb -->
<section class="header-breadcrumb taxonomy-breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= esc_url( home_url( '/' ) ); ?>"><?= __( 'Home', 'ipress-child' ); ?></a></li>
			<?php if ( ! empty( $tax_type ) ) : ?>
			<li class="breadcrumb-item"><?= $tax_type; ?></li>
			<?php endif; ?>
			<li class="breadcrumb-item active"><?= $tax_title; ?></li>
		</ul>
	</div>
</section>

<?php 

/**
 * iPress - WordPress Theme Framework                       
 * ==========================================================
 *
 * Template for woocommerce account page breadcrumb
 * 
 * @package     iPress\Templates
 * @link        http://ipress.uk
 * @license     GPL-2.0+
 */
?>

<?php defined( 'ABSPATH' ) || exit; ?>

<!-- Breadcrumb -->
<section class="header-breadcrumb account-breadcrumb">
	<div class="container">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= esc_url( home_url( '/' ) ); ?>"><?= __( 'Home', 'ipress-child' ); ?></a></li>
			<li class="breadcrumb-item"><?= __( 'Account', 'ipress-child' ); ?></li>
			<li class="breadcrumb-item active"><?= get_the_author(); ?></li>
		</ul>
	</div>
</section>

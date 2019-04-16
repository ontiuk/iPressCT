<?php 

/**
 * iPress - WordPress Theme Framework                       
 * ==========================================================
 *
 * Template for woocommerce single product breadcrumb
 * 
 * @package     iPress\Templates
 * @link        http://ipress.uk
 * @license     GPL-2.0+
 */
?>

<?php defined( 'ABSPATH' ) || exit; ?>

<!-- Breadcrumbs-->
<section class="header-breadcrumb single-product-breadcrumb">
    <div class="container">
	   <ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="<?= esc_url( home_url( '/' ) ); ?>"><?= __( 'Home', 'ipress-child' ); ?></a></li>
			<li class="breadcrumb-item"><a href="<?= esc_url( get_permalink( wc_get_page_id( 'shop' ) ) ); ?>"><?= __( 'Products', 'ipress-child' ); ?></a></li>
			<li class="breadcrumb-item active"><?php woocommerce_page_title(); ?></li>
		</ul>
    </div>
</section>

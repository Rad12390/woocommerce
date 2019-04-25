<?php
/**
 * Single Product Price
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<p class="price"><?php echo $product->get_price_html(); ?></p>
<div class="single_variation_wrap">
			<div class="woocommerce-variation single_variation" style="">
	<div class="woocommerce-variation-description"></div>
	<div class="woocommerce-variation-price"><span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span></span></span></div>
	<div class="woocommerce-variation-availability"></div>
</div><div class="woocommerce-variation-add-to-cart variations_button woocommerce-variation-add-to-cart-enabled">
		
</div>
		</div>
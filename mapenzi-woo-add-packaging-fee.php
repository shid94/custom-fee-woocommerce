<?php
/**
 * plugin Name: Packaging Cost Extra Fee
 * plugin Author: Rashid Migadde
 * Plugin URI: https://techrooms.ug
 * Author URI: https://techrooms.ug
 * text-domain: rashid-wigdget
 */

function woo_add_packing_fee() {
 
    global $woocommerce;
      
    $woocommerce->cart->add_fee( __('Packaging', 'rashid-wigdget'), 1500 );
      
  }
  add_action( 'woocommerce_cart_calculate_fees', 'woo_add_packing_fee' );
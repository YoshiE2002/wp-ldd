<?php
/**
 * Customer completed order email
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/emails/customer-completed-order.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you (the theme developer).
 * will need to copy the new files to your theme to maintain compatibility. We try to do this.
 * as little as possible, but it does happen. When this occurs the version of the template file will.
 * be bumped and the readme will list any important changes.
 *
 * @see 	    http://docs.woothemes.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates/Emails
 * @version     2.5.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * @hooked WC_Emails::email_header() Output the email header
 */
do_action( 'woocommerce_email_header', $email_heading, $email ); ?>

<p><?php printf( __( "Your Lil' Duck Duck order # {order_number} has been packaged and is ready for shipping! Please use the below number for shipping status and estimated date of delivery: <br /><br />Delivery Confirmation/Tracking Number: {TrackingNumber}
                   <br /><br />
Just double check your tracking number to confirm your shipping method. If using USPS Express Mail, those shipments require a signature for delivery (as noted previously). <br /><br />
                    
Please remember that the USPS does not employ a live tracking system. The numbers are usually updated in the evening - delivery confirmation numbers may not be updated until your cards are delivered. <br /><br />
                    
                    Your cards are shipping to the address below, which you confirmed with us.
                    
                    Thank you for choosing Lil Duck Duck for your special event!", 'woocommerce' ), get_option( 'blogname' ) ); ?></p>

<h2><?php printf( __( 'Order #%s', 'woocommerce' ), $order->get_order_number() ); ?></h2><?php

/**
 * @hooked WC_Emails::order_meta() Shows order meta data.
 */

/**
 * @hooked WC_Emails::customer_details() Shows customer details
 * @hooked WC_Emails::email_address() Shows email address
 */
do_action( 'woocommerce_email_address', $order, $sent_to_admin, $plain_text, $email );

/**
 * @hooked WC_Emails::email_footer() Output the email footer
 */
do_action( 'woocommerce_email_footer', $email );

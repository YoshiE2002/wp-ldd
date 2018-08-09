<?php
/**
 * Thankyou page
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/checkout/thankyou.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.2.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div class="woocommerce-order">

	<?php if ( $order ) : ?>

		<?php if ( $order->has_status( 'failed' ) ) : ?>

			<p class="woocommerce-notice woocommerce-notice--error woocommerce-thankyou-order-failed"><?php _e( 'Unfortunately your request cannot be processed. Please try again or contact us.', 'woocommerce' ); ?></p>

		<?php else : ?>
			<p class="woocommerce-notice woocommerce-notice--success woocommerce-thankyou-order-received"><?php _e( 'Your request number: ', 'woocommerce' ); ?><strong><?php echo $order->get_order_number(); ?></strong></p>

		<?php endif; ?>
<p>If your design uses photos, just upload them below, <a href="https://spaces.hightail.com/uplink/LilDuckDuck" target="_blank" rel="noopener"><u>use the bulk uploader here</u></a>, or e-mail them: <a href="mailto:orders@lilduckduck.com">Orders@LilDuckDuck.Com</a> with your order number in the subject line (1-2 original, largest quality photo files per e-mail). <p/>

<script src="https://lilduckduck.app.box.com/upload-widget/embed.js?folderID=57436792&title=Send%20Us%20Your%20Photos!&instructions=One%20file%20per%20upload%20please.&isDescriptionFieldShown=1&isEmailRequired=1&width=385&height=420&token=0z9lck3dqvydgc4khgqclvuqzc2oif7h" type="text/javascript"></script>

<p>We just e-mailed your request details for easy reference, if you do not see it, please check your other (spam/bulk/etc) folders. Please add <a href="mailto:orders@lilduckduck.com">Orders@LilDuckDuck.Com</a> to your safe senders list or address book. Your e-mail is only used for messages about your request,  your proofs <em>(within 24 hours on business days - <u><a href="https://lilduckduck.com/faq" target="_blank" rel="noopener">see all timing info here</a></u>)</em> and your invoice <em>(sent after final proof approval)</em>.</p>

<h3><b>How to Send Your Photos</b></h3>
<br/>
<p>To e-mail your photos: please send 1-2 original photo files per message<em> (*the files right from the camera or phone that took them, before any editing or sharing apps / programs)</em> to <a href="mailto:orders@lilduckduck.com">Orders@LilDuckDuck.Com</a>.</p>

<p><a href="https://lilduckduck.com/scan" target="_blank" rel="noopener">A quick scanning tutorial</a> is here, we are happy to help too, just e-mail us with questions.</p>

<p>Finally, you can also postal mail us your photos. Make sure that you use a photo safe mailer as we cannot be responsible for any damage to your photos in transit to us. They will be sent back to you with your completed order. Just e-mail us for our physical mailing address.</p>

<p>NOTE - Any photos copyrighted by a studio, professional, or copyrighted to any other individual or company must have a signed photo reprinting permission form from the copyright holder. If you do not already have a form, just <a href="https://lilduckduck.com/wp-content/uploads/Photo-Release-Form-LilDuckDuck.pdf" target="_blank" rel="noopener">download ours here</a> and have them complete it. Then scan or take a clear photo of the completed form &amp; e-mail it back to us.</p>

<p>Need more information? See our <a href="https://lilduckduck.com/faq" target="_blank" rel="noopener">FAQ</a> page and our <a href="https://lilduckduck.com/image-standards-policies" target="_blank" rel="noopener">Image Standards &amp; Policies</a> page.</p>

<p><strong>Questions? Simply email <a href="mailto:customerservice@lilduckduck.com">customerservice@lilduckduck.com</a> and we will be happy to help you.</strong></p>

<p>Thanks so much for your proof request with Lil' Duck Duck!</p>
	
	<?php endif; ?>
</div>
<?php
/**
 * @var \WC_Payment_Gateway_Stripe_ACH $gateway
 */

?>
<div id="wc-stripe-ach-container">
    <p class="wc-stripe-ach__mandate">
		<?php echo esc_html( $gateway->get_mandate_text() ) ?>
    </p>
	<?php if ( $gateway->show_save_payment_method_html() ): ?>
		<?php wc_stripe_get_template( 'save-payment-method.php', array( 'gateway' => $gateway ) ) ?>
	<?php endif; ?>
</div>

<?php

namespace PaymentPlugins\Blocks\Stripe\Payments\Gateways;

class AffirmPayment extends \PaymentPlugins\Blocks\Stripe\Payments\AbstractStripeLocalPayment {

	protected $name = 'stripe_affirm';

	public function get_payment_method_data() {
		$data       = parent::get_payment_method_data();
		$cart_total = 0;
		if ( WC()->cart ) {
			$cart_total = (float) WC()->cart->total;
		}
		$currency = get_woocommerce_currency();
		$data     = array_merge( $data, [
			'cartTotals'         => [
				'value' => wc_stripe_add_number_precision( $cart_total, $currency )
			],
			'currency'           => $currency,
			'requirements'       => $this->payment_gateway->get_payment_method_requirements(),
			'accountCountry'     => stripe_wc()->account_settings->get_account_country( wc_stripe_mode() ),
			'messageOptions'     => [
				'logoColor' => $this->get_setting( "checkout_logo_color", 'primary' ),
				'fontColor' => $this->get_setting( "checkout_font_color", 'black' ),
				'fontSize'  => $this->get_setting( "checkout_font_size", '1em' ),
				'textAlign' => $this->get_setting( "checkout_text_align", 'start' ),
			],
			'cartMessageOptions' => [
				'logoColor' => $this->get_setting( "cart_logo_color", 'primary' ),
				'fontColor' => $this->get_setting( "cart_font_color", 'black' ),
				'fontSize'  => $this->get_setting( "cart_font_size", '1em' ),
				'textAlign' => $this->get_setting( "cart_text_align", 'start' ),
			],
			'paymentSections'    => $this->get_setting( 'payment_sections', [] ),
			'cartEnabled'        => \in_array( 'cart', $this->get_setting( 'payment_sections', [] ) )
		] );


		return $data;
	}

}
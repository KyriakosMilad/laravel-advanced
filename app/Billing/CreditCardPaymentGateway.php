<?php

namespace App\Billing;

use Illuminate\Support\Str;

class CreditCardPaymentGateway implements PaymentGatewayContract
{
	private $currency;
	private $discount;

	public function __construct($currency, $discount = 0) {
		$this->currency = $currency;
		$this->discount = $discount;
	}

	public function setDiscount($amount) {
		$this->discount = $amount;
	}

	public function charge($amount) {
		return [
			'amount' => $amount - $this->discount,
			'discount' => $this->discount,
			'currency' => $this->currency,
			'confirmation_str' => Str::random(),
			'payment_way' => 'cc',
		];
	}
}

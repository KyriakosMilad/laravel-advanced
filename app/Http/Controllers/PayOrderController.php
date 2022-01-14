<?php

namespace App\Http\Controllers;

use App\Billing\PaymentGatewayContract;
use App\Orders\OrderDetails;
use Illuminate\Http\Request;

class PayOrderController extends Controller
{
    public function store(OrderDetails $orderDetails, PaymentGatewayContract $paymentGateway) {
//			$paymentGateway = new BankPaymentGateway();

			$order = $orderDetails->all();

			dd($paymentGateway->charge(55));
		}
}

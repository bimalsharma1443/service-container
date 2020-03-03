<?php

namespace App\Http\Controllers;

use App\Order\OrderDetail;
use App\Payment\PaymentDetail;
use Illuminate\Http\Request;

class PaymentGateway extends Controller
{
    public function paymentDetail(OrderDetail $orderDetail,PaymentDetail $paymentDetail) {
        dump($orderDetail->all());
        dd($paymentDetail->payment('2500'));
    }
}

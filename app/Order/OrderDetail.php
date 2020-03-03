<?php

namespace App\Order;

use App\Payment\PaymentDetail;
use Illuminate\Support\Str;

class OrderDetail {

    protected $PaymentDetail;

    public function __construct(PaymentDetail $paymentDetail)
    {
        $this->PaymentDetail = $paymentDetail;
    }

    public function all() {

        $this->PaymentDetail->setFees('12');

        return [
            'name' => Str::random(4),
            'address' => Str::random(13),
        ];

    }

}
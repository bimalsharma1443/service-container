<?php
namespace App\Payment;

use Illuminate\Support\Str;

class PaymentDetail {

    protected $paymentType;
    protected $fees;

    public function __construct($paymentType)
    {
        $this->paymentType = $paymentType;
        $this->fees = 0;
    }

    public function setFees($fees) {
        $this->fees = $fees;
    }

    public function payment($amount) {

        // payment detail

        $fee = $this->fees;

        return [
            'amount' => $amount+$fee,
            'name' => Str::random(6),
            'address' => Str::random(12),
            'payment_type' => $this->paymentType
        ];
    }

}
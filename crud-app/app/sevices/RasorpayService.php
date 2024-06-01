<?php

namespace App\Services;

use Razorpay\Api\Api;

class RazorpayService
{
    protected $keyId;
    protected $keySecret;
    protected $api;

    public function __construct()
    {
        $this->keyId ="rzp_test_X2TH8z6PoxzpQS";
        $this->keySecret ="dNo530r6cWRDXiwBZVcULm9H";
        $this->api = new Api($this->keyId, $this->keySecret);
    }

    public function createOrder($amount, $currency = 'INR')
    {
        $order = $this->api->order->create([
            'amount' => $amount * 100, // Razorpay accepts amount in paise
            'currency' => $currency,
        ]);

        return $order;
    }

    // Add more methods as needed
}
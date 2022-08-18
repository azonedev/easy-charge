<?php

use EasyCharge\Enums\Gateway;

return [
    // add new gateway or enable disable existing one
    'gateways' => [
        Gateway::STRIPE => [
            'enabled' => true,
            'gateway' => Stripe::class,
            'credentials' => [
                'stripe_key' => env('STRIPE_KEY', null),
                'stripe_secret' => env('STRIPE_SECRET', null)
            ],
        ],
        Gateway::PAYPAL => [
            'enabled'   => true,
            'gateway'   => Paypal::class,
            'credentials' => [
                'client_id' => env('PAYPAL_CLIENT_ID', null),
                'client_secret' => env('PAYPAL_CLIENT_SECRET', null)
            ],
        ]
    ],
];
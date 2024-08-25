<?php
// -----
// A Zen Cart payment method to accept customers' payment via Zelle®.
//
// Copyright (C) 2021-2024, Vinos de Frutas Tropicales (lat9).
//
$define = [
    'MODULE_PAYMENT_ZELLE_TEXT_TITLE' => 'Pay via Zelle&reg;',

    'MODULE_PAYMENT_ZELLE_TEXT_DESCRIPTION_ADMIN' => 'Customers can make a payment via their bank\'s Zelle&reg; app.  Their order-confirmation email will include the Zelle ID that you provide in the payment method\'s configuration.',
    'MODULE_PAYMENT_ZELLE_TEXT_DESCRIPTION' => 'We will include our Zelle ID in your order-confirmation email. Your order will ship after we receive payment.',

    // -----
    // The '%s' will be filled in with the store-specific payment ID.
    //
    'MODULE_PAYMENT_ZELLE_TEXT_EMAIL_FOOTER', "Use your Zelle&reg; app to make a payment to %s. Please include your order-number in the payment comments.\n\nYour order will ship after we receive payment.",
];
return $define;

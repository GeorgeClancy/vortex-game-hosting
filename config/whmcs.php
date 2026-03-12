<?php

return [
    /*
     * Base URL of your WHMCS installation, e.g. https://vortexgamehosting.co.uk/billing
     */
    'url' => env('WHMCS_URL', 'https://vortexgamehosting.co.uk/billing'),

    /*
     * WHMCS API credentials — generate at:
     * WHMCS Admin → Setup → API Credentials → Generate Credentials
     */
    'identifier' => env('WHMCS_API_IDENTIFIER', ''),
    'secret'     => env('WHMCS_API_SECRET', ''),

    /*
     * Currency code to pull prices for (must match currency shortcode in WHMCS)
     */
    'currency' => env('WHMCS_CURRENCY', 'GBP'),
];

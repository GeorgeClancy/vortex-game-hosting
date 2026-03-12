<?php

namespace App\Services;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class WhmcsService
{
    /**
     * Fallback prices keyed by PID — used when the WHMCS API is unavailable.
     * Update these if you change prices in WHMCS and the API is temporarily down.
     */
    private const FALLBACK_PRICES = [
        1  => ['name' => '7 Days to Die',         'monthly' => '10.99', 'annually' => '8.79'],
        16 => ['name' => 'Arma 3',                 'monthly' => '5.25',  'annually' => '4.20'],
        17 => ['name' => 'Arma Reforger',          'monthly' => '5.25',  'annually' => '4.20'],
        18 => ['name' => 'ARK: Survival Evolved',  'monthly' => '4.49',  'annually' => '3.59'],
        19 => ['name' => 'DayZ',                   'monthly' => '7.86',  'annually' => '6.29'],
        20 => ['name' => 'Minecraft',              'monthly' => '1.49',  'annually' => '1.19'],
        21 => ['name' => "Garry's Mod",            'monthly' => '2.24',  'annually' => '1.79'],
        23 => ['name' => 'Palworld',               'monthly' => '1.49',  'annually' => '1.19'],
        25 => ['name' => 'The Forest',             'monthly' => '6.00',  'annually' => '4.80'],
        26 => ['name' => 'The Isle',               'monthly' => '15.01', 'annually' => '12.01'],
        27 => ['name' => 'Unturned',               'monthly' => '19.51', 'annually' => '15.61'],
        28 => ['name' => 'Valheim',                'monthly' => '3.75',  'annually' => '3.00'],
        29 => ['name' => 'Scum',                   'monthly' => '7.50',  'annually' => '6.00'],
    ];

    /**
     * Returns prices keyed by PID:
     * [ pid => ['name' => '...', 'monthly' => '1.49', 'annually' => '1.19'], ... ]
     *
     * Results are cached for 60 minutes. Falls back to hardcoded prices on any error.
     */
    public function getPrices(): array
    {
        return Cache::remember('whmcs_prices', 3600, function () {
            return $this->fetchFromWhmcs();
        });
    }

    /**
     * Force-refresh the price cache (call after updating prices in WHMCS).
     */
    public function refreshPrices(): array
    {
        Cache::forget('whmcs_prices');
        return $this->getPrices();
    }

    private function fetchFromWhmcs(): array
    {
        $url        = rtrim(config('whmcs.url'), '/') . '/includes/api.php';
        $identifier = config('whmcs.identifier');
        $secret     = config('whmcs.secret');

        if (!$url || !$identifier || !$secret) {
            return self::FALLBACK_PRICES;
        }

        try {
            $response = Http::timeout(5)->asForm()->post($url, [
                'action'            => 'GetProducts',
                'identifier'        => $identifier,
                'secret'            => $secret,
                'responsetype'      => 'json',
            ]);

            if (!$response->successful()) {
                return self::FALLBACK_PRICES;
            }

            $data = $response->json();

            if (($data['result'] ?? '') !== 'success') {
                return self::FALLBACK_PRICES;
            }

            $prices = [];
            $currency = config('whmcs.currency', 'GBP');

            foreach ($data['products']['product'] ?? [] as $product) {
                $pid     = (int) $product['pid'];
                $pricing = $product['pricing'][$currency] ?? [];

                $monthly  = $this->formatPrice($pricing['monthly']  ?? -1);
                $annually = $this->formatPrice($pricing['annually'] ?? -1);

                // If WHMCS doesn't have a billing cycle configured it returns -1
                // Fall back to fallback price for that cycle
                $fallback = self::FALLBACK_PRICES[$pid] ?? null;

                $prices[$pid] = [
                    'name'     => $product['name'],
                    'monthly'  => $monthly  !== null ? $monthly  : ($fallback['monthly']  ?? null),
                    'annually' => $annually !== null ? $annually : ($fallback['annually'] ?? null),
                ];
            }

            return !empty($prices) ? $prices : self::FALLBACK_PRICES;

        } catch (\Throwable $e) {
            Log::warning('WhmcsService: failed to fetch prices — ' . $e->getMessage());
            return self::FALLBACK_PRICES;
        }
    }

    private function formatPrice($value): ?string
    {
        $float = (float) $value;
        return $float > 0 ? number_format($float, 2, '.', '') : null;
    }
}

<?php

namespace Astrogoat\GoogleReviews\Settings;

use Helix\Lego\Settings\AppSettings;

class GoogleReviewsSettings extends AppSettings
{
    public int|string $merchant_id;

    protected array $rules = [
        'merchant_id' => ['required'],
    ];

    public function description(): string
    {
        return 'Google reviews provide useful information and help your business stand out. Reviews show up next to your Business Profile in Maps and Search.';
    }
}

<?php

namespace Astrogoat\GoogleReviews\Settings;

use Helix\Lego\Settings\AppSettings;

class GoogleReviewsSettings extends AppSettings
{
    public int $merchant_id;

    protected array $rules = [
        'merchant_id' => ['required'],
    ];

    public function description(): string
    {
        return 'Interact with Google Reviews.';
    }
}

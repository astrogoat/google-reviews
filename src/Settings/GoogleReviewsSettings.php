<?php

namespace Astrogoat\GoogleReviews\Settings;

use Helix\Lego\Settings\AppSettings;

class GoogleReviewsSettings extends AppSettings
{
    public int $merchantId;

    protected array $rules = [
        'merchantId' => ['required'],
    ];

    public function description(): string
    {
        return 'Interact with GoogleReviews.';
    }
}

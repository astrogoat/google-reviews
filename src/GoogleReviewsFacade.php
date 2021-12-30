<?php

namespace Astrogoat\GoogleReviews;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Astrogoat\GoogleReviews\GoogleReviews
 */
class GoogleReviewsFacade extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'google-reviews';
    }
}

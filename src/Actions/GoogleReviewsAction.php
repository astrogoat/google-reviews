<?php

namespace Astrogoat\GoogleReviews\Actions;

use Helix\Lego\Apps\Actions\Action;

class GoogleReviewsAction extends Action
{
    public static function actionName(): string
    {
        return 'GoogleReviews action name';
    }

    public static function run(): mixed
    {
        return redirect()->back();
    }
}

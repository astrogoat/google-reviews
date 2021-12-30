<?php

namespace Astrogoat\GoogleReviews\Commands;

use Illuminate\Console\Command;

class GoogleReviewsCommand extends Command
{
    public $signature = 'google-reviews';

    public $description = 'My command';

    public function handle()
    {
        $this->comment('All done');
    }
}

<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

class CreateGoogleReviewsSettings extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('googlereviews.enabled', false);
        $this->migrator->add('googlereviews.merchant_id', 7880076);
    }

    public function down()
    {
        $this->migrator->delete('googlereviews.enabled');
        $this->migrator->delete('googlereviews.merchant_id');
    }
}
